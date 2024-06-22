<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $data = [
          'slides' => Slide::latest()->take(3)->get(),
        ];
        return view('index', $data );
    }
}