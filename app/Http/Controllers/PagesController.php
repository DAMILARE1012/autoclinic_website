<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\contactus;
use App\Training;
use App\Register;
use Response;


class PagesController extends Controller
{
    public function getHomepage(){
        return view('pages.homepage');
    }

    public function getContact(){
        return view('pages.contact_us');
    }

    public function appointment()
    {
        return view('pages.appointment');
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

        $admin_mail = 'contact@ngsautoclinic.com.ng';
        Mail::to($admin_mail)->send(new contactus($data));
        return redirect(route('contact'))->with('info', 'Thank You for your message. We will be in touch.');
    }

    public function getServices(){
        return view('pages.services');
    }

    public function getTraining(){
        $register = Register::first();
        return view('pages.training', compact('register'));
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

    public function downloadForm(Request $request)
    {
        $search_name = $request->name;
        $unique_name = Training::where('name', 'like', '%'.$search_name.'%')->first();

        $search_code = $request->code;
        $unique_code = Training::where('code', 'like', '%'.$search_code.'%')->first();


         if ($unique_name AND $unique_code ){

            // $request->session()->flash('success', 'Registration and Guarantor Form downloaded!');
            $application = public_path().'\mail\application.pdf';
            // $guarantor = public_path().'\mail\guarantor.pdf';
     
            return Response::download($application);
            // return Response::download($guarantor);
         }
         else{ 
            return redirect()->route('training')->with('bad', 'Name or Code not Found!');

        }
        
    }
}
