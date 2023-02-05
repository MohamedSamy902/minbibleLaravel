<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $languages = Language::get();

        return view('dashbord.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::get();
        return view('dashbord.category.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Request All In Form
            $category = $request->all();
            // return $category;
            // Cereat Request
            $cat = Category::create($category);
            // Check Done Or Fil
            if ($cat) {
                // Redirect Success Masseg
                return redirect()->back()->with(['success' => 'Success Save']);
            } else {
                // Return Error Massege
                return redirect()->back()->with(['error' => 'Please Try Again']);
            }
        } catch (\Exception $ex) {
            // Massege Error
            return redirect()->back()->with(['error' => 'Please Try Again']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categories = Category::all();
        return view('dashbord.category.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            // Check Id In Request Or No
            if (isset($id) && !empty($id)) {
                // return $id;
                // Get Category With Id
                $category = Category::findOrFail($id);
                // return $category;
                // Check Category Found Or Fil
                if ($category) {
                    $languages = Language::get();

                    // Requrn Redirect With Success Massege
                    return view('dashbord.category.edit', compact('category', 'languages'));
                } else {
                    // Requrn Redirect With Error Massege
                    return redirect()->route('category.index')->with(['error' => 'Please Try Again']);
                }
            }
        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'Please Try Again']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
            if ($category) {
                $data = $request->all();
                $status = $category->fill($data)->save();
                if ($status) {
                    return redirect()->route('category.index')->with(['success' => 'Success Update']);
                } else {
                    return redirect()->route('category.index')->with(['error' => 'Please Try Again']);
                }
            }
        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'Please Try Again']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $category = Category::find($id);

            // $count = COUNT($category->product);
            // if ($count == 0) {
                $category->delete();
                return redirect()->route('category.index')->with(['success' => 'Success Delete']);
            // } else {
            //     return redirect()->route('category.index')->with(['error' => 'هناك منتجات في هذا القسم']);
            // }
        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'Please Try Again']);
        }
    }
}
