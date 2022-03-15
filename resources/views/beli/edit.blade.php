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
                                <label for="">Masukan Harga Produk</label>
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
