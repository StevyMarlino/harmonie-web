<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use GuzzleHttp\Client;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\SignatureRequest;

class SiteController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Accueil',
            'slides' => Slide::latest()->take(3)->get(),
            'posts' => Post::orderBy('created_at', 'desc')->take(4)->where('status', 'PUBLISHED')->get()
        ];
        return view('index', $data);
    }
}