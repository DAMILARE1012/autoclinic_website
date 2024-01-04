<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Training;
use App\Register;
use App\Singletraining;
use App\Traininghub;
use Image;

class TrainingController extends Controller
{

    public function index()
    {
        $training_hub= Traininghub::first();
        return view('admin.training_hub.index', compact('training_hub'));
    }

    public function index_edit($id)
    {
        $training_hub = Traininghub::find($id);
        return view('admin.training_hub.edit_index', compact('training_hub'));
    }

    public function index_update(Request $request, $id)
    {
        $traininghub = Traininghub::find($id);

        $this->validate($request, [
            'training_hub' => 'required',
            'facilities' => 'required',
            'expectations' => 'required',
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
            // $image->resize(540, 360);
            $image->save($path.$name); 
            $traininghub->img = $name; 
            }

            $traininghub->training_hub= $request->training_hub;
            $traininghub->facilities= $request->facilities;
            $traininghub->expectations= $request->expectations;
            $traininghub->title= $request->title;
            
        $traininghub->save();

        $request->session()->flash('success', 'Training Updated Successfully');
        return redirect()->route('admin.training_index');
    }


    public function students()
    {
        $register= Register::first();
        $training= Training::all();
        return view('admin.training_hub.hub', compact('training', 'register'));
    }

    public function training()
    {
        $singletraining = DB::table('singletrainings')->orderBy('created_at', 'desc')->get();
        return view('admin.training_hub.training', ['singletraining' => $singletraining]);
    }

    public function training_create()
    {
        return view('admin.training_hub.create_training');
    }

    public function training_store(Request $request)

    {
        $this->validate($request, [

                'title' => 'required',
                'description' => 'required',
                'cost' => 'required',
                'inhouse_reg' => 'required',
                'ext_reg' => 'required',
                'training_for' => 'required',
                'requirement' => 'required',
                'outline' => 'required',
                'routine' => 'required',
                'duration' => 'required',
                'courses' => 'required',
                'expected_outcome' => 'required',
                'status' => 'required',
                'img' => 'required|file|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($files = $request->file('img')) {
            $this->validate($request, [
                'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $path = public_path().'/img/trainings/';      
            $originalImage = $request->file('img');
            $name = time().$originalImage->getClientOriginalName();
            $image = Image::make($originalImage);
            // $image->resize(1200, 799);
            $image->save($path.$name); 

            $training= new Singletraining();
            $training->img= $name;
            $training->title= $request->title;
            $training->description= $request->description;
            $training->cost= $request->cost;
            $training->inhouse_reg= $request->inhouse_reg;
            $training->ext_reg= $request->ext_reg;
            $training->training_for= $request->training_for;
            $training->outline= $request->outline;
            $training->routine= $request->routine;
            $training->duration= $request->duration;
            $training->requirement= $request->requirement;
            $training->courses= $request->courses;
            $training->expected_outcome= $request->expected_outcome;
            $training->status= $request->status;
            $training->save();

            $request->session()->flash('success', 'Training Added Successfully');
            return redirect()->route('admin.trainings');
        }
            
    }

    public function training_show($singletraining)
    {
        $training_data = Singletraining::find($singletraining);   
        return view('admin.training_hub.show_training', compact('training_data'));
    }

     public function training_edit($id)
    {
        $training = Singletraining::find($id);
        return view('admin.training_hub.edit_training', compact('training'));
    }

    public function training_update(Request $request, $id)
    {
        $training = Singletraining::find($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'inhouse_reg' => 'required',
            'ext_reg' => 'required',
            'training_for' => 'required',
            'requirement' => 'required',
            'outline' => 'required',
            'routine' => 'required',
            'duration' => 'required',
            'courses' => 'required',
            'expected_outcome' => 'required',
            'status' => 'required'

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
            $training->description= $request->description;
            $training->cost= $request->cost;
            $training->inhouse_reg= $request->inhouse_reg;
            $training->ext_reg= $request->ext_reg;
            $training->training_for= $request->training_for;
            $training->outline= $request->outline;
            $training->routine= $request->routine;
            $training->requirement= $request->requirement;
            $training->duration= $request->duration;
            $training->courses= $request->courses;
            $training->expected_outcome= $request->expected_outcome;
            $training->status= $request->status;
        
        $training->save();

        $request->session()->flash('success', 'Training Updated Successfully');
        return redirect()->route('admin.trainings');
    }

    public function training_destroy($id)
    {
        Singletraining::where('id', $id)->delete();  

        return redirect()->route('admin.trainings')->with('success', 'Training Deleted successfully');
    }

    public function generate_hub()
    {
        return view('admin.training_hub.generate');
    }

    public function generatestore(Request $request)
    {
        // $unique = strtolower(str_random(10));
        $this->validate($request, [
            'name' => 'required',

        ]);

       $random = Str::random(10);
        
        $training_hub = new Training();

        $training_hub->name = $request->name;
        $training_hub->code = 'NGS_'.$random;

        $training_hub->save(); 

        $request->session()->flash('success', 'Unique Number: NGS_'.$random);
        return redirect()->route('admin.training_hub');
    }

    public function hub_destroy($id)
    {
        Training::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Training Deleted Successfully!');
    }

    public function enableReg(Request $request, $id)
    {
        $reg = Register::find($id);
        $reg->status = 1;
        $reg->save();

        return redirect()->back()->with('success', 'Registration is Ongoing');
    }

    public function disableReg(Request $request, $id)
    {
        $reg = Register::find($id);
        $reg->status = 0;
        $reg->save();

        return redirect()->back()->with('off', 'Registration is on Hold');
    }

}
