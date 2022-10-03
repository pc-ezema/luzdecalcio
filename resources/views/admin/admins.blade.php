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
                    <h1 class="page-title">Admins</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admins</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Add Admin</h3>
                        </div>
                        <div class="card-body pb-2">
                            <form class="needs-validation was-validated" method="POST" action="{{ route('admin.admin.add')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>User Type</label>
                                            <select class="form-control mb-4 is-invalid state-invalid" required name="user_type">
                                                <option value="">Select User Type</option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="Blog">Blog</option>
                                                <option value="Invention">Invention</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control mb-4 is-invalid state-invalid" placeholder="Enter Name" required type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control mb-4 is-invalid state-invalid" placeholder="Enter Email" required type="text" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control mb-4 is-invalid state-invalid" placeholder="Enter Password" required type="password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control mb-4 is-invalid state-invalid" placeholder="Re-Enter Password" required type="password" name="password_confirmation">
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
                            <h3 class="card-title">All Admins</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">S/N</th>
                                            <th class="border-bottom-0">User Type</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Email</th>
                                            <th class="border-bottom-0">Created At</th>
                                            <th class="border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    @if($users->isEmpty())
                                    <tbody>
                                        <tr>
                                            <td class="align-enter text-dark font-15" colspan="6">No Admin.</td>
                                        </tr>
                                    </tbody>
                                    @else
                                    @foreach($users as $key => $user)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->user_type}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at->toDayDateTimeString()}}</td>
                                            <td>
                                                <div>
                                                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#view-{{$user->id}}">View/Edit</button>
                                                    <div class="modal fade" id="view-{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <form method="Post" action="{{route('admin.admin.update', Crypt::encrypt($user->id))}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="composemodalTitle">Update Admin</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label>User Type</label>
                                                                            <select class="form-control mb-4" required name="user_type">
                                                                                <option value="{{$user->user_type}}">{{$user->user_type}}</option>
                                                                                <option value="">Select User Type</option>
                                                                                <option value="Administrator">Administrator</option>
                                                                                <option value="Blog">Blog</option>
                                                                                <option value="Invention">Invention</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>Name</label>
                                                                            <input class="form-control mb-4" placeholder="Enter Name" required type="text" value="{{$user->name}}" name="name">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>Email</label>
                                                                            <input class="form-control mb-4" placeholder="Enter Email" required type="text" value="{{$user->email}}" name="email">
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

                                                <div>
                                                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#update-password-{{$user->id}}">Update Password</button>
                                                    <div class="modal fade" id="update-password-{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <form method="Post" action="{{route('admin.admin.update.password', Crypt::encrypt($user->id))}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="composemodalTitle">Update Admin</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label>Password</label>
                                                                            <input class="form-control mb-4" placeholder="Enter Password" required type="password" name="new_password">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>Confirm Password</label>
                                                                            <input class="form-control mb-4" placeholder="Re-Enter Password" type="password" name="new_password_confirmation">
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
                                                
                                                <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#delete-{{$user->id}}">Delete</button>
                                                <div class="modal fade" id="delete-{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form method="Post" action="{{route('admin.admin.delete', Crypt::encrypt($user->id))}}">
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="composemodalTitle">Delete Admin</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <p>Are you sure you want to delete this user?</p>
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