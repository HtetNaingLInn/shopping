@extends('layouts.admin.master')

@section('content')

    <div class="container-fluid">
        <ul>
            @foreach ($categories as $category)
                <li>{{$category->name}}</li>
                <ul>
                    @foreach ($category->categories as $childCategory)
                      @include('admin.category.child_category',['child_category'=>$childCategory])
                    @endforeach
                </ul>
            @endforeach
        </ul>
    </div>

@endsection
