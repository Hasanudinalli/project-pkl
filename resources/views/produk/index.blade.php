@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Produk</h1>
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

                        <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Data Produk</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Jenis Produk</th>
                                    <th>Stock</th>
                                    <th>Harga Barang</th>

                                    <th>Aksi</th>

                                </tr>
                                @php $no=1; @endphp
                                @foreach ($produk as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kode_produk }}</td>
                                        <td>{{ $data->nama_produk }}</td>
                                        <td>{{ $data->jenis_produk }}</td>
                                        <td>{{ $data->stock }}</td>
                                        <td>{{ $data->harga_barang }}</td>

                                        <td>
                                            <form action="{{ route('produk.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('produk.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('produk.show', $data->id) }}"
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
