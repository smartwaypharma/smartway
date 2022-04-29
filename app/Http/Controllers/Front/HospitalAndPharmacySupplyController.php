<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalAndPharmacySupplyController extends Controller
{
    public function index()
    {
        return view('front.pages.how-we-help.hospital-and-pharmacy-supply.index');
    }

    public function reliableSupply()
    {
        return view('front.pages.how-we-help.hospital-and-pharmacy-supply.reliable-supply');
    }

    public function globalDistributions()
    {
        return view('front.pages.how-we-help.hospital-and-pharmacy-supply.global-distributions');
    }

    public function projectManagement()
    {
        return view('front.pages.how-we-help.hospital-and-pharmacy-supply.project-management');
    }

}
