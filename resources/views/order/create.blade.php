@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Order</div>
                    <div class="card-body">
                        <form action="{{ route('obat.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan id transaksi</label>
                                <input type="text" name="id_transaksi"
                                    class="form-control @error('id_transaksi') is-invalid @enderror">
                                @error('id_transaksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan id karyawan</label>
                                <input type="text" name="id_karyawan" class="form-control @error('id_karyawan') is-invalid @enderror">
                                @error('id_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan id obat</label>
                                <input type="text" name="id_obat" class="form-control @error('id_obat') is-invalid @enderror">
                                @error('id_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan jumlah obat</label>
                                <input type="text" name="jumlah_obat" class="form-control @error('jumlah_obat') is-invalid @enderror">
                                @error('jumlah_obat')
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
