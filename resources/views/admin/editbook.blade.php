@extends('admin_layout.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Book</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Update Book</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{--<form id="quickForm">--}}
                @if(Session::has('status'))
                <div x-data="{show: true}" x-init="setTimeout(()=> show= false , 3000)" x-show="show" class="alert alert-success ">
                  {{Session::get('status')}}
                </div>
                @endif
                @if(count($errors)> 0)
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      <p>{{$error}}</p>
                  @endforeach
                </div>
                @endif 
              {!!Form::open(['action'=>'App\Http\Controllers\BookController@updatebook', 'method'=>'POST' , 'enctype'=>'multipart/form-data'])!!}
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    {{--<label for="exampleInputEmail1">Product name</label>
                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">--}}
                    {{Form::hidden('id' ,$book->id)}}
                    {{Form::label('', 'book Title' ,['for'=>'exampleInputEmail1'])}}
                    {{Form::text('titre', $book->titre ,['class'=>'form-control' ,'id'=>'exampleInputEmail1', 'placeholder'=>'Enter book title'])}}
                  </div>
                  <div class="form-group">
                    {{--<label for="exampleInputEmail1">Product name</label>
                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">--}}
                    {{Form::label('', 'book autor' ,['for'=>'exampleInputEmail1'])}}
                    {{Form::text('auteur', $book->auteur ,['class'=>'form-control' ,'id'=>'exampleInputEmail1', 'placeholder'=>'Enter book autor'])}}
                  </div>
                  <div class="form-group">
                    {{--<label for="exampleInputEmail1">Product name</label>
                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">--}}
                    {{Form::label('', 'book tags' ,['for'=>'exampleInputEmail1'])}}
                    {{Form::text('tags', $book->tags ,['class'=>'form-control' ,'id'=>'exampleInputEmail1', 'placeholder'=>'Enter book tags'])}}
                  </div>
                  <div class="form-group">
                    {{--<label for="exampleInputEmail1">Product name</label>
                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">--}}
                    {{Form::label('', 'book link' ,['for'=>'exampleInputEmail1'])}}
                    {{Form::text('direct_link', $book->direct_link ,['class'=>'form-control' ,'id'=>'exampleInputEmail1', 'placeholder'=>'Enter book direct link'])}}
                  </div>
                  <div class="form-group">
                    {{Form::label('', 'book page number' ,['for'=>'exampleInputEmail1'])}}
                    {{Form::text('pages', $book->pages,['class'=>'form-control' ,'id'=>'exampleInputEmail1', 'placeholder'=>'book page number'])}}
                  </div>
                  <div class="form-group">
                    {{Form::label('', 'book year' ,['for'=>'exampleInputEmail1'])}}
                    {{Form::text('annee', $book->annee ,['class'=>'form-control' ,'id'=>'exampleInputEmail1', 'placeholder'=>'Enter book year'])}}
                  </div>
                  <div class="form-group">
                    {{Form::label('', 'book description' ,['for'=>'exampleInputEmail1'])}}
                    {{Form::text('description', $book->description ,['class'=>'form-control' ,'id'=>'exampleInputEmail1', 'placeholder'=>'Enter book description'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('', 'Product category' )}} 
                  {{Form::select('categorie' , $categories , $book->categorie ,['placeholder'=>'Select category' , 'class'=>'form-control select2'])}} 
                </div>
                <div>
                  <label for="exampleInputFile">File</label>
                  <div class="input-group">
                    <div class="custom-file">
                      {{Form::file('book_file',['class'=>'custom-file-input' ,'id'=>'exampleInputFile'])}}
                      {{Form::label('', 'Choose file' ,['class'=>'custom-file-label' , 'for'=>'exampleInputFile'])}}
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <br>
                <div>
                  <label for="exampleInputFile">image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      {{Form::file('image',['class'=>'custom-file-input' ,'id'=>'exampleInputFile'])}}
                      {{Form::label('', 'Choose image' ,['class'=>'custom-file-label' , 'for'=>'exampleInputFile'])}}
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                  {{-- <input type="submit" class="btn btn-success" value="Save"> --}}
                  {{Form::submit('update' ,['class'=>'btn btn-success'])}}
                </div>
                {!!Form::close()!!}
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('scripts')
<script>
    $(function () {
      $.validator.setDefaults({
        submitHandler: function () {
          alert( "Form successful submitted!" );
        }
      });
      $('#quickForm').validate({
        rules: {
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
            minlength: 5
          },
          terms: {
            required: true
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    <script src="backend/dist/js/adminlte.min.js"></script>
    <script src="backend/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="backend/plugins/jquery-validation/additional-methods.min.js"></script>
    </script>
@endsection
