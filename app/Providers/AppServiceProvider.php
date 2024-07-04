<?php

namespace App\Providers;

use TCG\Voyager\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        $posts = Post::orderBy('created_at', 'desc')->take(3)->where('status', 'PUBLISHED')->get();
        view()->share('posts', $posts);
    }
}