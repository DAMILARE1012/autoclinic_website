<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Home;
use Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider= Home::all();
        return view('admin.home.slider', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'slide' => 'required',
            'img' => 'required|file|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($files = $request->file('img')) {
    
            $path = public_path().'/img/slider/';      
            $originalImage = $request->file('img');
            $name = time().$originalImage->getClientOriginalName();
            $image = Image::make($originalImage);
            $image->resize(3750, 2500);
            $image->save($path.$name); 

            $training= new Home();
            $training->img= $name;
            $training->slide= $request->slide;
            $training->save();

            $request->session()->flash('success', 'Slide Added Successfully');
            return redirect()->route('admin.home.front');
        }

    
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
        $slider = Home::find($id);
        return view('admin.home.edit_slider', compact('slider'));
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
        $slider = Home::find($id);

        $this->validate($request, [
            'slide' => 'required'

        ]);

        if ($request->has('img')){ 

            $this->validate($request, [
                'img' => 'required|file|mimes:jpeg,png,jpg|max:2048'
            ]);

            $path = public_path().'/img/slider/';      
            $originalImage = $request->file('img');
            $name = time().$originalImage->getClientOriginalName();
            $image = Image::make($originalImage);
            $image->resize(3750, 2500);
            $image->save($path.$name); 
            $slider->img = $name; 
            }

            $slider->slide= $request->slide;
        
        $slider->save();

        $request->session()->flash('success', 'Slide Updated Successfully');
        return redirect()->route('admin.home.front');
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
