<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'title' => 'required',
            'home_description' => 'required',
            'description' => 'required',
            'img1' => 'required|image|mimes:jpeg,png,jpg',
            'img2' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        //image 1
        $path = public_path().'/img/services/';
        $originalImage1 = $request->file('img1');
        $name1 = time().$originalImage1->getClientOriginalName();
        $image1 = Image::make($originalImage1);
        $image1->resize(206, 214);
        $image1->save($path.$name1);
        //image 2
        $path = public_path().'/img/services/';
        $originalImage2 = $request->file('img2');
        $name2 = time().$originalImage2->getClientOriginalName();
        $image2 = Image::make($originalImage2);
        $image2->resize(206, 214);
        $image2->save($path.$name2);
        
        $service = new Service();

        $service->title = $request->title;
        $service->home_description = $request->home_description;
        $service->description = $request->description;
        $service->img1 = $name1;
        $service->img2 = $name2;

        $service->save(); 

        $request->session()->flash('success', 'Service Added Successfully');
        return redirect()->route('admin.service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service_data = Service::find($id);   
        return view('admin.service.show', compact('service_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
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
        $service = Service::find($id);

        $this->validate($request, [
            'title' => 'required',
            'home_description' => 'required',
            'description' => 'required'

        ]);

        if ($request->hasFile('img1')){ 
            $this->validate($request, [
                'img1' => 'required|image|mimes:jpeg,png,jpg'
            ]);

        $path = public_path().'/img/services/';      
        $originalImage1 = $request->file('img1');
        $name1 = time().$originalImage1->getClientOriginalName();
        $image1 = Image::make($originalImage1);
        $image1->resize(206, 214);
        $image1->save($path.$name1); 
        $service->img1 = $name1; 
        }

        if ($request->hasFile('img2')){ 

            $this->validate($request, [
                'img2' => 'required|image|mimes:jpeg,png,jpg'
            ]);

            $path = public_path().'/img/services/';      
            $originalImage2 = $request->file('img2');
            $name2 = time().$originalImage2->getClientOriginalName();
            $image2 = Image::make($originalImage2);
            $image2->resize(206, 214);
            $image2->save($path.$name2); 
            $service->img2 = $name2; 
            }

            $service->title = $request->title;
            $service->home_description = $request->home_description;
            $service->description = $request->description;
        
        $service->save();

        $request->session()->flash('success', 'Service Updated Successfully');
        return redirect()->route('admin.service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id', $id)->delete();   
        return redirect()->route('admin.service')->with('success', 'Service Deleted successfully');
    }
}
