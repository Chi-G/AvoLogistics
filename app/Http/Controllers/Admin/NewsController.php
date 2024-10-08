<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.news_index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.news_edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_bg_title' => 'sometimes|string|max:255',
            'blog_bg_desc' => 'sometimes|string',
            'image_sm' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'blog_title' => 'sometimes|string|max:255',
            'blog_short_desc' => 'sometimes|string',
            'image_bg' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'blog_long_desc1' => 'sometimes|string',
            'blog_long_desc2' => 'sometimes|string',
            'blog_snippet' => 'sometimes|string',
        ]);

        $data = $request->all();
        $data['image_sm'] = $request->file('image_sm')->store('news/images', 'public');
        $data['image_bg'] = $request->file('image_bg')->store('news/images', 'public');

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'News item created successfully.');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.news_edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'blog_bg_title' => 'nullable|required|string|max:255',
            'blog_bg_desc' => 'nullable|required|string',
            'image_sm' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'blog_title' => 'nullable|required|string|max:255',
            'blog_short_desc' => 'nullable|required|string',
            'image_bg' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'blog_long_desc1' => 'nullable|required|string',
            'blog_long_desc2' => 'nullable|required|string',
            'blog_snippet' => 'nullable|required|string',
        ]);

        $news = News::findOrFail($id);
        $data = $request->except('_token', '_method');

        if ($request->hasFile('image_sm')) {
            $data['image_sm'] = $request->file('image_sm')->store('blog_images', 'public');
        } else {
            $data['image_sm'] = $news->image_sm;
        }

        if ($request->hasFile('image_bg')) {
            $data['image_bg'] = $request->file('image_bg')->store('blog_images', 'public');
        } else {
            $data['image_bg'] = $news->image_bg;
        }

        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'News item updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News item deleted successfully.');
    }
}

