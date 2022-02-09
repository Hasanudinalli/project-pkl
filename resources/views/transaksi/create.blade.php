@extends('adminlte::page')
@section('header')
<div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-12">
                 <h1 class="m-0">Transaksi</h1>
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
                 <form action="{{route('transaksi.store')}}" method="post">
                       @csrf
                       <div class="form-group">
                             <label for="">Masukan Id</label>
                             <input type="text" name="id" class="form-control @error('id') is-invalid @enderror">
                       @error('id')
                             <span class="invalid-feedback" role="alert">
                                 <strong>Wajib Diisi</strong>
                             </span>
                         @enderror
                     </div>
                     <div class="form-group">
                             <label for="">Masukan Total Harga</label>
                             <input type="text" name="total_harga" class="form-control @error('total_harga') is-invalid @enderror">
                       @error('total_harga')
                             <span class="invalid-feedback" role="alert">
                                 <strong>Wajib Diisi</strong>
                             </span>
                         @enderror
                     </div>

                     <div class="form-group">
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                     </div>
             </form>
             </div>
         </div>
     </div>
</div>
</div>
@endsection
