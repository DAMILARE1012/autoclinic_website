<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use App\Gallery;
use App\Inventory;
use App\Review;
use App\Training;
use App\Register;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        $gallery = DB::table('galleries')->get();
        $inventory = DB::table('inventories')->get();
        $review = DB::table('reviews')->get();
        $approved_review = DB::table('reviews')->where('status' , 1)->get();
        $training = DB::table('trainings')->get();
        return view('admin.home', compact('gallery', 'inventory', 'review', 'training', 'approved_review'));
    }


}
