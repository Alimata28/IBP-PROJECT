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
                        Add Annoncement
                    </h5>

                   </div>
                   <div class="card-body">
                      <form role="form" action="{{ route('annoncement.store') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                             <label for="title" class="col-sm-2 col-form-label">Annoncement Title</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="Enter the title" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="type" class="col-sm-2 col-form-label">Type of Annoncement</label>
                             <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect" name="type"required>
                                    <option value="Information">Information</option>
                                    <option value="New book">New Book</option>
                                </select>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="content" class="col-sm-2 col-form-label">Content</label>
                             <div class="col-sm-10">
                                <textarea cols="50" row="5" id="content" name="content" placeholder="content of Annoncement" required></textarea>
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
