<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use App\Inventory;
use App\Review;
use App\Training;
use App\Register;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $gallery = DB::table('galleries')->get();
        $inventory = DB::table('inventories')->get();
        $review = DB::table('reviews')->get();
        $approved_review = DB::table('reviews')->where('status' , 1)->get();
        $training = DB::table('trainings')->get();
        return view('admin.home', compact('gallery', 'inventory', 'review', 'training', 'approved_review'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function training_hub()
    {
        $register= Register::first();
        $training= Training::all();
        return view('admin.training_hub.hub', compact('training', 'register'));
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