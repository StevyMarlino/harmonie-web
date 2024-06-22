<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PublicationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Publications',
            'posts' => Post::orderBy('created_at', 'desc')->get(),
            'publications' => Post::orderBy('created_at', 'desc')->take(3)->where('status', 'PUBLISHED')->get()
        ];

        return view('publication.index', $data);
    }

    public function details($slug)
    {
        $data = [
            'title' => 'Détails ' . $slug,
            'post' => Post::where('slug', $slug)
                ->where('status', 'PUBLISHED')
                ->firstOrfail(),
            'publications' => Post::orderBy('created_at', 'desc')->take(3)->where('status', 'PUBLISHED')->get()
        ];

        return view('publication.details', $data);
    }
}