@extends('layouts.api')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Book</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Edition</th>
                    <th>Price</th>
                    <th>View</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($all as $key=>$row)
                   <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->title}}</td>
                    <td>{{ $row->author}}</td>
                    <td>{{ $row->type}}</td>
                    <td>{{ $row->edition}}</td>
                    <td>{{ $row->price}}</td>
                    <td><a href="{{route('bookshow',$row->id)}}">View</td>
                    <td>
                
                        <a href="{{route('book.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{route('book.destroy',$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                        
                    </td>
                   </tr>
                  @endforeach
            
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Edition</th>
                    <th>Price</th>
                    <th>View</th>
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