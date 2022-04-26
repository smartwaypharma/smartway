<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SendSmartNote;
use App\Models\Category;
use App\Models\Filter;
use App\Models\Post;
use App\Models\Settings;
use App\Models\SmartNotesFormData;
use Illuminate\Http\Request;
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

        return view('front.pages.who-we-are.media-resource-centre', compact(
            'latestBlogTitle',
            'ourLatestBlogLink',
            'posts',
            'filters',
            'selectedFilters'
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
        ]))
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
        ]);

        Mail::to([
            ['email' => $request['email'], 'name' => $request->firstname . ' ' . $request->lastname],
            ['email' => env('SMARTNOTE_COPY_TO_ADDRESS')]
        ])
            ->send(new SendSmartNote($request->all()));

        SmartNotesFormData::create($request->except('_token'));
    }
}
