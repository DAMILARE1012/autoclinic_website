<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TrainerStudent;
use Image;

class TrainerStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainer_student= TrainerStudent::get();
        return view('admin.training_hub.trainer_student', compact('trainer_student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.training_hub.create_trainerStudent');
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
            'who' => 'required',
            'img' => 'required|file|mimes:jpeg,png,jpg|max:2048'
    ]);

    if ($files = $request->file('img')) {

        $path = public_path().'/img/trainings/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        // $image->resize(1200, 799);
        $image->save($path.$name); 

        $trainerstudent= new TrainerStudent();
        $trainerstudent->img= $name;
        $trainerstudent->title= $request->title;
        $trainerstudent->who= $request->who;
        $trainerstudent->save();

        $request->session()->flash('success', 'Successful');
        return redirect()->route('admin.trainer_student');
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
        $trainer_student = TrainerStudent::find($id);
        return view('admin.training_hub.edit_trainerStudent', compact('trainer_student'));
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
        // dd($request);
        $training = TrainerStudent::find($id);

        $this->validate($request, [
            'title' => 'required',
        ]);

        if ($request->has('img')){ 

            $this->validate($request, [
                'img' => 'required|file|mimes:jpeg,png,jpg|max:2048'
            ]);

            $path = public_path().'/img/trainings/';      
            $originalImage = $request->file('img');
            $name = time().$originalImage->getClientOriginalName();
            $image = Image::make($originalImage);
            // $image->resize(1200, 799);
            $image->save($path.$name); 
            $training->img = $name; 
            }

            $training->title= $request->title;
            $training->who= $request->who;
        
        $training->save();

        $request->session()->flash('success', 'Update Successful');
        return redirect()->route('admin.trainer_student');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TrainerStudent::find($id);
        $image_path = public_path().'/img/trainings/'.$data->img;

        if(File::exists($image_path))
        {
            File::delete($image_path);
        }   
        $data->delete();
        return redirect()->route('admin.trainer_student')->with('success', 'Delete successful');
    }
}
