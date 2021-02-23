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
                        <h4>Contact Us</h4>
                        <span>Detail</span>
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
                        <li class="breadcrumb-item"><a href="#!">Contact Us</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Detail</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
            <form method="POST" action="{{Route('contact_us.read',$data->id)}}">
                @csrf
            <button class="btn btn-info btn-round mb-3" type="submit">Back</button>
            </form>
        <!-- Page-body start -->
        <div class="page-body">
            <!-- DOM/Jquery table start -->
           <div class="card">
               <div class="card-body">
                    <h5>Name : {{$data->name}}</h5>
                    <br>
                    <h5>Phone : {{$data->phone}}</h5>
                    <br>
                    <h5>Title : {{$data->title}}</h5>
                    <br>
                    <h5>Message </h5>
                    <br>
                    <p>{{$data->message}}</p>
               </div>
           </div>

        </div>
        <!-- Page-body start -->
    </div>
</div>

















@endsection

@section('js')

@endsection
