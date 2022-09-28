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
                    <h1 class="page-title">Invention</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Invention</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row" id="invention-profile">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="ms-4">
                                            <h4>{{$invention->fullname}}</h4>
                                            <p class="text-muted mb-2">{{$invention->email}}</p>
                                            <a href="#" class="btn btn-secondary btn-sm">{{$invention->phone}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-wrap" style="justify-content: flex-end;">
                                        <a href="{{route('admin.pdf', Crypt::encrypt($invention->id))}}" class="btn btn-success btn-sm" style="float: right">PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="wideget-invention-tab">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <ul class="nav">
                                            <li><a href="#inventionDetails" class="active show" data-bs-toggle="tab">Invention Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="inventionDetails">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="border-top"></div>
                                    <div class="table-responsive p-5">
                                        <table class="table row table-borderless">
                                            <tbody class="col-lg-12 col-xl-6 p-0">
                                                <tr>
                                                    <td><strong>Category :</strong> {{$invention->category}}</td>
                                                </tr>
                                                <tr>
                                                    @if($invention->groupleadername == null)
                                                    <td><strong>Group Leader Name:</strong> None</td>
                                                    @else
                                                    <td><strong>Group Leader Name :</strong> {{$invention->groupleadername}}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td><strong>Full Name/Group Name :</strong> {{$invention->fullname}}</td>
                                                </tr>
                                                <tr>
                                                    @if($invention->groupnumber == null)
                                                    <td><strong>Group Number:</strong> None</td>
                                                    @else
                                                    <td><strong>Group Number:</strong> {{$invention->groupnumber}}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td><strong>Email :</strong> {{$invention->email}}</td>
                                                </tr>
                                                
                                            </tbody>
                                            <tbody class="col-lg-12 col-xl-6 p-0 border-top-0">
                                                <tr>
                                                    <td><strong>Phone Number :</strong> {{$invention->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Age Category :</strong> {{$invention->age}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Educational Level :</strong> {{$invention->level}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>City / State :</strong> {{$invention->citystate}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Country :</strong> {{$invention->country}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top"></div>
                                    <div class="table-responsive p-5">
                                        <h3 class="card-title">PROJECT DETAILS</h3>
                                        <table class="table row table-borderless">
                                            <tbody class="col-12 p-0">
                                                <tr>
                                                    <td><strong>Invention Name :</strong> {{$invention->projectname}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>What makes it a difference from other existing works? :</strong> {{$invention->difference}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Is your project patented? :</strong> {{$invention->patent}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Has this project been registered before on another platform? :</strong> {{$invention->registered}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>What other problems can it solve? :</strong> {{$invention->importance}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Working details of Invention :</strong> {{$invention->workingdetails}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cost of the Project :</strong> {{$invention->cost}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-top"></div>
                                    <div class="table-responsive p-5">
                                        <h3 class="card-title">Files</h3>
                                        <table class="table row table-borderless">
                                            <tbody class="col-lg-6 p-0">
                                                <tr>
                                                    <td><strong>Rear View of your Project :</strong> 
                                                        <p><img src="/storage/inventions/files/{{$invention->file}}"></p>
                                                        <a href="{{route('admin.download', Crypt::encrypt($invention->file))}}" class="btn btn-primary mt-3">Download</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody class="col-lg-6 p-0">
                                                <tr>
                                                    <td><strong>Front View of your Project :</strong> 
                                                        <p><img src="/storage/inventions/files/{{$invention->file2}}"></p>
                                                        <a href="{{route('admin.download', Crypt::encrypt($invention->file2))}}" class="btn btn-primary mt-3">Download</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody class="col-lg-6 p-0">
                                                <tr>
                                                    <td><strong>Short Video of project (360° view) :</strong> 
                                                        <p>
                                                            <video width="320" height="240" controls>
                                                            <source src="/storage/inventions/files/{{$invention->file3}}" type="video/mp4">
                                                            <source src="/storage/inventions/files/{{$invention->file3}}" type="video/ogg">
                                                            Your browser does not support the video tag.
                                                            </video>
                                                        </p>
                                                        <a href="{{route('admin.download', Crypt::encrypt($invention->file3))}}" class="btn btn-primary mt-3">Download</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody class="col-lg-6 p-0">
                                                <tr>
                                                    <td><strong>Photo of the Inventor/Group photo of Inventors :</strong> 
                                                        <p><img src="/storage/inventions/files/{{$invention->file4}}"></p>
                                                        <a href="{{route('admin.download', Crypt::encrypt($invention->file4))}}" class="btn btn-primary mt-3">Download</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection