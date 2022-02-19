@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pelanggan</div>
                    <div class="card-body">
                        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="">Masukan Id</label>
                                <input type="text" name="id" value="{{ $pelanggan->id }}"
                                    class="form-control @error('id') is-invalid @enderror">
                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Kode Pelanggan</label>
                                <input type="text" name="kode_pelanggan" value="{{ $pelanggan->kode_pelanggan }}"
                                    class="form-control @error('kode_pelanggan') is-invalid @enderror">
                                @error('kode_pelanggan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}"
                                    class="form-control @error('nama_pelanggan') is-invalid @enderror">
                                @error('nama_pelanggan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan jumlah bayar</label>
                                <input type="text" name="jumlah_bayar" value="{{ $pelanggan->jumlah_bayar }}"
                                    class="form-control @error('jumlah_bayar') is-invalid @enderror">
                                @error('jumlah_bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="{{ $pelanggan->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
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