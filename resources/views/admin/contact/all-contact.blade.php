@extends('layouts.api')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Contact</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>created_at</th>
                    <th>Update_at</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($all as $key=>$row)
                   <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->name}}</td>
                    <td>{{ $row->email}}</td>
                    <td>{{ $row->subject}}</td>
                    <td>{{ $row->message}}</td>
                    <td>{{ $row->created_at}}</</td>
                    <td>{{ $row->updated_at}}</</td>
                    <td>
                
                          <a href="{{route('mail.index')}}" class="btn btn-sm btn-info">Reply</a>
                          <a href="{{route('contact.destroy',$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                        
                    </td>
                   </tr>
                  @endforeach
            
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
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