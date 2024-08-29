@extends('layouts.template')
@section('judulh1','Admin - Dashboard')

@section('konten')

<div class="container-fluid">

    <!-- =========================================================== -->
    <h1 class="h3 mb-1">
        <strong>Produk</strong> Tercatat
    </h1>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-none">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Kartu</span>
                    <span class="info-box-number">None</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-sm">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Voucher</span>
                    <span class="info-box-number">Small</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow">
                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><A>Pulsa</A></span>
                    <span class="info-box-number">Regular</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-lg">
                <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Paket Nelpon</span>
                    <span class="info-box-number">Large</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- =========================================================== -->
    <div class="container-fluid p-0">
        <h1 class="h3 mb-1 mt-3">
            <strong>Transaksi</strong> Tercatat
        </h1>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body info-box-icon bg-primary">
                        <div class="row ">
                            <div class="col mt-0 ">
                                <h5 class="card-title-">
                                    Saldo Harian
                                </h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="truck"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">
                            Rp.
                        </h1>
                        <div class="mb-0">
                            <span class="text">
                                <i class="mdi mdi-arrow-bottom-right"></i>
                                -3.65%
                            </span>
                            <span class="text">Since <strong>Last Month</strong></span>
                        </div>
                    </div>
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body info-box-icon bg-success">
                        <div class="row ">
                            <div class="col mt-0 ">
                                <h5 class="card-title-">
                                    Saldo Bulanan
                                </h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="truck"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">
                            Rp.
                        </h1>
                        <div class="mb-0">
                            <span class="text">
                                <i class="mdi mdi-arrow-bottom-right"></i>
                                -3.65%
                            </span>
                            <span class="text">Since <strong>Last Month</strong></span>
                        </div>
                    </div>
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body info-box-icon bg-warning">
                        <div class="row ">
                            <div class="col mt-0 ">
                                <h5 class="card-title-">
                                    Saldo Tahunan
                                </h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="truck"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">
                            Rp.
                        </h1>
                        <div class="mb-0">
                            <span class="text">
                                <i class="mdi mdi-arrow-bottom-right"></i>
                                -3.65%
                            </span>
                            <span class="text">Since <strong>Last Month</strong></span>
                        </div>
                    </div>
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body info-box-icon bg-danger">
                        <div class="row ">
                            <div class="col mt-0 ">
                                <h5 class="card-title-">
                                    Saldo Akhir
                                </h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="truck"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">
                            Rp.
                        </h1>
                        <div class="mb-0">
                            <span class="text">
                                <i class="mdi mdi-arrow-bottom-right"></i>
                                -3.65%
                            </span>
                            <span class="text">Since <strong>Last Month</strong></span>
                        </div>
                    </div>
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>





        <!-- =========================================================== -->
        <h1 class="h3 mb-1 mt-3">
            <strong>Transaksi</strong> Terakhir
        </h1>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Total Transaksi</th>
                        
                    </tr>
                </thead>
                <tbody>

                    @foreach ($datatransaksi as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td>{{ $dt->total }}</td>
                        
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>




        <!-- =========================================================== -->
        <h1 class="h3 mb-1 mt-3">
            <strong>Administrasi</strong> Tercatat
        </h1>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">User</span>
                        <span class="info-box-number">{{$user}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-success">
                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pelanggan</span>
                        <span class="info-box-number">{{$pelanggan}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Produk</span>
                        <span class="info-box-number">{{$produk}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->


    @endsection