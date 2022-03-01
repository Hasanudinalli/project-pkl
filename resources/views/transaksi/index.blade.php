@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Laporan Penjualan</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(".delete-confirm").click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Data Produk</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Transaksi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jenis transaksi</th>
                                    <th>tanggal_transaksi</th>

                                    <th>Aksi</th>

                                </tr>
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
                                            <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('transaksi.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('transaksi.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger delete-confirm">Delete</button>

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
