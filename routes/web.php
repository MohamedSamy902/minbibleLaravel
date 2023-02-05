<?php

use App\Models\Section;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NonMuslimController;

// Route::group(
// [
//     'prefix' => LaravelLocalization::setLocale(),
//     'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
// ],
// function () {
Auth::routes();

Route::group(
    [
        'prefix' => 'dashboard',
        'middleware' => ['auth'],
    ],

    function () {
        /** Start Route Users **/
        Route::resource('users', UserController::class);
        Route::get('/', function () {
            return 'index';
        })->name('index');

        /** Start Route Languages **/
        Route::resource('languages', LanguageController::class)->except(['show']);
        /** End Route Languages **/

        /** Start Route Blog **/
        Route::resource('blogs', BlogController::class)->except(['show']);
        /** End Route Blog **/

        /** Start Route Products **/
        Route::resource('products', ProductController::class)->except(['show']);
        /** End Route Products **/

         /** Start Route NonMuslim **/
         Route::resource('nonmuslims', NonMuslimController::class)->except(['show']);
         /** End Route NonMuslim **/

        // Start Category
        Route::resource('category', CategoryController::class);
        // End Category


        Route::get('sections/{model}',               [SectionController::class, 'index'])->name('sections.index');
        Route::get('sections/{model}/create',        [SectionController::class, 'create'])->name('sections.create');
        Route::post('sections/{model}/store',        [SectionController::class, 'store'])->name('sections.store');
        Route::get('sections/{model}/edit/{id?}',    [SectionController::class, 'edit'])->name('sections.edit');
        Route::post('sections/{model}/update/{id}',  [SectionController::class, 'update'])->name('sections.update');
    }

);
//     }
// );

Route::get('lang/home', [LanguageController::class, 'index']);
Route::get('lang/change/{short_name}', [LanguageController::class, 'change'])->name('changeLang');

// Route::get('/', function () {
//     $languages = Language::get();
//     $section = Section::first();
//     // return $section;
//     // if ($sectionQ) {
//     //     $section = Section::where('languages_id', 1)->first();
//     // } else {
//     //     $section = Section::get();
//     //     return $section;

//     //     // $section = Section::where('');
//     // }
//     // return $section;
//     return view('site.index', compact('languages', 'section'));
// });



Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [SiteController::class, 'singelBlog'])->name('singelblog');
