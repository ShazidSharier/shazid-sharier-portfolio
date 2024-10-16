@extends('admin.master')
@section('body')
    <!--app-content open-->
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Data Tables</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project Tables</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">All Project Info</h3>
                        <a href="{{ route('web.create') }}" class="btn btn-primary">Add Project</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <p class="text-success text-center">{{session('message')}}</p>
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Project</th>
                                    <th>Image</th>
                                    <th>Url</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($webs as $web)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$web->name}}</td>
                                        <td><img src="{{asset($web->image)}}" alt="" height="50"/></td>
                                        <td>{{$web->url}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('web.edit', $web->id)}}" class="btn btn-primary me-2">Edit</a>
                                            <form action="{{route('web.destroy', $web->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>

    <!-- CONTAINER CLOSED -->


@endsection

