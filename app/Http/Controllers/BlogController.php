<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use App\Models\Language;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $blogs = Blog::get();
        return view('dashbord.blogs.index', compact('blogs', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::get();
        $categories = Category::get();
        $images = Image::get();
        return view('dashbord.blogs.create', compact('languages', 'images', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('media'), $filename);
            $image = Image::create(
                [
                    'name'          => $filename,
                    'original_name' => $file->getClientOriginalName()
                ]
            );
            $data['image_id'] = $image->id;
        }

        $section = Blog::create($data);
        return redirect()->back()->with(['success' => 'Success Insert']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $languages = Language::get();
        $categories = Category::get();
        $images = Image::get();
        return view('dashbord.blogs.edit', compact('languages', 'images', 'categories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $data = $request->all();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('media'), $filename);
            $image = Image::create(
                [
                    'name'          => $filename,
                    'original_name' => $file->getClientOriginalName()
                ]
            );
            $data['image_id'] = $image->id;
        }
        $blog->update($data);
        return redirect()->back()->with(['success' => 'Success Update']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with(['success' => 'Success Delete']);
    }
}
