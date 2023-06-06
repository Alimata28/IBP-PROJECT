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
    <form id="contact" action="{{ route('mail.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="Greeting">Greeting</label>
          <input type="text" class="form-control" name="greeting" />
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea  class="form-control" rows="4" name="body" ></textarea>
        </div>
        <div class="form-group">
          <label for="endtext">Endtext</label>
          <input type="text"  class="form-control" name="endtext" />
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