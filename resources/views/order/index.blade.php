@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Order</h1>
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

                        <a href="{{ route('order.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Data Order</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>id transaksi</th>
                                    <th>id karyawan</th>
                                    <th>id obat</th>
                                    <th>jumlah obat</th>
                                    
                                    <th>Aksi</th>

                                </tr>
                                @php $no=1; @endphp
                                @foreach ($order as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->id_transaksi }}</td>
                                        <td>{{ $data->id_karyawan }}</td>
                                        <td>{{ $data->id_obat }}</td>
                                        <td>{{ $data->jumlah_obat }}</td>
                                        <td>
                                            <form action="{{ route('order.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('order.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('order.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                                
                                    </tr>
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
