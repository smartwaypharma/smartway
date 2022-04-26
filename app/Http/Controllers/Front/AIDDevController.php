<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AIDDevController extends Controller
{
    public function index()
    {
        return view('front.pages.how-we-help.aid-dev.index');
    }

    public function globalProcurement()
    {
        return view('front.pages.how-we-help.aid-dev.global-procurement');
    }

    public function globalSupplyChainCapability()
    {
        return view('front.pages.how-we-help.aid-dev.global-supply-chain-capability');
    }

    public function kitting()
    {
        return view('front.pages.how-we-help.aid-dev.kitting');
    }

    public function projectManagement()
    {
        return view('front.pages.how-we-help.aid-dev.project-management');
    }
}
