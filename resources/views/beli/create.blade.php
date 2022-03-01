@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Beli</div>
                    <div class="card-body">
                        <form action="{{ route('beli.store') }}" method="post">
                            @csrf

                            {{-- <div class="form-group">
                                <label for="">Masukan Id </label>
                                <input type="text" name="id" class="form-control @error('id') is-invalid @enderror">
                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            <div class="form-group">
                                <label for="">Masukan Kode Konsumen </label>
                                <input type="text" name="kode_konsumen" class="form-control @error('kode_konsumen') is-invalid @enderror">
                                @error('kode_konsumen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Kode Produk </label>
                                <input type="text" name="kode_produk" class="form-control @error('kode_produk') is-invalid @enderror">
                                @error('kode_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="">Masukan Jumlah Produk</label>
                                <input type="text" name="jumlah_produk"
                                    class="form-control @error('jumlah_produk') is-invalid @enderror">
                                @error('jumlah_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Harga Barang</label>
                                <select name="kode_produk" class="form-control @error('kode_produk') is-invalid @enderror">
                                    @foreach ($produk as $data)
                                        <option value="{{ $data->id }}">{{ $data->harga_barang }}</option>
                                    @endforeach
                                </select>
                                @error('kode_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                             <div class="form-group">
                                <label for="">Masukan Total Harga</label>
                                <input type="text" name="total_harga"
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

@section('css')

@endsection

@section('js')

@endsection
