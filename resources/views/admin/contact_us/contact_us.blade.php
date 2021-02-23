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
                        <span>Advanced initialisation of DataTables</span>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('admin.error')
    <!-- Page-header end -->
       <div class="float-right mb-3">

            <a href="{{Route('contact_us.index', ['is_read' => 'false'])}}" class="btn btn-outline-info btn-round">Unread</a>
            <a href="{{Route('contact_us.index', ['is_read' => 'true'])}}" class="btn btn-outline-dark btn-round">Read</a>

        </div>
        <!-- Page-body start -->
        <div class="page-body">
            <!-- DOM/Jquery table start -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($data as $contact)

                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->title}}</td>
                        <td>{{Str::limit($contact->message,50)}}</td>

                        <td>
                            @if ($contact->isread == 0)
                            <a href="{{Route('contact_us.show',$contact->id)}}"><button class="btn btn-info btn-round">Unread</button></a>
                            @else
                            <a href="{{Route('contact_us.show',$contact->id)}}"><button class="btn btn-dark btn-round">Read</button></a>
                            @endif



                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

            @if (!request()->get('is_read'))
                {{ $data->links()}}
            @endif

        </div>
        <!-- Page-body start -->
    </div>
</div>

















@endsection

@section('js')

@endsection
