@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <section>
    <div class="row">
       <div class="container-fluid">
       <form 
        id="formAccountSettings" 
        method="POST" 
        action="{{ route('profile.update',auth()->id()) }}" 
        enctype="multipart/form-data"
        class="needs-validation" 
        role="form"
        novalidate
    >
    @csrf
    <div class="card-body">
        <div class="row">
          <form action="{{route ('profile.update', auth()->user() ) }}" method="post"></form>
            @csrf
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Change Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Change Email</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">New password</label>
                <input class="form-control" type="text" id="password" name="password" value="{{ auth()->user()->password }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">*********</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Confirme password</label>
                <input class="form-control" type="text" id="password_confirmation" name="password_confirmation" value="{{ auth()->user()->password }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">********</div>
            </div>
            <div class="mt-2">
                <button type="submit" class="button-create me-2">Update</button>
            </div>
        </div>
    </div>
</form>
       </div>
    </div>
  </section>
</div>
@endsection