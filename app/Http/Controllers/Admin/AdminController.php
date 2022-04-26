<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function postSearch(Request $request)
    {
        $posts = \App\Models\Post::where('title', 'like', $request->input()['data']['q'] . '%')->limit(10)->get();

        return response()->json(['posts' => $posts]);
    }
}
