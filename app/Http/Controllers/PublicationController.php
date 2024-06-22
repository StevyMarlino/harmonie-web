<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;

class PublicationController extends Controller
{
    public function index()
    {
        $postsCollection = Post::orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get();
        
        // Paginer la collection
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 4; // Nombre de posts par page
        $currentPagePosts = $postsCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $posts = new LengthAwarePaginator($currentPagePosts, $postsCollection->count(), $perPage);
        $posts->setPath(route('publications'));

        $data = [
            'title' => 'Publications',
            'posts' => $posts,
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