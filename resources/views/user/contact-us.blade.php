@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact Us</h1>
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
<div class="content">
<!-- Default box -->
<div class="card">
  <div class="card-body row">
    <div class="col-5 text-center d-flex align-items-center justify-content-center">
      <div class="">
        <h2>My<strong>Library</strong></h2>
        <p class="lead mb-5">Online library for everyone<br>
        </p>
      </div>
    </div>
    <div class="col-7">
    <form id="contact" action="{{ route('contactus.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="inputName">Full Name</label>
          <input type="text" id="inputName" class="form-control" name="name" />
        </div>
        <div class="form-group">
          <label for="inputEmail">E-Mail</label>
          <input type="email" id="inputEmail" class="form-control" name="email" />
        </div>
        <div class="form-group">
          <label for="inputSubject">Subject</label>
          <input type="text" id="inputSubject" class="form-control" name="subject" />
        </div>
        <div class="form-group">
          <label for="inputMessage">Message</label>
          <textarea id="inputMessage" class="form-control" rows="4" name="message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Send message">
        </div>
    </form>

    </div>
  </div>
</div>
</section>
</div>

@endsection