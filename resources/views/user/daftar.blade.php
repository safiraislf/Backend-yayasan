@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 offset-md-2 mt-2">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Pendaftaran</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/acc/stores" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputName">Nama Lengkap Anak</label>
                      <input name="name" type="name" class="form-control" id="exampleInputName"  placeholder="Enter nama lengkap anak">
                      @error('name')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputParents">Nama Orang Tua/Wali</label>
                        <input name="parents" type="parents" class="form-control" id="exampleInputParents"  placeholder="Enter nama orang tua/wali">
                        @error('parents')
                        <small>{{ $message }}</small>
                      @enderror
                      </div>
                    <div class="form-group">
                      <label for="exampleInputGender">Jenis Kelamin</label>
                      <select class="form-control select2" style="width: 100%;" name="gender" type="gender" class="form-control" id="exampleInputGender" >
                          <option selected="selected">Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                        @error('gender')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputLahir">Tempat, Tanggal Lahir</label>
                      <input name="lahir" type="lahir" class="form-control" id="exampleInputLahir" placeholder="Input Tempat, Tanggal Lahir">
                      @error('lahir')
                      <small>{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputJenjang">Pilih Jenjang</label>
                        <select class="form-control select2" style="width: 100%;" name="jenjang" type="jenjang" class="form-control" id="exampleInputJenjang" >
                          <option selected="selected">TC = usia 2-3 tahun</option>
                          <option>KB = usia 3-4 tahun</option>
                          <option>TK A = usia 4-5 tahun</option>
                        </select>
                        @error('jenjang')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <input name="alamat" type="alamat" class="form-control" id="exampleInputAlamat"  placeholder="Masukkan Nama Event">
                        @error('alamat')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTelepon">Nomor Telepon</label>
                        <input name="telepon" type="telepon" class="form-control" id="exampleInputTelepon"  placeholder="Masukkan Nomor Telepon">
                        @error('telepon')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputBerkas">Upload Berkas *pdf</label>
                            <input name="berkas" type="file" class="form-control" id="exampleInputBerkas">
                            @error('berkas')
                            <small>{{ $message }}</small>
                          @enderror
                          </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </div>
                  </div>
                </div>
                </div>
                  <!-- /.card-body -->

                </form>
              </div>
              <!-- /.card -->

            </div>
            <!--/.col (left) -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

