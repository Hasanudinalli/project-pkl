@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Transaksi</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Transaksi</div>
                <div class="card-body">
                    <div class="form-group">
                             <label for="">Masukan Id </label>
                             <input type="text" name="id" value="{{$transaksi->id}}" class="form-control"  readonly>
                     </div>
                     <div class="form-group">
                             <label for="">Masukan Kode Transaksi</label>
                             <input type="text" name="kode_transaksi" value="{{$transaksi->kode_transaksi}}" class="form-control" readonly>
                     </div>

                     <div class="form-group">
                             <label for="">Masukan Nama Pelanggan</label>
                             <input type="text" name="nama_pelanggan" value="{{$transaksi->nama_pelanggan}}" class="form-control" readonly>
                     </div>

                     <div class="form-group">
                             <label for="">Masukan Jenis Transaksi</label>
                             <input type="text" name="jenis_transaksi" value="{{$transaksi->jenis_transaksi}}" class="form-control" readonly>
                     </div>

                     <div class="form-group">
                             <label for="">Masukan Tanggal Transaksi</label>
                             <input type="text" name="tanggal_transaksi" value="{{$transaksi->tanggal_transaksi}}" class="form-control" readonly>
                     </div>
                        <div class="form-group">
                        <a href="{{route('transaksi.index')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
