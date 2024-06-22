<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use TCG\Voyager\Models\Post;

class SiteController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Accueil',
            'slides' => Slide::latest()->take(3)->get(),
            'posts' => Post::orderBy('created_at', 'desc')->take(3)->where('status', 'PUBLISHED')->get()
        ];
        return view('index', $data);
    }
}