@extends('../layouts.app.v2-admin')
@section('content')
<div class="container d-flex">
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Barang Masuk</span>
            <span>{{ $total_masuk }}</span>
        </div>

    </div>
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Barang Keluar</span>
            <span>{{ $total_keluar }}</span>
        </div>

    </div>
    <!-- <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Stok</span>
            <span></span>
        </div>
    </div> -->
</div>

<table class="table text-light">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Stok</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    
    <?php 
        $i=1; 
        $total_stok = 0;
    ?>
    @foreach($barang_masuk as $data)
    <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $data->nama_barang }}</td>
        <td>{{ $data->stok }}</td>
        <td>
            <?php
                if ($data->stok >= 300) {
                    echo "Stok Tersedia";
                } else {
                    echo "Stok Kurang";
                }
            ?>
        </td>
    </tr>
    <?php $total_stok += $data->stok ?>
    @endforeach
    <tr>
        <th>Total Stok</th>
        <th></th>
        <th></th>
        <th>{{ $total_stok }}</th>
    </tr>
    </tbody>
</table>
@endsection