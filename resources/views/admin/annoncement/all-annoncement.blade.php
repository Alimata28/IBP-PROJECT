@extends('layouts.api')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Annoncement</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Content</th>
                    <th>created_at</th>
                    <th>Update_at</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($all as $key=>$row)
                   <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->title}}</td>
                    <td>{{ $row->type}}</td>
                    <td>{{ $row->content}}</td>
                    <td>{{ $row->created_at}}</</td>
                    <td>{{ $row->updated_at}}</</td>
                    <td>
                
                          <a href="{{route('annoncement.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                          <a href="{{route('annoncement.destroy',$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                        
                    </td>
                   </tr>
                  @endforeach
            
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Content</th>
                    <th>created_at</th>
                    <th>Update_at</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div> 
 
@endsection