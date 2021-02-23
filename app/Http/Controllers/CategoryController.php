<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::all();
        return view('admin.category.category', compact('data'));
    }


    public function create()
    {

        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required',
        ]);



        $logo=$request->logo;
        $logoName=time().'_'.$logo->getClientOriginalName();
        $logo->storeAs('category',$logoName,'public');
        $image=$request->image;
        $imageName=time().'_'.$image->getClientOriginalName();
        $image->storeAs('category',$imageName,'public');

        Category::create([
            'logo'=>$logoName,
            'image'=>$imageName,
            'name' => $request->name,
        ]);
        return redirect(Route('category.index'))->with('success','Category Created Successful');
    }



    public function edit($id)
    {

        $category=Category::findOrfail($id);
        return view('admin.category.edit',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name'=>'required',
        ]);
        $category=Category::findOrfail($id);

        $logo=$request->logo;
        $image=$request->image;
        if($logo || $image){
            $logo=$request->logo;
            $logoName=time().'_'.$logo->getClientOriginalName();
            $logo->storeAs('category',$logoName,'public');
            $image=$request->image;
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->storeAs('category',$imageName,'public');
        }
        else{
           $logoName= $category->logo;
           $imageName=$category->image;
        }
        $category->update([
            'logo'=>$logoName,
            'image'=>$imageName,
            'name' => $request->name,
        ]);
        return redirect(Route('category.index'))->with('success','Updated Successful');
    }


    public function subCategoryList()
    {

        $categories = Category::whereNull('category_id')
            ->with('subCategories')
            ->get();

        return view('admin.category.view', compact('categories'));
    }
}
