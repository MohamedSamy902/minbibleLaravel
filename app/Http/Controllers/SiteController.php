<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use App\Models\Language;
use App\Models\NonMuslim;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {

        if (DB::table('sections')->where('model', 'Home')->where('language_id', '=', session()->get('langID'))->exists()) {
            $home = Section::where('model', 'Home')->where('language_id', '=', session()->get('langID'))->first();
        } else {
            $home = Section::where('model', 'Home')->where('language_id', '=', 1)->first();
        }

        if (DB::table('sections')->where('model', 'ABOUT_THE_BOOK')->where('language_id', '=', session()->get('langID'))->exists()) {
            $aboutTheBook = Section::where('model', 'ABOUT_THE_BOOK')->where('language_id', '=', session()->get('langID'))->first();
        } else {
            $aboutTheBook = Section::where('model', 'ABOUT_THE_BOOK')->where('language_id', '=', 1)->first();
        }

        if (DB::table('sections')->where('model', 'About_The_Writer')->where('language_id', '=', session()->get('langID'))->exists()) {
            $aboutTheWriter = Section::where('model', 'About_The_Writer')->where('language_id', '=', session()->get('langID'))->first();
        } else {
            $aboutTheWriter = Section::where('model', 'About_The_Writer')->where('language_id', '=', 1)->first();
        }

        if (DB::table('products')->where('language_id', '=', session()->get('langID'))->exists()) {
            $products = Product::where('language_id', '=', session()->get('langID'))->get();
        } else {
            $products = Product::where('language_id', '=', 1)->get();
        }

        if (DB::table('non_muslims')->where('language_id', '=', session()->get('langID'))->exists()) {
            $nonMuslims = NonMuslim::where('language_id', '=', session()->get('langID'))->get();
        } else {
            $nonMuslims = NonMuslim::where('language_id', '=', 1)->get();
        }


        $languages = Language::get();
        return view('site.index', compact('languages', 'home', 'aboutTheBook', 'aboutTheWriter', 'products', 'nonMuslims'));
    }

    public function blog()
    {

        if (DB::table('blogs')->where('language_id', '=', session()->get('langID'))->exists()) {
            $blogs = Blog::where('language_id', '=', session()->get('langID'))->get();
        } else {
            $blogs = Blog::where('language_id', '=', 1)->get();
        }

        $categories = Category::get();
        $languages = Language::get();
        return view('site.blog', compact('blogs', 'languages', 'categories'));
    }

    public function singelBlog($slug)
    {
        if (DB::table('blogs')->where('slug', '=', $slug)->where('language_id', '=', session()->get('langID'))->exists()) {
            $blog = Blog::where('language_id', '=', session()->get('langID'))->first();
        } else {
            $blog = Blog::where('slug', '=', $slug)->where('language_id', '=', 1)->first();
        }

        $categories = Category::get();
        $languages = Language::get();
        // return $blog;
        return view('site.single-blog', compact('blog', 'languages', 'categories'));
    }
}
