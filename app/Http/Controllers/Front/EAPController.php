<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EAPController extends Controller
{
    public function eap()
    {
        return view('front.pages.how-we-help.eap.eap');
    }

    public function whatIsAnEap()
    {
        return view('front.pages.how-we-help.eap.what-is-an-eap');
    }

    public function consultancy()
    {
        return view('front.pages.how-we-help.eap.consultancy');
    }

    public function programStrategyAndDesign()
    {
        return view('front.pages.how-we-help.eap.program-strategy-and-design');
    }

    public function globalSupplyChainCapability()
    {
        return view('front.pages.how-we-help.eap.global-supply-chain-capability');
    }

    public function projectManagement()
    {
        return view('front.pages.how-we-help.eap.project-management');
    }

    public function realWorldData()
    {
        return view('front.pages.how-we-help.eap.real-world-data');
    }

    public function stakeholderSupport()
    {
        return view('front.pages.how-we-help.eap.stakeholder-support');
    }
}
