<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Language;
use App\Models\Section;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($model)
    {
        $i = 0;
        $articles = Section::where('model', $model)->get();
        // return $articles;
        return view('dashbord.article.index', compact('articles', 'model', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($model)
    {
        $languages = Language::get();
        $images = Image::get();
        return view('dashbord.article.create', compact('model', 'languages', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $model)
    {
        $data = $request->all();
        // return $data;
        $data['model'] = $model;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('media'), $filename);
            $image = Image::create([
                'name'          => $filename,
                'original_name' => $file->getClientOriginalName()]
            );
        }

        $data['image_id'] = $image->id;
        $section = Section::create($data);

        return redirect()->back()->with(['success' => 'Success Save']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit($model, $id = null)
    {

        if ($id != null) {
            $section = Section::where('model', $model)->where('id', $id)->first();
        } else {
            $section = Section::where('model', $model)->first();
        }
        // return $section;
        if ($section != NULL) {
            return view('dashbord.article.edit', compact('model', 'section'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $model, $id)
    {
        // return $model;

        $section = Section::findOrFail($id);

        $data = $request->all();
        $data['link'] = $request->link;


        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('media'), $filename);
            $image = Image::create([
                'name'          => $filename,
                'original_name' => $file->getClientOriginalName()]
            );
        }

        $data['image_id'] = $image->id;
        $section->update($data);


        return redirect()->back()
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
