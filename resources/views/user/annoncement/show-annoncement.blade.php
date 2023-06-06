@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Annoncement Content</h1>
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
            <div class="col-sm-1">
                <div class="card card-info" class="ml- 5 mt-5 ml-5 p-2" style="width: 20cm;">
                    <div class="card-header">
                        <h3 class="card-title">{{$data->title}}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card=text">{{$data->content}}</p>
                    </div>
                    <div class="card-footer">
                        <p>
                            Created_at: {{$data->created_at}}
                            Updated_at: {{$data->updated_at}}
                        </p>
                    </div>
                </div>
            </div>
       </div>
    </div>
  </section>
</div>
@endsection
