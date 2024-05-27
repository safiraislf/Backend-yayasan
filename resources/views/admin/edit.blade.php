@extends('layout.mainadmin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('buttonadmin.update', ['id' => $data->id ])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8 offset-md-2 mt-2">
                      <!-- general form elements -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input name="email" type="email" value="{{ $data->email }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              @error('email')
                                <small>{{ $message }}</small>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama">Nama</label>
                                <input  name="name"type="name" value="{{ $data->name }}" class="form-control" id="exampleInputNama" placeholder="Enter nama">
                                @error('name')
                                <small>{{ $message }}</small>
                              @enderror
                              </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input  name="password" type="password" value="{{ $data->password }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              @error('password')
                              <small>{{ $message }}</small>
                            @enderror
                            </div>
                            <div class="form-group">

                            </div>
                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary" action="{{route('dataadmin')}}">Submit</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                  </div>
            </form>

          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
  </div>
@endsection
