<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SexualHealthController extends Controller
{
    public function index()
    {
        return view('front.pages.how-we-help.sexual-health.index');
    }
}
