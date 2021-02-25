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
                        <h4>Product SubCategory List</h4>

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
                        <li class="breadcrumb-item"><a href="#!">Product SubCategory</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('admin.error')
    <!-- Page-header end -->
        <div class="mb-3">
            <a href="{{route('subcategory.create.list')}}" class="btn btn-primary btn-round mt-3 mb-3">
                <i class="fas fa-plus"></i> Add
            </a>


        </div>
        <!-- Page-body start -->
        <div class="page-body">
            <!-- DOM/Jquery table start -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="w-25">logo</th>
                        <th>Name</th>
                        <th class="w-25">Image</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp

                    @foreach($subcategories as $subcategory)
                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>
                            <img src="{{asset('storage/subcategory/'.$subcategory->logo)}}" alt="" class="w-25">
                        </td>
                        <td>{{$subcategory->name}}</td>
                        <td>
                            <img src="{{asset('storage/subcategory/'.$subcategory->image)}}" alt="" class="w-25">
                        </td>
                        <td>
                            @foreach ($categories as $category)

                            @if ($category->id == $subcategory->category_id)
                            <a href=""><button class="btn btn-warning btn-round">{{$category->name}}</button></a>
                            @endif

                            @endforeach


                        </td>
                        <td>

                            <a href="{{Route('subcategory.edit.list',$subcategory->id)}}"><button class="btn btn-info btn-round">Edit</button></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>


        </div>
        <!-- Page-body start -->
    </div>
</div>

















@endsection

@section('js')

@endsection
