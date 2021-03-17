<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use App\Inventory;
use App\Review;

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
        return view('admin.home', compact('gallery', 'inventory', 'review'));
    }

    public function gallery()
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
            'img' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = public_path().'/img/galleryz/';
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(350, 290);
        $image->save($path.$name);
        
        $gallery = new Gallery();

        $gallery->description = $request->description;
        $gallery->img = $name;

        $gallery->save(); 

        $request->session()->flash('success', 'Picture Added successfully');
        return redirect()->route('admin.gallery');
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
        $image->resize(718, 486);
        $image->save($path.$name); 
        $gallery->img = $name; 
        }
        $gallery->description = $request->description;
        
        $gallery->save();

        $request->session()->flash('success', 'Picture updated successfully');
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
        Gallery::where('id', $id)->delete();  

        return redirect()->route('admin.gallery')->with('success', 'Picture Deleted successfully');
    }

    public function inventory()
    {
        $inventory = DB::table('inventories')->orderBy('created_at', 'desc')->get();
        return view('admin.inventory.inventory', ['inventory' => $inventory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inventorycreate()
    {
        return view('admin.inventory.create_inventory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function inventoryedit($id)
    {
        $inventory = Inventory::find($id);
        return view('admin.inventory.edit_inventory', compact('inventory'));
    }

    public function inventorystore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = public_path().'/img/inventoryz/';
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(350, 290);
        $image->save($path.$name);
        
        $inventory = new Inventory();

        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->description = $request->description;
        $inventory->img = $name;

        $inventory->save(); 

        $request->session()->flash('success', 'Picture Added successfully');
        return redirect()->route('admin.inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $Inventory
     * @return \Illuminate\Http\Response
     */
    public function inventoryshow($inventory)
    {
        $inventory_data = Inventory::find($inventory);   
        return view('admin.inventory.show_inventory', compact('inventory_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function inventoryupdate(Request $request, $id)
    {

       $inventory = Inventory::find($id);

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/img/inventoryz/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        $gallery->img = $name; 
        }
        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->description = $request->description;
        
        $inventory->save();

        $request->session()->flash('success', 'Inventory updated successfully');
        return redirect()->route('admin.inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function inventorydestroy($id)
    {
        Inventory::where('id', $id)->delete();   
        return redirect()->route('admin.inventory')->with('success', 'Inventory Deleted successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reviewindex()
    {
         $review = Review::where('status', 1)->orderBy('created_at', 'desc')->get();

         return view('admin.review.review', compact('review'));
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

    public function disablereview(Request $request, $id)
    {
        $review = Review::find($id);
        $review->status = 0;
        $review->save();

        $request->session()->flash('success', 'Review disabled');
        return redirect()->back();
    }

    public function enablereview(Request $request, $id)
    {
        $review = Review::find($id);
        $review->status = 1;
        $review->save();

        $request->session()->flash('success', 'Review Enabled');
        return redirect()->back();
    }

    public function disabledreviewlist()
    {
        $review = Review::where('status', 0)->orderBy('created_at', 'desc')->get();
        return view('admin.review.disabled-review', compact('review'));
    }

    public function reviewshow($id)
    {
        $review_data = Review::find($id);   
        return view('admin.review.show-review', compact('review_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reviewdestroy($id)
    {
        Review::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
