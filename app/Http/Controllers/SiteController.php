<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use App\Models\Language;
use App\Models\NonMuslim;
use App\Models\Translation;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {

        $home = Section::transLang('Home')->first();
        $aboutTheBook = Section::transLang('ABOUT_THE_BOOK')->first();
        $aboutTheWriter = Section::transLang('About_The_Writer')->first();

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


        ####### Start Header #########
        $homeTranslations = Translation::transLang('home')->first();
        $aboutTheWriterTranslations = Translation::transLang('aboutTheWriter')->first();
        $productsTranslations = Translation::transLang('products')->first();
        $nonMuslimViewsTranslations = Translation::transLang('nonMuslimViews')->first();
        $blogTranslations = Translation::transLang('blog')->first();
        $contactTranslations = Translation::transLang('contact')->first();
        ####### End Header #########




        $languages = Language::get();
        return view('site.index', compact('languages', 'home', 'aboutTheBook', 'aboutTheWriter', 'products', 'nonMuslims', 'homeTranslations',  'aboutTheWriterTranslations', 'productsTranslations', 'nonMuslimViewsTranslations', 'blogTranslations', 'contactTranslations'));
    }

    public function blog()
    {

        if (DB::table('blogs')->where('language_id', '=', session()->get('langID'))->exists()) {
            $blogs = Blog::where('language_id', '=', session()->get('langID'))->get();
        } else {
            $blogs = Blog::where('language_id', '=', 1)->get();
        }

        ####### Start Header #########
        $homeTranslations = Translation::transLang('home')->first();
        $aboutTheWriterTranslations = Translation::transLang('aboutTheWriter')->first();
        $productsTranslations = Translation::transLang('products')->first();
        $nonMuslimViewsTranslations = Translation::transLang('nonMuslimViews')->first();
        $blogTranslations = Translation::transLang('blog')->first();
        $contactTranslations = Translation::transLang('contact')->first();
        ####### End Header #########


        $categories = Category::get();
        $languages = Language::get();
        return view('site.blog', compact('blogs', 'languages', 'categories', 'homeTranslations',  'aboutTheWriterTranslations', 'productsTranslations', 'nonMuslimViewsTranslations', 'blogTranslations', 'contactTranslations'));
    }

    public function singelBlog($slug)
    {
        ####### Start Header #########
        $homeTranslations = Translation::transLang('home')->first();
        $aboutTheWriterTranslations = Translation::transLang('aboutTheWriter')->first();
        $productsTranslations = Translation::transLang('products')->first();
        $nonMuslimViewsTranslations = Translation::transLang('nonMuslimViews')->first();
        $blogTranslations = Translation::transLang('blog')->first();
        $contactTranslations = Translation::transLang('contact')->first();
        ####### End Header #########

        if (DB::table('blogs')->where('slug', '=', $slug)->where('language_id', '=', session()->get('langID'))->exists()) {
            $blog = Blog::where('language_id', '=', session()->get('langID'))->first();
        } else {
            $blog = Blog::where('slug', '=', $slug)->where('language_id', '=', 1)->first();
        }

        $categories = Category::get();
        $languages = Language::get();
        // return $blog;
        return view('site.single-blog', compact('blog', 'languages', 'categories', 'homeTranslations',  'aboutTheWriterTranslations', 'productsTranslations', 'nonMuslimViewsTranslations', 'blogTranslations', 'contactTranslations'));
    }
}
