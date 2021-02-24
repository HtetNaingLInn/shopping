@extends('layouts.admin.master')

@section('css')

@endsection


@section('content')




<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Update Sub Category</h4>
                        <a href="{{Route('subcategory.index',$cat)}}">
                            <button class="btn btn-primary btn-round mt-4">Back</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Product Setting</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Sub Category</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Update Sub Category</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('admin.error')
    <!-- Page-header end -->
        <!-- Page-body start -->
        <div class="page-body">
            <!-- DOM/Jquery table start -->
            <div class="container-fluid">
                <div class="col-md-8 offset-2">


                <div class="card">

                    <div class="card-header">
                        <h4 class="text-info text-center">Update Sub Category</h4>
                    </div>
                    <div class="card-body">
                        <form  method="POST" action="{{Route('subcategory.update',[$cat,$subcategory->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <img src="{{asset('storage/subcategory/'.$subcategory->logo)}}" style="width:100px !important;" id="preview">
                            </div>
                            <div class="form-group">
                                <label for="File1">subcategory Logo </label>
                                <input type="file" class="form-control" name="logo" id="file" accept="image/*" onchange="previewImage();"
                                    style="border:1px solid rgb(228, 135, 30);">
                            </div>

                            <div class="form-group">
                                <label for="name">subcategory Name</label>
                                <input type="text"  class="form-control" value="{{$subcategory->name}}"
                                    name="name">
                            </div>

                            <div class="form-group">
                                <img src="{{asset('storage/subcategory/'.$subcategory->image)}}" style="width:100px !important;" id="preview1">
                            </div>
                            <div class="form-group">
                                <label for="File1">subcategory Image </label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*" onchange="previewImage1();"
                                    style="border:1px solid rgb(91, 238, 206);">
                            </div>
                              <button type="submit" class="btn btn-info btn-round mt-3 float-right">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>


        </div>
        <!-- Page-body start -->
    </div>
</div>

















@endsection

@section('js')

<script>

    function previewImage(){
        var file = document.getElementById("file").files;

        if(file.length>0){
            var fileReader =new FileReader();
            fileReader.onload=function(event){
                document.getElementById("preview").setAttribute("src",event.target.result);
            }
            fileReader.readAsDataURL(file[0]);
        }
    }

    function previewImage1(){
        var file = document.getElementById("image").files;

        if(file.length>0){
            var fileReader =new FileReader();
            fileReader.onload=function(event){
                document.getElementById("preview1").setAttribute("src",event.target.result);
            }
            fileReader.readAsDataURL(file[0]);
        }
    }

</script>

@endsection
