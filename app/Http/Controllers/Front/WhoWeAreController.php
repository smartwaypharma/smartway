<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SpeculativeApplicationNotification;
use App\Mail\UKApplicationNotification;
use App\Mail\ResponsiblePersonApplicationNotification;
use App\Mail\ThankYouNotification;
use App\Models\Post;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WhoWeAreController extends Controller
{
    public function ourHistory()
    {
        return view('front.pages.who-we-are.our-history');
    }

    public function regulatoryCompliance()
    {
        return view('front.pages.who-we-are.regulatory-compliance');
    }

    public function meetTheTeam()
    {
        return view('front.pages.who-we-are.meet-the-team');
    }

    public function careers()
    {
        return view('front.pages.who-we-are.careers');
    }

    public function speculativeApplication()
    {
        return view('front.pages.who-we-are.speculative-application');
    }

    public function socialResponsibility()
    {
        return view('front.pages.who-we-are.social-responsibility');
    }

    /*public function UKRegulatoryAssistantApplication()
    {
        return view('front.pages.who-we-are.uk-regulatory-assistant-application');
    }*/

    public function BilingualCustomerServiceRepresentative()
    {
        return view('front.pages.who-we-are.bilingual-customer-service-representative');
    }

    public function ResponsiblePersonApplication()
    {
        return view('front.pages.who-we-are.responsible-person-application');
    }

    public function speculativeApplicationFormSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'organisation' => 'required',
            'job_title' => 'required',
            'phone_number' => 'nullable|phone:AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KR,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,ZW',
            'work_email' => 'required|email',
            'message' => 'required',
            'policy' => 'required',
            'cv' => 'required'
        ]);

        Mail::to([
            ['email' => env('MAIL_TO_ADDRESS')]
        ])
            ->send(new SpeculativeApplicationNotification($request->all()));

        Mail::to([
            ['email' => $request->post('work_email')]
        ])->send(new ThankYouNotification());

        return response()->json(['status' => 'ok']);
    }

    public function uploadFile(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('speculative-application-files', 'public');
        }

        return response()->json(['url' => $file]);
    }

    public function BilingualCustomerServiceRepresentativeSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'organisation' => 'required',
            'job_title' => 'required',
            'phone_number' => 'nullable|phone:AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KR,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,ZW',
            'work_email' => 'required|email',
            'message' => 'required',
            'policy' => 'required',
            'cv' => 'required'
        ]);

        Mail::to([
            ['email' => 'recruitment@smartwaypharma.co.uk']
        ])
            ->send(new UKApplicationNotification($request->all()));

        Mail::to([
            ['email' => $request->post('work_email')]
        ])->send(new ThankYouNotification());

        return response()->json(['status' => 'ok']);
    }

    public function BilingualCustomerServiceUploadFile(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('bilingual-customer-service-files', 'public');
        }

        return response()->json(['url' => $file]);
    }

    public function ResponsiblePersonApplicationFormSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'organisation' => 'required',
            'job_title' => 'required',
            'phone_number' => 'nullable|phone:AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KR,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,ZW',
            'work_email' => 'required|email',
            'message' => 'required',
            'policy' => 'required',
            'cv' => 'required'
        ]);

        Mail::to([
            ['email' => 'recruitment@smartwaypharma.co.uk']
        ])
            ->send(new ResponsiblePersonApplicationNotification($request->all()));

        Mail::to([
            ['email' => $request->post('work_email')]
        ])->send(new ThankYouNotification());

        return response()->json(['status' => 'ok']);
    }

    public function ResponsiblePersonUploadFile(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('responsible-person-files', 'public');
        }

        return response()->json(['url' => $file]);
    }

}
