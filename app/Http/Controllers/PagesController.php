<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\contactus;
use App\Training;
use App\Register;
use App\Singletraining;
use App\Home;
use App\Contact;
use App\About;
use Response;
use App\Traininghub;
use App\Service;
use App\TrainerStudent;

class PagesController extends Controller
{
    public function getHomepage(){
        $contact = Contact::first();
        $about = About::first();
        $slider = Home::get();
        $service = Service::get();
        return view('pages.homepage', compact('slider', 'contact', 'about', 'service'));
    }

    public function getContact(){
        $contact = Contact::first();
        return view('pages.contact_us', compact('contact'));
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
        $service = Service::get();
        return view('pages.services', compact('service'));
    }

    public function getTraining(){
        $traininghub = Traininghub::first();

        $ourTrainings = Singletraining::where('archive', 0)->get();
        $archiveTrainings = Singletraining::where('archive', 1)->get();
        $register = Register::first();
        $trainer = TrainerStudent::where('who', '=', 0)->get();
        $student = TrainerStudent::where('who', '=', 1)->get();
        return view('pages.training', compact('register', 'ourTrainings', 'traininghub', 'trainer', 'student', 'archiveTrainings'));
    }

    public function ourTrainings_show($singletraining)
    {
        $training_data = Singletraining::find($singletraining);   
        return view('pages.singleTraining', compact('training_data'));
    }

    public function getInventory(){
        $inventory = DB::table('inventories')->orderBy('created_at', 'desc')->get();
        return view('pages.inventory', compact('inventory'));
    }
    
    public function getAbout(){
        $about = About::first();
        return view('pages.about_us', compact('about'));
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
