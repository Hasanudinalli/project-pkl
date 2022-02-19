@extends('adminlte::page')
@section('content_header')
@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#producttransaksi').DataTable();
            });
    </script>
    <script src="js/sweetalert2.js"></script>
    <script src="{{asset('js/delete.js')}}"></script>
@endsection
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Obat</h1>
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
                    Obat
                    <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Obat</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>ID </th>
                                    <th>Kode Obat</th>
                                    <th>Nama Obat</th>
                                    <th>Jenis Obat</th>
                                    <th>Tanggal Obat</th>

                                </tr>
                            </thead>
                            <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($transaksi as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->kode_transaksi}}</td>
                                        <td>{{$data->nama_pelanggan}}</td>
                                        <td>{{$data->jenis_transaksi}}</td>
                                        <td>{{$data->tanggal_transaksi}}</td>

                                        <td>
                                            <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-outline-info">Edit</a><br>
                                                <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-outline-warning">Show</a><br>
                                                <button type="submit" class="btn btn-outline-danger delete-confirm">Delete</button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{asset('Datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection
