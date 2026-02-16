<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketAccessAndProductCommercialisationController extends Controller
{
    public function index()
    {
        return view('front.pages.how-we-help.market-access-and-product-commercialisation.index');
    }
}
