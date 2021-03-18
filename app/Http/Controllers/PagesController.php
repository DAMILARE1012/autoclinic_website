<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function getHomepage(){
        return view('pages.homepage');
    }

    public function getContact(){
        return view('pages.contact_us');
    }

    public function getServices(){
        return view('pages.services');
    }

    public function getTraining(){
        return view('pages.training');
    }

    public function getInventory(){
        return view('pages.inventory');
    }
    
    public function getAbout(){
        return view('pages.about_us');
    }

    public function getGallery(){
        $gallery = DB::table('galleries')->orderBy('created_at', 'desc')->get();
        return view('pages.gallery', compact('gallery'));
    }

    public function getReviews(){
        return view('pages.reviews');
    }
}
