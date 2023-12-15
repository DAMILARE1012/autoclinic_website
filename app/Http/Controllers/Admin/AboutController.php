<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about= About::first();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit_about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'about_us' => 'required',
            'history' => 'required',
            'home_about' => 'required'
        ]);

        $about = About::find($id);
        
        if($request->file('brochure')) 
        {
            $this->validate($request, [
                'brochure' => 'required|file|mimes:pdf'
            ]);

            $file = $request->file('brochure');
            $filename = time() . '.' . $request->file('brochure')->extension();
            $filePath = public_path() . '/brochure/';
            $file->move($filePath, $filename);
            $about->brochure= $filename;
        }    
        $about->about_us = $request->about_us;
        $about->history = $request->history;
        $about->home_about = $request->home_about;

        $about->save();

        $request->session()->flash('success', 'About us Updated Successfully');
        return redirect()->route('admin.about');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
