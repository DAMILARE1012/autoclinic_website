<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact= Contact::first();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $contact = Contact::find($id);
        return view('admin.contact.edit_contact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function conupdate(Request $request, $id)
    {
    
        $this->validate($request, [
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'sun_open' => 'required',
            'mon_open' => 'required'
        ]);

        $contact = Contact::find($id);
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->sun_open = $request->sun_open;
        $contact->mon_open = $request->mon_open;

        $contact->save();

        $request->session()->flash('success', 'Contact Updated Successfully');
        return redirect()->route('admin.contact');
    }

    public function enableSun(Request $request, $id)
    {
        $sun = Contact::find($id);
        $sun->sun_status = 0;
        $sun->save();

        return redirect()->back()->with('success', 'Sunday is Enabled');
    }

    public function disableSun(Request $request, $id)
    {
        $reg = Contact::find($id);
        $reg->sun_status = 1;
        $reg->save();

        return redirect()->back()->with('off', 'Sunday is Off');
    }

    
}
