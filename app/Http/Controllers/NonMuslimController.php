<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Language;
use App\Models\NonMuslim;
use Illuminate\Http\Request;

class NonMuslimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $nonmuslims = NonMuslim::get();
        return view('dashbord.nonmuslims.index', compact('nonmuslims', 'i'));
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

        return view('dashbord.nonmuslims.create', compact('languages', 'images'));
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

        $section = NonMuslim::create($data);
        return redirect()->back()->with(['success' => 'Success Insert']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NonMuslim  $nonMuslim
     * @return \Illuminate\Http\Response
     */
    public function show(NonMuslim $nonMuslim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonMuslim  $nonMuslim
     * @return \Illuminate\Http\Response
     */
    public function edit(NonMuslim $nonmuslim)
    {
        $languages = Language::get();
        $images = Image::get();
        return view('dashbord.nonmuslims.edit', compact('languages', 'images', 'nonmuslim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonMuslim  $nonMuslim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $nonmuslim = NonMuslim::findOrFail($id);
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


        $nonmuslim->update($data);

        return redirect()->back()->with(['success' => 'Success Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonMuslim  $nonMuslim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nonmuslim = NonMuslim::find($id);
        $nonmuslim->delete();
        return redirect()->back()->with(['success' => 'Success Delete']);
    }
}
