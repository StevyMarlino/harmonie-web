<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Models\WordPresident;

class WordPresidentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Mot du PP',
            'mot' => WordPresident::firstOrFail(),
            'publications' => Post::orderBy('created_at', 'desc')->take(3)->where('status', 'PUBLISHED')->get()
        ];

        return view('about.pp-word', $data);
    }
}