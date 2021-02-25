<?php

use App\Http\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\Contact_UsController;
use App\Http\Controllers\Website_InfoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('index');
});

//domo page for admin dashboard
Route::get('/admin/home', function () {
    return view('admin.index');
});

//this is demo code for livewire
Route::get('/admin/city', function () {
    return view('admin.city');
});

//this is testing livewire
Route::get('/counter', Counter::class);

//write asxox route here

Route::get('testing', [CityController::class, 'index']);
// Website Information
Route::get('admin/website_info/{id}/edit', [Website_InfoController::class, 'edit'])->name('website_info.edit');
Route::post('admin/website_info/{id}/update', [Website_InfoController::class, 'update'])->name('website_info.update');

// Contact Us
Route::get('admin/contact_us', [Contact_UsController::class, 'index'])->name('contact_us.index');
Route::get('admin/contact_us/{id}', [Contact_UsController::class, 'show'])->name('contact_us.show');
Route::post('admin/contact_us/{id}', [Contact_UsController::class, 'read'])->name('contact_us.read');


// Category
// Route::get('view_category_and_sub-category_list', [CategoryController::class, 'subCategoryList']);
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');

// Sub Category

Route::get('category/{id}/subcategory',[CategoryController::class,'subCategoryIndex'])->name('subcategory.index');
Route::get('category/{id}/subcategory/create', [CategoryController::class, 'subCategoryCreate'])->name('subcategory.create');
Route::post('category/{id}/subcategory/store', [CategoryController::class, 'subCategoryStore'])->name('subcategory.store');
Route::get('category/{id}/subcategory/edit/{id1}',[CategoryController::class,'subCategoryEdit'])->name('subcategory.edit');
Route::post('category/{id}/subcategory/update/{id1}',[CategoryController::class,'subCategoryUpdate'])->name('subcategory.update');


Route::get('subcategory',[CategoryController::class,'subCategoryList'])->name('subcategory.list');
Route::get('subcategory/create',[CategoryController::class,'subCategoryCreateFromList'])->name('subcategory.create.list');
Route::post('subcategory/store',[CategoryController::class,'subCategoryStoreFromList'])->name('subcategory.store.list');
Route::get('subcategory/edit/{id}',[CategoryController::class,'subCategoryEditFromList'])->name('subcategory.edit.list');
Route::post('subcategory/update/{id}',[CategoryController::class,'subCategoryUpdateFromList'])->name('subcategory.update.list');



Route::get('testing',[CityController::class,'index']);


// Zeyar Banner Route
Route::group(['prefix'=>'admin/banner'],function () {

    Route::get('/',[BannerController::class,'index'])->name('banner.show');
    Route::post('/',[BannerController::class,'store'])->name('banner.store');
    Route::post('/{id}',[BannerController::class,'update']);
    Route::post('/{id}/delete',[BannerController::class,'destroy'])->name('banner.destroy');
});

// Zeyar Banner Route

