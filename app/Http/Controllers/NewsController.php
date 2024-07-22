<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $blogs = News::latest()->paginate(3);
        return view('blogs', compact('blogs'));
    }

    // public function show(News $blog)
    public function show(News $blog)
    {
        // Get the previous blog post
        $previous = News::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();

        // Get the next blog post
        $next = News::where('id', '>', $blog->id)->orderBy('id')->first();

        return view('blog_details', compact('blog', 'previous', 'next'));
    }
}
