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
                        <h4>Company Setting</h4>
                        {{-- <span>Advanced initialisation of DataTables</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Company Setting</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Company Information</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @include('admin.error')
    </div>
    <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">

       <div class="card">

           <div class="card-header">
               <h5>Company Information Setting</h5>
           </div>
           <div class="card-block">
            <form method="POST" action="{{Route('website_info.update',$website->id)}}" class="pt-2" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <img src="{{asset('website_info/'.$website->logo)}}" style="width:100px !important;" id="preview">
                </div>

                <div class="form-group">
                    <label for="File1">Company Logo :</label>
                    <input type="file" class="form-control-file rounded" name="logo" id="file" accept="image/*" onchange="previewImage();"
                        style="border:1px solid black;">
                </div>
                <div class="form-group">
                    <label for="name">Company Name </label>
                    <input type="text"  class="form-control" value="{{$website->name}}"
                        name="name">
                </div>
                <div class="form-group">
                    <label for="name">Phone </label>
                    <input type="text"  class="form-control" value="{{$website->phone}}"
                        name="phone">
                </div>
                <div class="form-group">
                    <label for="name">Email </label>
                    <input type="email"  class="form-control" value="{{$website->email}}"
                        name="email">
                </div>
                <div class="form-group">
                    <label for="name">Address </label>
                    <input type="text"  class="form-control" value="{{$website->address}}"
                        name="address">
                </div>
                <div class="form-group">
                    <label for="name">Facebook Links </label>
                    <input type="text"  class="form-control" value="{{$website->facebook}}"
                        name="facebook">
                </div>
                <div class="form-group">
                    <label for="name">Viber Phone Number</label>
                    <input type="text"  class="form-control" value="{{$website->viber}}"
                        name="viber">
                </div>

                {{-- <div class="form-group">
                    <label for="website" class="text-danger">Website Maintenance Mode </label>
                    <select class="form-control" name="is_disable_website">
                       @if ($website->is_disable_website == "0")
                        <option value="0" selected >Off</option>
                        <option value="1">On</option>
                       @else
                       <option value="0">Off</option>
                       <option value="1" selected>On</option>
                       @endif
                    </select>
                  </div> --}}

                  <div class="form-group">
                    <label for="website" class="text-danger">Website Maintenance Mode </label>
                    <select class="form-control" name="is_disable_website">
                        <option value="0" {{$website->is_disable_website == "0" ? 'selected' : null}} >Off</option>
                        <option value="1" {{$website->is_disable_website == "1" ? 'selected' : null}}>On</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="website" class="text-danger">Application Maintenance Mode </label>
                    <select class="form-control" name="is_disable_app">
                        <option value="0" {{$website->is_disable_app == "0" ? 'selected' : null}} >Off</option>
                        <option value="1" {{$website->is_disable_app == "1" ? 'selected' : null}}>On</option>
                    </select>
                  </div>

               <div class="form-group">
                <button class="btn btn-info btn-round float-right" type="submit">Update</button>
               </div>
            </form>
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

    </script>

@endsection
