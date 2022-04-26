<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CTSController extends Controller
{
    public function cts()
    {
        return view('front.pages.how-we-help.cts.cts');
    }

    public function globalProcurementNetworkComparatorRldSupply()
    {
        return view('front.pages.how-we-help.cts.global-procurement-network-comparator-rld-supply');
    }

    public function globalSupplyChainCapability()
    {
        return view('front.pages.how-we-help.cts.global-supply-chain-capability');
    }

    public function projectManagement()
    {
        return view('front.pages.how-we-help.cts.project-management');
    }
}
