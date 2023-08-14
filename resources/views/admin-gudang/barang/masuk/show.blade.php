@extends('../layouts.app.v2-admin')

@section('content')
<!-- <div class="container d-flex">
    <h1>keluar</h1>
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Bahan Kemas</span>
            <span>100</span>
        </div>

    </div>
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Bahan Kemas</span>
            <span>100</span>
        </div>

    </div>
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Bahan Kemas</span>
            <span>100</span>
        </div>
    </div>
</div> -->

<table class="table text-light">
    <h1 class="m-4">Detail Barang</h1>
    <thead>
    <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <!-- <th scope="row">{{ $barang->id }}</th> -->
            <th scope="row">{{ $barang->nama_barang }}</th>
            <th scope="row">{{ $barang->harga }}</th>
            <th scope="row">{{ $barang->jenis }}</th>
            <th scope="row">{{ $barang->stok }}</th>
        </tr>
    <!-- <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr> -->
    </tbody>
</table>
@endsection