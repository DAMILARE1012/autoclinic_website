<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Gallery;
use Image;

class GalleryController extends Controller
{
    
    public function index()
    {
        $gallery = DB::table('galleries')->orderBy('created_at', 'desc')->get();
        return view('admin.gallery.gallery', ['gallery' => $gallery]);
    }

    public function galcreate()
    {
        return view('admin.gallery.create_gallery');
    }

    public function galstore(Request $request)

    {
        $this->validate($request, [

                'description' => 'required',
                'img' => 'required',
                'img.*' => 'mimes:jpeg,png,jpg'
        ]);

        if ($files = $request->file('img')) {
            // Define upload path
            $destinationPath = public_path('/img/galleryz/'); // upload path
            foreach($files as $img) {
            // Upload Orginal Image           
            $profileImage =time().$img->getClientOriginalName();
            $img->move($destinationPath, $profileImage);
            // Save In Database
            $imagemodel= new Gallery();
            $imagemodel->img="$profileImage";
            $imagemodel->description= $request->description;
            $imagemodel->save();
    }

            $request->session()->flash('success', 'Picture(s) Added Successfully');
            return redirect()->route('admin.gallery');

            }
    }


     public function galedit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit_gallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function galupdate(Request $request, $id)
    {
        $gallery = Gallery::find($id);

        $this->validate($request, [
            'description' => 'required',

        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/img/galleryz/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(1200, 799);
        $image->save($path.$name); 
        $gallery->img = $name; 
        }
        $gallery->description = $request->description;
        
        $gallery->save();

        $request->session()->flash('success', 'Picture Updated Successfully');
        return redirect()->route('admin.gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function galdestroy($id)
    {
        $data = Gallery::find($id);
        $image_path = public_path().'/img/galleryz/'.$data->img;

        if(File::exists($image_path))
        {
            File::delete($image_path);   
        }  
        $data->delete(); 
        return redirect()->route('admin.gallery')->with('success', 'Picture Deleted successfully');
    }

}
