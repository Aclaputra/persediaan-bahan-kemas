@extends('../layouts.app.v2-admin')

@section('content')
<div class="container d-flex">
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Barang Keluar</span>
            <span>60</span>
        </div>

    </div>
    <!-- <div class="container bg-secondary rounded row m-4">
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
    </div> -->
</div>

<table class="table text-light">
    <h1 class="p-2">List Barang Keluar</h1>
    <a href="{{ route('admin.gudang.keluar.create') }}"><button class="btn btn-success m-4">Create</button></a>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Nama 1</td>
        <td>Jenis 1</td>
        <td>Rp. 50.000</td>
        <td>20</td>
        <td>
            <button class="btn btn-warning">edit</button>
            <button class="btn btn-primary">show</button>
            <button class="btn btn-danger">delete</button>
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Nama 2</td>
        <td>Jenis 2</td>
        <td>Rp. 50.000</td>
        <td>20</td>
        <td>
            <button class="btn btn-warning">edit</button>
            <button class="btn btn-primary">show</button>
            <button class="btn btn-danger">delete</button>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Nama 3</td>
        <td>Jenis 3</td>
        <td>Rp. 50.000</td>
        <td>20</td>
        <td>
            <button class="btn btn-warning">edit</button>
            <button class="btn btn-primary">show</button>
            <button class="btn btn-danger">delete</button>
        </td>
    </tr>
    
    </tbody>
</table>
@endsection