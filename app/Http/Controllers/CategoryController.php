<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        // $data = Category::all();
        // return view('admin.category.category', compact('data'));
         // with(subCategories) can call all level of category_id
        // with(categories) can call one level of category_id
        $categories = Category::whereNull('category_id')
            ->with('subCategories')
            ->get();

        return view('admin.category.category', compact('categories'));
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


        if($logo){
            $logo=$request->logo;
            $logoName=time().'_'.$logo->getClientOriginalName();
            $logo->storeAs('category',$logoName,'public');
        }
        else{
           $logoName= $category->logo;

        }
        $image=$request->image;
        if ($image) {
            $image=$request->image;
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->storeAs('category',$imageName,'public');
        }
        else{
            $imageName=$category->image;
        }
        $category->update([
            'logo'=>$logoName,
            'image'=>$imageName,
            'name' => $request->name,
        ]);
        return redirect(Route('category.index'))->with('success','Updated Successful');
    }


    // public function subCategoryList()
    // {
    //     // with(subCategories) can call all level of category_id
    //     // with(categories) can call one level of category_id
    //     $categories = Category::whereNull('category_id')
    //         ->with('subCategories')
    //         ->get();

    //     return view('admin.category.view', compact('categories'));
    // }



    Public function subCategoryIndex($id){
        $cat=$id;
        $data=Category::where('category_id',$id)
        ->with('categories')
        ->get();

        return view('admin.category.subcategory',compact('data','cat'));
    }


    Public function subCategoryCreate($id){
        $cat=$id;
        return view('admin.category.subcategory_create',compact('cat'));
    }

    Public function subCategoryStore(Request $request ,$id){
        $cat=$id;
        $this->validate(request(),[
            'name'=>'required',
        ]);



        $logo=$request->logo;
        $logoName=time().'_'.$logo->getClientOriginalName();
        $logo->storeAs('subcategory',$logoName,'public');
        $image=$request->image;
        $imageName=time().'_'.$image->getClientOriginalName();
        $image->storeAs('subcategory',$imageName,'public');

        Category::create([
            'logo'=>$logoName,
            'image'=>$imageName,
            'category_id'=>$cat,
            'name' => $request->name,
        ]);
        return redirect(Route('subcategory.index',$cat))->with('success','SubCategory Created Successful');

    }


    public function subCategoryEdit($category,$id)
    {
        $cat=$category;
        $subcategory=Category::findOrFail($id);
        return view('admin.category.subcategory_edit',compact('cat','subcategory'));

    }

    public function subCategoryUpdate(Request $request,$cat,$id)
    {
        $this->validate(request(),[
            'name'=>'required',
        ]);
        $category_id=$cat;
        $category=Category::findOrfail($id);

        $logo=$request->logo;


        if($logo){
            $logo=$request->logo;
            $logoName=time().'_'.$logo->getClientOriginalName();
            $logo->storeAs('subcategory',$logoName,'public');
        }
        else{
           $logoName= $category->logo;

        }
        $image=$request->image;
        if ($image) {
            $image=$request->image;
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->storeAs('subcategory',$imageName,'public');
        }
        else{
            $imageName=$category->image;
        }
        $category->update([
            'logo'=>$logoName,
            'image'=>$imageName,
            'category_id'=>$category_id,
            'name' => $request->name,
        ]);
        return redirect(Route('subcategory.index',$category_id))->with('success','Updated Successful');
    }
}
