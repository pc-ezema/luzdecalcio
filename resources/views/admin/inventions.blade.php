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
                    <h1 class="page-title">Inventions</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inventions</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Inventions</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive export-table">
                                <table id="basic-datatable" class="table table-bordered text-nowrap key-buttons border-bottom w-100">
                                    <thead>
                                        <tr> 
                                            <th class="border-bottom-0">S/N</th>
                                            <th class="border-bottom-0">Front View(Image)</th>
                                            <th class="border-bottom-0">Category</th>
                                            <th class="border-bottom-0">Full Name/Name of Group</th>
                                            <th class="border-bottom-0">Email</th>
                                            <th class="border-bottom-0">Phone Number</th>
                                            <th class="border-bottom-0">Age Category</th>
                                            <th class="border-bottom-0">Educational Level</th>
                                            <th class="border-bottom-0">City/State/Country</th>
                                            <th class="border-bottom-0">Project Name</th>
                                            <th class="border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    @if($inventions->isEmpty())
                                    <tbody>
                                        <tr>
                                            <td class="align-enter text-dark font-15" colspan="11">No invention.</td>
                                        </tr>
                                    </tbody>
                                    @else
                                    @foreach($inventions as $key => $invention)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td class="text-center sorting_1">
                                                <div class="avatar avatar-xl">
                                                    @if($invention->file2)
                                                    <img src="/storage/inventions/files/{{$invention->file2}}">
                                                    @else
                                                    <div style="width: 2.5rem; align-items: center; font-size: 1rem; background:#0d6efd; color: #fff; display: flex; justify-content: center;">{{ ucfirst(substr($invention->last_name, 0, 1)) }}</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                {{$invention->category}}
                                            </td>
                                            <td>
                                                {{$invention->fullname}}
                                            </td>
                                            <td>
                                                {{$invention->email}}
                                            </td>
                                            <td>{{$invention->phone}}</td>
                                            <td>{{$invention->age}}</td>
                                            <td>{{$invention->level}}</td>
                                            <td>{{$invention->citystate}}/{{$invention->country}}</td>
                                            <td>{{$invention->projectname}}</td>
                                            <td>
                                                <a href="{{route('admin.view.edit.invention', Crypt::encrypt($invention->id))}}" class="btn btn-primary mt-3">View/Edit</a>
                                                <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#sendmessage-{{$invention->id}}">Send Message</button>
                                                <div class="modal fade" id="sendmessage-{{$invention->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form method="Post" action="{{route('admin.message.invention', Crypt::encrypt($invention->id))}}" style="width: 100%;">
                                                        @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <input type="text" class="form-control" value=" {{$invention->fullname}}" readonly>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <input type="text" class="form-control" placeholder="Subject:" name="subject">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <textarea type="text" class="form-control" placeholder="Message:" name="message" style="height: 300px; width: 500px;"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#delete-{{$invention->id}}">Delete</button>
                                                <div class="modal fade" id="delete-{{$invention->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="sendmessageLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form method="Post" action="{{route('admin.delete.invention', Crypt::encrypt($invention->id))}}" style="width: 100%;">
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="composemodalTitle">Delete {{$invention->first_name}} {{$invention->last_name}}</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <p>Are you sure you want to delete this invention?</p>
                                                                        <p><span class="text-danger">Note: </span>All files relating to this invention will be erased permanently</p>
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