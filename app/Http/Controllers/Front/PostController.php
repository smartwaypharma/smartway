<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Mail\SendPost;
use App\Models\Filter;
use App\Models\Category;
use App\Models\Settings;
use App\Mail\SendEnquiry;
use App\Mail\SendSmartNote;
use App\Models\EnquiryData;
use Illuminate\Http\Request;
use App\Models\ContactUsFormData;
use App\Models\SmartNotesFormData;
use App\Mail\SendAutomatedResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    public function blog()
    {
        $url = url()->previous();

        $selectedFilters = $this->getFiltersByUrl($url);

        if ($selectedFilters->count() < 2) {
            $url = explode('/', $url);
            array_pop($url);
            $url = implode('/', $url);

            $selectedFilters = $this->getFiltersByUrl($url);
        }

        $latestBlogTitle = Settings::where('key', 'latest-blog-title')->first();
        $ourLatestBlogLink = Settings::where('key', 'our-latest-blog-link')->first();

        $filters = Filter::all();
        $selectedFilters = $selectedFilters->pluck('id')->toArray();

        $posts = Post::with('category')
            ->whereHas('tags', function ($q) use ($selectedFilters) {
                $q->whereIn('tag_id', $selectedFilters);
            })->orderBy('created_at', 'desc')
            ->paginate(12);

        $category = Category::all();

        return view('front.pages.who-we-are.media-resource-centre', compact(
            'latestBlogTitle',
            'ourLatestBlogLink',
            'posts',
            'filters',
            'selectedFilters',
            'category',
        ));
    }

    protected function getFiltersByUrl($url)
    {
        try {
            $routeName = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
        } catch (NotFoundHttpException $e){
            $routeName = '';
        }

        return Filter::whereNull('route_name')->orWhere('route_name', $routeName)->get();
    }

    public function filter(Request $request)
    {
        $html = '';
        $posts = Post::with('category');

        if ($request->filters != null) {
            $filters = explode(',', $request->filters);
            $posts = $posts->whereHas('tags', function ($q) use ($filters) {
                $q->whereIn('tag_id', $filters);
            });
        }

        if ($request->categories != null) {
            $categories = explode(',', $request->categories);
            $posts = $posts->whereIn('category_id', $categories);
        }

        $posts = $posts
            ->orderBy('created_at', 'desc')
            ->paginate($request->per_page, ['*'], 'page', $request->page);

        foreach ($posts as $post) {
            $url = route('who-we-are.media-and-resource-centre.post', [$post->category->slug, $post->slug]);

            $html .= '<div class="text-lg lg:leading-28px leading-24px">
            <img class="lg:w-auto sm:w-3/4" src="' . Storage::url($post->hero_image_for_desktop) . '">
            <p class="opacity-50 mt-3">' . $post->created_at->format("d F Y") . '</p>
            <p class="font-bold mt-1 mb-2">' . $post->category->name . '</p>
            <a href="' . $url . '"class="4xl:text-2xl lg:text-xl text-2xl leading-none font-bold text-lochmara mb-2">' . $post->title . '</a>
            <p class="lg:mt-6 mt-2">' . $post->getShortPostBody() . '</p>
          </div>';
        }

        return response()->json(['posts' => $posts, 'html' => $html]);
    }

    public function post(Request $request)
    {
        $category = Category::where('slug', $request->category)
            ->firstOrFail();

        $post = Post::where('slug', $request->slug)
            ->where('category_id', $category->id)->firstOrFail();

        $moreArticles = \App\Models\Post::with('category')->whereIn('id', array_filter([
            $post->first_post_id,
            $post->second_post_id,
            $post->third_post_id,
        ]))->orderBy('created_at', 'desc')
            ->get();

        return view('front.pages.who-we-are.media-centre.' . $category->slug, compact('post', 'moreArticles'));
    }

    public function smartnoteDownload(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'company' => 'nullable|string|max:255',
            'cf-turnstile-response' => 'required'
        ]);

        $response = Http::withOptions([
            'verify' => false,
        ])->asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => env('TURNSTILE_SECRET_KEY'),
            'response' => $request->input('cf-turnstile-response'),
            'remoteip' => $request->ip(),
        ]);
    
        $result = $response->json();

        if (!$result['success']) {
            return back()->withErrors(['turnstile' => 'Turnstile verification failed. Please try again.']);
        }

        Mail::to([
            ['email' => $request['email'], 'name' => $request->firstname . ' ' . $request->lastname],
            ['email' => env('SMARTNOTE_COPY_TO_ADDRESS')]
        ])
            ->send(new SendSmartNote($request->all()));

        SmartNotesFormData::create($request->except('_token'));
    }

    public function postDownload(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'company' => 'nullable|string|max:255'
        ]);

        Mail::to([
            ['email' => env('SMARTNOTE_COPY_TO_ADDRESS')]
        ])
            ->send(new SendPost($request->all()));

        ContactUsFormData::create($request->except('_token'));
    }

    public function enquiry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phoneNumber' => 'nullable|phone:AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KR,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,ZW',
            'message' => 'required',
            'regularUpdate' => 'required',
            'policy' => 'required'
        ]);

        Mail::to([
            ['email' => "ulm@smartwaypharma.co.uk"]
        ])->send(new SendEnquiry($request->all()));

        Mail::to([
            ['email' => $request['email']]
        ])->send(new SendAutomatedResponse($request->all()));

       EnquiryData::create($request->except('_token'));
    }
}
