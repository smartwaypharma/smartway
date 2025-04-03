<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $articles = [];
        $settings = Settings::where('key', 'homepage-articles')->first();

        if ($settings) {
            $articles = json_decode($settings->value);
        }
        $posts = \App\Models\Post::with('category')
            ->whereIn('id', $articles)->orderBy('created_at', 'desc')
            ->get();

        return view('front.pages.home', compact('posts'));
    }

    public function regulatoryInformation()
    {
        return view('front.pages.regulatory-information');
    }
}
