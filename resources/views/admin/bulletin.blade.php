@extends('layouts.admin_frontend')

@section('page-content')
<!--APP-CONTENT OPEN-->
<div class="app-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Bulletin</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bulletin</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Add Bulletin</h3>
                        </div>
                        <div class="card-body pb-2">
                            <form class="needs-validation was-validated" method="POST" action="{{ route('admin.post.bulletin')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control mb-4 is-invalid state-invalid" placeholder="Enter Bulletin Name" required type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control mb-4 is-invalid state-invalid" placeholder="Select Image" required type="file" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label>File</label>
                                            <input class="form-control mb-4 is-invalid state-invalid" placeholder="Select File" required type="file" name="file">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Bulletins</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                        <tr> 
                                            <th class="border-bottom-0">S/N</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Image</th>
                                            <th class="border-bottom-0">File</th>
                                            <th class="border-bottom-0">Created At</th>
                                            <th class="border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    @if($bulletins->isEmpty())
                                    <tbody>
                                        <tr>
                                            <td class="align-enter text-dark font-15" colspan="4">No Bulletin.</td>
                                        </tr>
                                    </tbody>
                                    @else
                                    @foreach($bulletins as $key => $bulletin)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$bulletin->name}}</td>
                                            <td>
                                                <img src="{{$bulletin->image}}" alt="img" width="100px" class="m-0 p-1 hrem-6">
                                            </td>
                                            <td>{{$bulletin->file}}</td>
                                            <td>{{$bulletin->created_at->toDayDateTimeString()}}</td>
                                            <td>
                                                <div>
                                                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#view-{{$bulletin->id}}">View/Edit</button>
                                                    <div class="modal fade" id="view-{{$bulletin->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <form method="Post" action="{{route('admin.update.bulletin', Crypt::encrypt($bulletin->id))}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="composemodalTitle">Update Bulletin</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <input type="text" class="form-control" value="{{$bulletin->name}}" name="name" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input type="file" class="form-control" value="{{$bulletin->image}}" name="image">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input type="file" class="form-control" value="{{$bulletin->file}}" name="file">
                                                                        </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#delete-{{$bulletin->id}}">Delete</button>
                                                <div class="modal fade" id="delete-{{$bulletin->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form method="Post" action="{{route('admin.delete.bulletin', Crypt::encrypt($bulletin->id))}}">
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="composemodalTitle">Delete Bulletin</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <p>Are you sure you want to delete this bulletin?</p>
                                                                    </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection