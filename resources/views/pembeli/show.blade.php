@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pembeli</div>
                    <div class="card-body">
                        <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Id </label>
                                <input type="text" name="id" value="{{ $pembeli->id }}"
                                    class="form-control @error('id') is-invalid @enderror" disabled>
                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for=""> Nama Pembeli </label>
                                <input type="text" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}"
                                    class="form-control @error('nama_pembeli') is-invalid @enderror" disabled>
                                @error('nama_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Alamat</label>
                                <input type="text" name="alamat" value="{{ $pembeli->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror" disabled>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <div class="form-group">

                            <div class="form-group">
                                <label for=""> Usia</label>
                                <input type="text" name="usia" value="{{ $pembeli->usia }}"
                                    class="form-control @error('usia') is-invalid @enderror" disabled>
                                @error('usia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <div class="form-group">

                                <a href="{{ route('pembeli.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
