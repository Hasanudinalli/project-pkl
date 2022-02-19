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
                                <label for="">Masukan Kode Konsumen</label>
                                <input type="text" name="kode_konsumen" value="{{ $beli->kode_konsumen}}"
                                    class="form-control @error('kode_konsumen') is-invalid @enderror">
                                @error('kode_konsumen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                            <div class="form-group">
                                <label for="">Masukan Kode Produk</label>
                                <input type="text" name="kode_produk" value="{{ $beli->kode_produk }}"
                                    class="form-control @error('kode_produk') is-invalid @enderror">
                                @error('kode_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Kode Transaksi</label>
                                <input type="text" name="kode_transaksi" value="{{ $beli->kode_transaksi }}"
                                    class="form-control @error('kode_transaksi') is-invalid @enderror">
                                @error('kode_transaksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Kode Pelanggan</label>
                                <input type="text" name="kode_pelanggan" value="{{ $beli->kode_pelanggan }}"
                                    class="form-control @error('kode_pelanggan') is-invalid @enderror">
                                @error('kode_pelanggan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Jumlah Produk</label>
                                <input type="text" name="jumlah_produk" value="{{ $beli->jumlah_produk }}"
                                    class="form-control @error('jumlah_produk') is-invalid @enderror">
                                @error('jumlah_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Total Harga</label>
                                <input type="text" name="total_harga" value="{{ $beli->total_harga }}"
                                    class="form-control @error('total_harga') is-invalid @enderror">
                                @error('total_harga')
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
