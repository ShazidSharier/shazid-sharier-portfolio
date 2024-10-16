@extends('admin.master')
@section('body')
    <!--app-content open-->
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Project</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Project</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Project</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Edit Project Form</h3>
                        <a href="{{ route('web.index') }}" class="btn btn-primary"> All Project</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('web.update', $web->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Project Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" value="{{$web->name}}" name="name" placeholder="Enter your Project Name" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Project Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image" type="file"/>
                                    <img src="{{asset($web->image)}}" alt="" height="100"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Project Url</label>
                                <div class="col-md-9">
                                    <input class="form-control" value="{{$web->url}}" name="url" placeholder="Enter your Project url" type="url">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Project Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- CONTAINER CLOSED -->
@endsection


