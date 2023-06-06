@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
<section>
    <!-- Main content -->
    <div class="row">
        <div class="content">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline" style="width: 10cm;">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{asset('backend/dist/img/photo_2023.jpg')}}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>E-mail</b> <a class="float-right">{{auth()->user()->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Role</b> <a class="float-right">{{auth()->user()->role}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Password</b>
                                <a class="float-right">{{auth()->user()->password}}</a>
                                <a class="float-left" href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}">Update Profile</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
</div>
@endsection
