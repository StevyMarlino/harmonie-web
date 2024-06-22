<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class MissionController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Mission',
            'mission' => Mission::first(),
            'publications' => Post::orderBy('created_at', 'desc')->take(3)->where('status', 'PUBLISHED')->get()
        ];

        return view('about.mission', $data);
    }
}