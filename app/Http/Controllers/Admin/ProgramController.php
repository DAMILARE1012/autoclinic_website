<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Program;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return view('admin.programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path = public_path().'/img/programs/';
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(900, 514);
        $image->save($path.$name);

        $program = new Program();

        $program->name = $request->name;
        $program->img = $name;

        $program->save(); 

        return redirect()->route('admin.programs')->with('success', 'Program created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program_data = Program::find($id);   
        return view('admin.programs.show', compact('program_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);
        return view('admin.programs.edit', compact('program'));
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

        $program = Program::find($id);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/img/programs/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(1200, 799);
        $image->save($path.$name); 
        $program->img = $name; 
        }
        $program->name = $request->name;
        
        $program->save();

        return redirect()->route('admin.programs')->with('success', 'Program updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $image_path = public_path().'/img/programs/'.$program->img;

        if(File::exists($image_path))
        {
            File::delete($image_path);   
        }  
        $program->delete(); 
        return redirect()->route('admin.programs')->with('success', 'Picture Deleted successfully');

    }
}
