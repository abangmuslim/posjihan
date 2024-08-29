@extends('layouts.template')
@section('judulh1','Admin - Customer')
@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your
        input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Customer</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('pelanggan.update',$pelanggan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="name" name="nama" placeholder="" value="{{ $pelanggan->nama }}">
                </div>
                <!-- <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $pelanggan->email }}">
                </div> -->
                <div class="form-group">
                    <label for="nohp">No Telepon</label>
                    <input type="number" class="form-control" id="nohp" name="nohp" value="{{ $pelanggan->nohp }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" class=" form-control" rows="{{ $pelanggan->alamat }}"></textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection