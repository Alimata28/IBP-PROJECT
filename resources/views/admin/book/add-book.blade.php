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
                        Add Book
                    </h5>

                   </div>
                   <div class="card-body">
                      <form role="form" action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                             <label for="title" class="col-sm-2 col-form-label">Title</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="title" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="author" class="col-sm-2 col-form-label">Author</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="author" placeholder="Author" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="role" class="col-sm-2 col-form-label">Type</label>
                             <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect" name="type"required>
                                    <option value="Novel">Novel</option>
                                    <option value="Poem">Poem</option>
                                    <option value="Chronicle">Chronicle</option>
                                    <option value="Biography">Biography</option>
                                </select>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="file" class="col-sm-2 col-form-label">Upload File</label>
                             <div class="col-sm-10">
                                <input type="file" class="form-control" name="file" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="edition" class="col-sm-2 col-form-label">Edition</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="edition" placeholder="edition" required>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="price" class="col-sm-2 col-form-label">Price</label>
                             <div class="col-sm-10">
                                <input type="text" class="form-control" name="price" placeholder="price" required>
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
