<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Home;
use App\Models\Offer;
use App\Models\Socialmedia;

class IndexController extends Controller
{
    //
       //
       public function index(Request $req ){
        $home = Home::orderBy("id", 'desc')->paginate(5);
        $offer = Offer::orderBy("id", 'desc')->paginate(5);
        $socialmedia = Socialmedia::orderBy("id", 'desc')->paginate(5);
        return view('admin.home.index',[
        "home"=>$home,'offer'=>$offer,'socialmedia'=>$socialmedia
    ]);
    }
    public function homeedit(Request $request, $id)
    {
       $home = home::find(decrypt($id));
    //    $subcat = Subcategory::all();
        return view('admin.home.create', ["home" =>$home, "text" => "Update home",]);
    }
    public function homecreate(Request $request){
        return view('admin.home.create');
    }
    public function homestore(Request $request)
    {
        // Validate your request here if needed
    
        if (isset($request->id) && ($request->id != null || $request->id != "")) {
           $home = home::find($request->id);
        } else {
           $home = new home;
        }
    
        if ($request->hasFile('main_img')) {
            $fileName = time() . $request->file('main_img')->getClientOriginalName();
            $destinationPath = public_path() . '/home/';
            $request->file('main_img')->move($destinationPath, $fileName);
           $home->main_img = '/home/' . $fileName;
        }
        if ($request->hasFile('phone_img')) {
            $fileName = time() . $request->file('phone_img')->getClientOriginalName();
            $destinationPath = public_path() . '/home/';
            $request->file('phone_img')->move($destinationPath, $fileName);
            $home->phone_img = '/home/' . $fileName;
        }
    
       $home->name = $request->name;
       $home->link = $request->link;
    //    $home->slug = $request->slug;
      
    
        // Search for the Subcategory based on the category name
      
 
       $home->is_active = "active";
       $home->save();
    
        $imagePath =$home->main_img;
        return back()->with(["status" => "success", "msg" => "home created successfully"]);
    }
    public function homedestroy($id)
    {
        $item = home::find($id);
    
        if (!$item) {
            return back()->with('error', 'Item not found.');
        }
    
        $item->delete();
    
        return back()->with('success', 'Item deleted successfully.');
    }
    public function mediadestroy($id)
    {
        $item = Socialmedia::find($id);
    
        if (!$item) {
            return back()->with('error', 'Item not found.');
        }
    
        $item->delete();
    
        return back()->with('success', 'Socialmedia deleted successfully.');
    }
    public function modaldestroy($id)
    {
        $item = Offer::find($id);
    
        if (!$item) {
            return back()->with('error', 'Item not found.');
        }
    
        $item->delete();
    
        return back()->with('success', 'Socialmedia deleted successfully.');
    }
    public function storesocialmedia(Request $request)
    {    
        if (isset($request->id) && ($request->id != null || $request->id != "")) {
           $media = Socialmedia::find($request->id);
        } else {
           $media = new Socialmedia;
        }

        $media->embed_code = $request->embed_code;
        $media->socialmediatype = $request->socialmediatype;
  
        $media->is_active = "active";
        $media->save();
        return back()->with(["status" => "success", "msg" => "home created successfully"]);
    }
    public function offerstore(Request $request)
    {    
        if (isset($request->id) && ($request->id != null || $request->id != "")) {
           $offer = Offer::find($request->id);
        } else {
           $offer = new Offer;
        }
        if ($request->hasFile('banner')) {
            $fileName = time() . $request->file('banner')->getClientOriginalName();
            $destinationPath = public_path() . '/offer/';
            $request->file('banner')->move($destinationPath, $fileName);
            $offer->banner = '/offer/' . $fileName;
        }
        $imagePath =$offer->banner;
        $offer->is_active = "active";
        $offer->save();
        return back()->with(["status" => "success", "msg" => "home created successfully"]);
    }
    
}
