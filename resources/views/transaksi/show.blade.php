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
                <div class="card-header">Penjualan</div>
                <div class="card-body">
                    <div class="form-group">
                             <label for="">Masukan Id </label>
                             <input type="text" name="id" value="{{$transaksi->id}}" class="form-control"  readonly>
                     </div>

                     <div class="form-group">
                             <label for="">Masukan Kode Produk</label>
                             <input type="text" name="kode_produk" value="{{$transaksi->kode_produk}}" class="form-control" readonly>
                     </div>




                     <div class="form-group">
                             <label for="">Masukan Nama Produk</label>
                             <input type="text" name="nama_produk" value="{{$transaksi->nama_produk}}" class="form-control" readonly>
                     </div>

                     <div class="form-group">
                             <label for="">Masukan Harga Beli</label>
                             <input type="text" name="harga_beli" value="{{$transaksi->harga_beli}}" class="form-control" readonly>
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
