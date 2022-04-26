<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternationalSupplyAndUnlicensedImportsController extends Controller
{
    public function index()
    {
        return view('front.pages.how-we-help.international-supply-and-unlicensed-imports.index');
    }

    public function reliableSupply()
    {
        return view('front.pages.how-we-help.international-supply-and-unlicensed-imports.reliable-supply');
    }

    public function globalDistributions()
    {
        return view('front.pages.how-we-help.international-supply-and-unlicensed-imports.global-distributions');
    }

    public function projectManagement()
    {
        return view('front.pages.how-we-help.international-supply-and-unlicensed-imports.project-management');
    }
}
