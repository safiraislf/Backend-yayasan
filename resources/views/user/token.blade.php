@extends('layout.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembayaran Infaq</h1>
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


        @if($dataExists)
          <div class="row">
            <div class="col-md-8 offset-md-2 mt-2 ">

              <div class="alert alert-info" role="alert">
                <h1>Menunggu Konfirmasi</h1>
              </div>
              {{-- @if ($confirm)
                <div class="alert alert-success" role="alert">
                  <h1>Konfirmasi Diterima</h1>
                </div>
                <a href="" class="btn btn-primary">Redirect</a>
              @else
                <div class="alert alert-info" role="alert">
                  <h1>Menunggu Konfirmasi</h1>
                </div>
              @endif --}}

            </div>
          </div>
        @else
          <div class="row">
            <!-- left column -->
            <div class="col-md-8 offset-md-2 mt-2">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Pembayaran Token</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/acc/setor" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <input name="status" type="hidden" class="form-control" value="No">

                    <div class="form-group">
                      <label for="exampleInputName">Nama Calon Siswa</label>
                      <input name="name" type="name" class="form-control" id="exampleInputName"
                        placeholder="Enter nama lengkap" value="{{ Auth::user()->name }}" readonly>
                      @error('name')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName">Tanggal Transaksi</label>
                      <input name="date" type="date" class="form-control" id="exampleInputDate"
                        placeholder="Enter Tanggal Transaksi">
                      @error('date')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label for="exampleInputName">Bukti Pembayaran</label>
                        <input name="image" type="file" class="form-control" id="exampleInputPhoto">
                        {{-- <input name="photo" type="file" class="form-control" id="exampleInputPhoto"> --}}
                        @error('image')
                          <small>{{ $message }}</small>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
            </div>
          </div>
        @endif

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
