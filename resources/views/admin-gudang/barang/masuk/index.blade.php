@extends('../layouts.app.v2-admin')

@section('content')
<div class="container d-flex">
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Barang Masuk</span>
            <span>{{ $total_masuk }}</span>
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
    <h1 class="p-2">List Barang Masuk</h1>
    <a href="{{ route('admin.gudang.masuk.create') }}"><button class="btn btn-success m-4">Create</button></a>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <!-- <th scope="col">Supplier</th> -->
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    @foreach ($barang_masuk as $masuk)
    <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $masuk->nama_barang }}</td>
        <td>{{ $masuk->jenis }}</td>
        <td>{{ $masuk->harga }}</td>
        <td>{{ $masuk->stok }}</td>
        <td>
            <div class="container d-flex">

                <!-- <button href="{{ route('admin.gudang.keluar.edit', $masuk->id) }}" class="btn btn-warning">edit</button> -->
                <!-- <button class="btn btn-primary">show</button> -->
                <a href="{{ route('admin.gudang.masuk.edit', $masuk->id) }}"><button class="btn btn-warning mx-2">edit</button></a>
                <!-- <button class="btn btn-danger">delete</button> -->
                <a href="{{ route('admin.gudang.masuk.show', $masuk->id) }}"
                class="block rounded-lg shadow-md mx-2">
                <button class="btn btn-primary">show</button>
                
                </a>
                <form action="{{ route('admin.gudang.masuk.destroy', $masuk->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger mx-2">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    <!-- <tr>
        <th scope="row">2</th>
        <td>Nama 2</td>
        <td>Jenis 2</td>
        <td>Rp. 250.000</td>
        <td>300</td>
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
        <td>Rp. 250.000</td>
        <td>300</td>
        <td>
            <button class="btn btn-warning">edit</button>
            <button class="btn btn-primary">show</button>
            <button class="btn btn-danger">delete</button>
        </td>
    </tr> -->
    
    </tbody>
</table>
@endsection