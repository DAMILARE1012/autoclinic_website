<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;


class PagesController extends Controller
{
    public function getHomepage(){
        return view('pages.homepage');
    }

    public function getContact(){
        return view('pages.contact_us');
    }

    public function mail(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'phone' => '',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $admin_mail = 'profmusaprojects@gmail.com';
        \Mail::to($admin_mail)->send(new SendMailable($data));
        return redirect(route('contact'))->with('message', 'Thank You for your message. We will be in touch.');
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


}
