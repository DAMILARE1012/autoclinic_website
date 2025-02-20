<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Option;
use App\Program;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $options = Option::with('program')->get();
        // return view('admin.options.index', compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();
        return view('admin.options.create', compact('programs'));
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
            'program_id' => 'required|exists:programs,id',
            'title' => 'required|string|max:255',
            'introduction' => 'nullable|string',
            'requirements' => 'nullable|string',
            'eligibility' => 'nullable|string',
            'course_content' => 'nullable|string',
            'expected_outcomes' => 'nullable|string',
            'routine' => 'nullable|string',
            'cost' => 'nullable|string',
            'duration' => 'nullable|string',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path = public_path().'/img/options/';
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name);

        $option = new Option();

        $option->program_id = $request->program_id;
        $option->title = $request->title;
        $option->introduction = $request->introduction;
        $option->requirements = $request->requirements;
        $option->eligibility = $request->eligibility;
        $option->course_content = $request->course_content;
        $option->expected_outcomes = $request->expected_outcomes;
        $option->routine = $request->routine;
        $option->cost = $request->cost;
        $option->duration = $request->duration;
        $option->img = $name;

        $option->save(); 

        return redirect()->route('admin.programs')->with('success', 'Option created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $option_data = Option::find($id);   
        return view('admin.options.show', compact('option_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programs = Program::all();
        $option = Option::find($id);
        return view('admin.options.edit', compact('option', 'programs'));
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
        $option = Option::find($id);

        $this->validate($request, [
            'program_id' => 'required|exists:programs,id',
            'title' => 'required|string|max:255',
            'introduction' => 'nullable|string',
            'requirements' => 'nullable|string',
            'eligibility' => 'nullable|string',
            'course_content' => 'nullable|string',
            'expected_outcomes' => 'nullable|string',
            'routine' => 'nullable|string',
            'cost' => 'nullable|string',
            'duration' => 'nullable|string',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/img/options/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(1200, 799);
        $image->save($path.$name); 
        $option->img = $name; 
        }

        $option->title = $request->title;
        $option->introduction = $request->introduction;
        $option->requirements = $request->requirements;
        $option->eligibility = $request->eligibility;
        $option->course_content = $request->course_content;
        $option->expected_outcomes = $request->expected_outcomes;
        $option->routine = $request->routine;
        $option->cost = $request->cost;
        $option->duration = $request->duration;
        $option->program_id = $request->program_id;
        $option->save();

        return redirect()->route('admin.show.program', ['id' => $option->program_id])->with('success', 'Option updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Option::find($id);
        $image_path = public_path().'/img/options/'.$data->img;

        if(File::exists($image_path))
        {
            File::delete($image_path);   
        }  
        $data->delete(); 
       
        return redirect()->route('admin.show.program', ['id' => $data->program_id])->with('success', 'Option deleted successfully.');
    }
}
