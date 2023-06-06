@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Annoncements</h1>
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
       @foreach($all as $key=>$row)
        <div class="col-sm-1">
            <div class="card card-info ml-5 mt-5 ml-5 p-2" style="width: 10cm;">
                <div class="card-header">
                    <h3 class="card-info-title">{{$row->title}}</h3>
                </div>
                @if($row->type == "Information")
                  <div class="card-body">
                    <img style="height: 100px; width: 150px" src="{{asset('backend/dist/img/annonce.jpeg')}}"/>
                  </div>
                @else
                  <div class="card-body">
                    <img style="height: 100px; width: 150px" src="{{asset('backend/dist/img/livre9.jpeg')}}"/>
                  </div>
                @endif
                <div class="card-footer">
                    <div class="float-right">
                        <a href="{{route('show.new', $row->id)}}">Read</a> 
                    </div>
                    <p>
                        Created_at: {{$row->created_at}}
                        Updated_at: {{$row->updated_at}}
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