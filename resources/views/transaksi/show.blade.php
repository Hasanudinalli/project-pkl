@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Obat</div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Id pembeli</label>
                                <input type="text" name="id" value="{{ $transaksi->id }}"
                                    class="form-control @error('id') is-invalid @enderror" disabled>
                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for=""> Total Harga </label>
                                <input type="text" name="total" value="{{ $transaksi->total }}"
                                    class="form-control @error('total') is-invalid @enderror" disabled>
                                @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Harga</label>
                                <input type="text" name="harga" value="{{ $transaksi->harga }}"
                                    class="form-control @error('harga') is-invalid @enderror" disabled>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <div class="form-group">

                                <a href="{{ route('transaksi.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
