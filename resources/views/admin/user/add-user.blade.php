@extends('layouts.api')
@section('content')
<div class="content-wrapper">
    <section>
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-10">
                <div class="card">
                   <div class="card-header">
                    <h5 class="card-title">
                        Add User
                    </h5>

                   </div>
                   <div class="card-body">
                      <form role="form" action="{{route('user.store') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                             <label for="name" class="col-sm-2 col-form-label">User name</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="email" class="col-sm-2 col-form-label">Email Adress</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" placeholder="Enter your email" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="password" class="col-sm-2 col-form-label">Password</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="password" placeholder="Enter password" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="role" class="col-sm-2 col-form-label">User Role Type</label>
                             <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect" name="role"required>
                                    <option value="Admin">1</option>
                                    <option value="User">0</option>
                                </select>
                             </div>
                          </div>
                        </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                          </div>

                     </form>
                  

                </div>
            </div>

        </div>
    </section>
</div>
@endsection
