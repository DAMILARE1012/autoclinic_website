<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Inventory;

class InventoryController extends Controller
{
    public function index()
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
        $image->resize(718, 486);
        $image->save($path.$name);
        
        $inventory = new Inventory();

        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->description = $request->description;
        $inventory->img = $name;

        $inventory->save(); 

        $request->session()->flash('success', 'Picture Added Successfully');
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
        $inventory->img = $name; 
        }
        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->description = $request->description;
        
        $inventory->save();

        $request->session()->flash('success', 'Inventory Updated Successfully');
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
        $data = Inventory::find($id);
        $image_path = public_path().'/img/inventoryz/'.$data->img;

        if(File::exists($image_path))
        {
            File::delete($image_path);
        }   
        $data->delete();
        return redirect()->route('admin.inventory')->with('success', 'Inventory Deleted successfully');
    }

}
