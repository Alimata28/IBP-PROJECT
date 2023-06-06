@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List of Books</h1>
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
          @foreach($books as $book)
            <div class="col-sm-3">
                <div class="card card-info" class="ml- 5 mt-5 ml-5 p-2" style="width: 10cm;">
                    <div class="card-header">
                        <h3 class="card-title">{{$book->title}}</h3>
                    </div>
                    <div class="card-body">
                        <img style="height: 200px; width: 300px" src="{{asset('backend/dist/img/livre10.jpeg')}}"/>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <a href="{{route('bookshow',$book->id)}}" class="btn btn-success">Read</a> 
                            <a href="{{route('bookdownload',$book->file)}}" class="btn btn-success">Download</a> 
                        </div>
                        <p>
                            Created_at: {{$book->created_at}}
                            Updated_at: {{$book->updated_at}}
                        </p>
                    </div>
                </div>
            </div>
          @endforeach
       </div>
    </div>
</section>
</div>
@endsection
