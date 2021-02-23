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
                        <h4>Advanced DataTable</h4>
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
                        <li class="breadcrumb-item"><a href="#!">Basic Initialization</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Advance Initialization</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!-- DOM/Jquery table start -->
            <div>
                <div class="card">
            
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> {{ session('message') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>                                          
                    @endif

                    @error('image') 
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error!</strong> {{ $message }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>                                            
                    @enderror

            
            
                    <div class="card-header">
                        <h5>Banner Manage</h5>
                        <div style="float: right">
                            <button class="btn btn-info btn-round" data-toggle="modal" data-target="#create_modalBox">Create</button>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="20%">Photo</th>
                                        <th >Link</th>
                                        <th >Status</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  {{-- @php($no=0) --}}
                                    @foreach($allBanner as $banner)
                                    <tr>
                                        {{-- <td>{{json_decode(json_encode($data),true)['from']+$no++}}</td> --}}
                                        <td>{{$banner->id}}</td>
                                        <td><img width="100%" class="img-thumbnail"  src="{{asset('storage\banner\\'.$banner->photo)}}" alt=""></td>
                                        <td>{{$banner->link}}</td>
                                        <td>{{$banner->status}}</td>
                                        <td>
                                            <button class="btn btn-success btn-round" data-toggle="modal" data-target="#edit_modalBox" onclick="setData({{$banner->id}})">Edit</button>
                                            <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#delete_modalBox" onclick="deleteBanner({{$banner->id}})">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
            
                                </tbody>
            
                            </table>
                            {{-- {{ $data->links() }} --}}
                        </div>
                    </div>
                </div>
            

                {{-- !-- Delete Warning Modal -->  --}}
                    <div wire:ignore.self class="modal fade" id="delete_modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form id="delete_banner" action="" method="post" >
                                @csrf
                                <div class="modal-body">
                                    <h5 class="text-center">Are you sure you want to delete Image ?</h5>
                                </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Yes, Delete</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
            
                  {{-- edit Modal --}}
                  <div wire:ignore.self class="modal fade" id="edit_modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form id="edit_banner" action="" method="post" enctype="multipart/form-data" >
                            @csrf
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="name">Image</label>
                                <input type="file" class="form-control" name="image">
                                {{-- @error('image') <span class="error">{{ $message }}</span> @enderror --}}
                              </div>
                              <div class="form-group">
                                <label for="name">link</label>
                                <input type="text" class="form-control" name="link" placeholder="Please Add Slider Link">
                                {{-- @error('link') <span class="error">{{ $message }}</span> @enderror --}}
                              </div>
                              <div class="form-group">
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected>select status</option>
                                    <option value="Active">Active</option>
                                    <option value="InActive">Inactive</option>
                                  </select>
                                {{-- @error('status') <span class="error">{{ $message }}</span> @enderror --}}
                              </div>
                          </div>;
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
            
                  {{-- create Modal --}}
                  <div wire:ignore.self class="modal fade" id="create_modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{route('banner.store')}}"  method="POST" enctype="multipart/form-data" id="upload-image-form">
                            @csrf
                          <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Image</label>
                                <input type="file" class="form-control" name="image" id="image-input-error">
                                {{-- @error('image') <span class="error">{{ $message }}</span> @enderror --}}
                              </div>
                              <div class="form-group">
                                <label for="name">link</label>
                                <input type="text" class="form-control" name="link" placeholder="Please Add Slider Link">
                                {{-- @error('link') <span class="error">{{ $message }}</span> @enderror --}}
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary create" >Create</button>
                          </div>
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

@endsection
<script type="text/javascript" src="{{url('files\bower_components\jquery\js\jquery.min.js')}}"></script>
<script>
    function setData(id){
        var link = "/admin/banner/"+id;
        document.getElementById('edit_banner').setAttribute("action", link);
    }
    function deleteBanner(id){
        var link = "/admin/banner/"+id+"/delete";
        document.getElementById('delete_banner').setAttribute("action", link);
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


  //  $('#upload-image-form').submit(function(e) {
  //      e.preventDefault();
  //      $('#create_modalBox').style.display = "none";
  //      let formData = new FormData(this);
  //      $('#image-input-error').text('');

  //      $.ajax({
  //         type:'POST',
  //         url: `/admin/banner`,
  //          data: formData,
  //          contentType: false,
  //          processData: false,
  //          success: (response) => {
  //            if (response) {
  //             console.log(response);
  //              this.reset();
  //              alert('Image has been uploaded successfully');
  //            }
  //          },
  //          error: function(response){
  //             console.log(response);
  //               $('#image-input-error').text(response.responseJSON.errors.file);
  //          }
  //      });
  // });
</script>
