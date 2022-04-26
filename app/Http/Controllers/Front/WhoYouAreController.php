<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhoYouAreController extends Controller
{
    public function healthcareProfessional()
    {
        return view('front.pages.who-you-are.healthcare-professional');
    }

    public function pharmaAndBiotech()
    {
        return view('front.pages.who-you-are.pharma-and-biotech');
    }

    public function wholesalerDistributor()
    {
        return view('front.pages.who-you-are.wholesaler-distributor');
    }

    public function aidAndDevelopment()
    {
        return view('front.pages.who-you-are.aid-and-development');
    }

    public function patient()
    {
        return view('front.pages.who-you-are.patient');
    }

    public function privatePrescriptions()
    {
        return view('front.pages.who-you-are.private-prescriptions');
    }

    public function aesthetics()
    {
        return view('front.pages.who-you-are.aesthetics');
    }

    public function healthcareProfessionalsPrivatePrescriptions()
    {
        return view('front.pages.who-you-are.healthcare-professionals-private-prescriptions');
    }
}
