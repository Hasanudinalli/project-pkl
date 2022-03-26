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
                 <div class="card-header">Beli</div>
                 <div class="card-body">
                 <form action="{{route('transaksi.store')}}" method="post">
                       @csrf


                     {{-- <div class="form-group">
                                <label for="">Masukan Kode Produk</label>
                                <select name="kode_produk" class="form-control @error('kode_produk') is-invalid @enderror">
                                    @foreach ($produk as $data)
                                        <option value="{{ $data->id }}">{{ $data->kode_produk }}</option>
                                    @endforeach
                                </select>
                                @error('kode_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}





                     <div class="form-group">
                                <label for="">Masukan Nama Produk</label>
                                <select name="kode_produk" class="form-control @error('kode_produk') is-invalid @enderror">
                                    @foreach ($produk as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_produk }}</option>
                                    @endforeach
                                </select>
                                @error('kode_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Harga Beli</label>
                                <input type="text" name="harga_beli" class="form-control @error('harga_beli') is-invalid @enderror">
                                @error('harga_beli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
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
