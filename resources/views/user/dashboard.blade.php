@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">WELCOME {{auth()->user()->name}}!</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{route('new')}}" class="btn btn-success">See all annoncement</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <section>
    <div class="row">
       <div class="container-fluid">
         <img src="{{asset('backend/dist/img/livre7.jpeg')}}" class="main-container" alt="wallpapper">
       </div>
    </div>
  </section>
</div>
@endsection