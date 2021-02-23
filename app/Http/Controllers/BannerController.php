<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Http\Requests\BannerRequest;


class BannerController extends Controller
{

    public function index()
    {
        $allBanner = Banner::all();
        return view('admin.banner',compact('allBanner'));
    }


    public function create()
    {
        //
    }


    public function store(BannerRequest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

        $image = $request->file('image');
        $imageName = time() .'_'. $image->getClientOriginalName();
        $imagePath = Storage::path('public/banner');
        $image->move($imagePath,$imageName);

        $banner = new Banner();
        $banner->link = $request->link;
        $banner->photo = $imageName;
        $banner->status = "Active";
        $banner->save();        
        
        // return response()->json(['msg'=>'Image uploaded successfully']);
        return back()->with('message',"Success Image Upload");

    }

    public function show(banner $banner)
    {
        //
    }

    public function edit(banner $banner)
    {
        //
    }


    public function update(Request $request, $id)
    {
        // dd($request->image);

        $old_image = Banner::findOrFail($id);

        
        // dd($old_photo);
        $image = $request->file('image');
        $old_photo = Storage::exists('public/banner/'.$old_image->photo);

        if($old_photo && $image){
            Storage::delete('public/banner/'.$old_image->photo);
        }

        if($image){
            $imageName = time() .'_'. $image->getClientOriginalName();
            $imagePath = Storage::path('public/banner');
            $image->move($imagePath,$imageName);
            $old_image->photo = $imageName;
        }

        if($request->link){

            $old_image->link = $request->link;
        }

        if($request->status != "select status"){

            $old_image->status = $request->status;
        }

        $old_image->save();
        
        

        return back()->with('message',"Success Image Edit");
    }



    public function destroy($id)
    {
        $old_data = Banner::findOrFail($id);
        $old_photo = Storage::exists('public/banner/'.$old_data->photo);
        if($old_photo){
            Storage::delete('public/banner/'.$old_data->photo);
        }
        $old_data->destroy($id);
        return back()->with('message',"Success Image Delete");

    }
}
