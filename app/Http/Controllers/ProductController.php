<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Language;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $products = Product::get();
        return view('dashbord.products.index', compact('products', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::get();
        $images = Image::get();

        return view('dashbord.products.create', compact('languages', 'images'));

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

        if ($request->file('pdf')) {
            $file = $request->file('pdf');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('file'), $filename);

            $data['pdf'] = $filename;
        }

        if ($request->file('audio')) {
            $file = $request->file('audio');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('file'), $filename);

            $data['audio'] = $filename;
        }


        $section = Product::create($data);
        return redirect()->back()->with(['success' => 'Success Insert']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $languages = Language::get();
        $images = Image::get();
        return view('dashbord.products.edit', compact('languages', 'images', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
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

        if ($request->file('pdf')) {
            $file = $request->file('pdf');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('file'), $filename);

            $data['pdf'] = $filename;
        }

        if ($request->file('audio')) {
            $file = $request->file('audio');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('file'), $filename);

            $data['audio'] = $filename;
        }
        $product->update($data);

        return redirect()->back()->with(['success' => 'Success Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with(['success' => 'Success Delete']);
    }
}
