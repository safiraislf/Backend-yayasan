@extends('layout.mainadmin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah User</h1>
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
            <form action="\min\update" method="POST">
                {{-- {{route('min.update',['id' => $data->id])}} --}}
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
                        <form >
                          <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama</label>
                                <input  name="name"type="name" class="form-control" id="exampleInputNama" placeholder="Enter nama">
                                @error('name')
                                <small>{{ $message }}</small>
                              @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputNama">Tanggal Observasi</label>
                                <input  name="date"type="date" class="form-control" id="exampleInputTanggal" placeholder="Enter tanggal observasi">
                                @error('date')
                                <small>{{ $message }}</small>
                              @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputStatus">Status</label>
                                <select class="form-control select2" style="width: 100%;" name="status" type="status" class="form-control" id="exampleInputStatus" >
                                    <option selected="selected">Belum</option>
                                    <option>Sudah</option>
                                  </select>
                                  @error('status')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputStatus">Final Observasi</label>
                                <select class="form-control select2" style="width: 100%;" name="final" type="final" class="form-control" id="exampleInputStatus" >
                                    <option selected="selected">Belum</option>
                                    <option>Diterima</option>
                                    <option>Tidak Diterima</option>
                                  </select>
                                  @error('final')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                            <div class="form-group">

                            </div>
                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary" action="">Submit</button>
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
