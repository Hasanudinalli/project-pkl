@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Beli</h1>
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
                    <div class="card-header">

                        <a href="{{ route('beli.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Data Beli</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Konsumen</th>
                                    <th>Kode Produk</th>

                                    <th>Jumlah Produk</th>
                                    <th>Harga Barang</th>
                                    <th>Total Harga</th>




                                    <th>Aksi</th>

                                </tr>
                                @php $no=1; @endphp
                                @foreach ($beli as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kode_konsumen }}</td>
                                        <td>{{ $data->kode_produk }}</td>

                                        <td>{{ $data->jumlah_produk}}</td>
                                        <td>{{ $data->produk->harga_barang }}</td>
                                        <td>{{ $data->total_harga}}</td>




                                        <td>
                                            <form action="{{ route('beli.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('beli.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('beli.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
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
