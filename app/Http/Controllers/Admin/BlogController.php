<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $query = Blog::query();
        if (request('q')) {
            $query->where('title', 'like', '%' . request('q') . '%');
        }
        $blogs = $query->latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blogs.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'image_caption' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'tags' => 'nullable|array',
        ]);

        $data = $request->except(['_token', 'image', 'categories', 'tags']);
        $data['slug'] = Str::slug($request->title);
        $data['is_published'] = $request->has('is_published');
        $data['created_by'] = auth()->id();
        
        if ($data['is_published'] && !$request->filled('published_at')) {
            $data['published_at'] = now();
        } elseif (!$data['is_published']) {
            $data['published_at'] = null;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog = Blog::create($data);

        if ($request->has('categories')) {
            $blog->categories()->sync($request->categories);
        }
        if ($request->has('tags')) {
            $blog->tags()->sync($request->tags);
        }

        return redirect()->route('admin.blogs.index')->with('status', 'Blog created successfully.');
    }

    public function show(Blog $blog)
    {
        return abort(404);
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'image_caption' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'tags' => 'nullable|array',
        ]);

        $data = $request->except(['_token', '_method', 'image', 'categories', 'tags']);
        $data['slug'] = Str::slug($request->title);
        $data['is_published'] = $request->has('is_published');
        
        if ($data['is_published'] && !$blog->published_at) {
            $data['published_at'] = now();
        } elseif (!$data['is_published']) {
            $data['published_at'] = null;
        }

        if ($request->hasFile('image')) {
            if ($blog->image) Storage::disk('public')->delete($blog->image);
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($data);

        if ($request->has('categories')) {
            $blog->categories()->sync($request->categories);
        } else {
            $blog->categories()->detach();
        }

        if ($request->has('tags')) {
            $blog->tags()->sync($request->tags);
        } else {
            $blog->tags()->detach();
        }

        return redirect()->route('admin.blogs.index')->with('status', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) Storage::disk('public')->delete($blog->image);
        $blog->categories()->detach();
        $blog->tags()->detach();
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('status', 'Blog deleted successfully.');
    }
}
