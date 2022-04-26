<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function index()
    {
        return view('front.pages.how-we-help.distribution.index');
    }

    public function globalSupplyChainCapability()
    {
        return view('front.pages.how-we-help.distribution.global-supply-chain-capability');
    }

    public function ukNetwork()
    {
        return view('front.pages.how-we-help.distribution.uk-network');
    }

    public function endToEndService()
    {
        return view('front.pages.how-we-help.distribution.end-to-end-service');
    }

    public function stakeholderSupport()
    {
        return view('front.pages.how-we-help.distribution.stakeholder-support');
    }
}
