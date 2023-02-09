<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translations = Translation::get();
        // $languages = Language::get();

        return view('dashbord.translations.index', compact('translations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::get();
        return view('dashbord.translations.create', compact('languages'));
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
            $translation = $request->all();
            $translation['section'] = 'header';
            // return $translation;
            // Cereat Request

            $cat = Translation::create($translation);
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
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function show(Translation $translation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $translation = Translation::findOrFail($id);
        $languages = Language::get();

        // Requrn Redirect With Success Massege
        return view('dashbord.translations.edit', compact('translation', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        try {
            $translation = Translation::findOrFail($id);
            if ($translation) {
                $data = $request->all();
                $status = $translation->fill($data)->save();
                if ($status) {
                    return redirect()->route('translations.index')->with(['success' => 'Success Update']);
                } else {
                    return redirect()->route('translations.index')->with(['error' => 'Please Try Again']);
                }
            }
        } catch (\Exception $ex) {
            return redirect()->route('translations.index')->with(['error' => 'Please Try Again']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $translation = Translation::find($id);
            $translation->delete();
            return redirect()->route('translations.index')->with(['success' => 'Success Delete']);
        } catch (\Exception $ex) {
            return redirect()->route('translations.index')->with(['error' => 'Please Try Again']);
        }
    }
}
