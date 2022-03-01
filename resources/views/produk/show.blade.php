@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Produk</div>
                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id) }}" method="post">
                            @csrf
                            @method('put')



                           <div class="form-group">
                                <label for=""> Kode Produk </label>
                                <input type="text" name="kode_produk" value="{{ $produk->kode_produk }}"
                                    class="form-control @error('kode_produk') is-invalid @enderror" disabled>
                                @error('kode_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Nama Produk</label>
                                <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}"
                                    class="form-control @error('nama_produk') is-invalid @enderror" disabled>
                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>



                            <div class="form-group">
                                <label for=""> Jenis Produk</label>
                                <input type="text" name="jenis_produk" value="{{ $produk->jenis_produk }}"
                                    class="form-control @error('jenis_produk') is-invalid @enderror" disabled>
                                @error('jenis_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                <label for=""> Stock</label>
                                <input type="text" name="stock" value="{{ $produk->stock }}"
                                    class="form-control @error('stock') is-invalid @enderror" disabled>
                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                <label for=""> Harga Barang</label>
                                <input type="text" name="harga_barang" value="{{ $produk->harga_barang }}"
                                    class="form-control @error('harga_barang') is-invalid @enderror" disabled>
                                @error('harga_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                            <div class="form-group">

                                <a href="{{ route('produk.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
