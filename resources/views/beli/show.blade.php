@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Beli</div>
                    <div class="card-body">
                        <form action="{{ route('beli.update', $beli->id) }}" method="post">
                            @csrf
                            @method('put')


                            <div class="form-group">
                                <label for=""> Kode Produk</label>
                                <input type="text" name="kode_produk" value="{{ $beli->kode_produk }}"
                                    class="form-control @error('kode_produk') is-invalid @enderror" disabled>
                                @error('kode_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Nama Produk</label>
                                <input type="text" name="nama_produk" value="{{ $beli->nama_produk }}"
                                    class="form-control @error('nama_produk') is-invalid @enderror" disabled>
                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for=""> Jumlah Produk</label>
                                <input type="text" name="jumlah_produk" value="{{ $beli->jumlah_produk }}"
                                    class="form-control @error('jumlah_produk') is-invalid @enderror" disabled>
                                @error('jumlah_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Harga Produk</label>
                                <input type="text" name="harga_produk" value="{{ $beli->harga_produk }}"
                                    class="form-control @error('harga_produk') is-invalid @enderror" disabled>
                                @error('harga_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Total Harga</label>
                                <input type="text" name="total_harga" value="{{ $beli->total_harga }}"
                                    class="form-control @error('total_harga') is-invalid @enderror" disabled>
                                @error('total_harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                                <a href="{{ route('beli.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
