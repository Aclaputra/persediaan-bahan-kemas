@extends('../layouts.app.v2-admin')

@section('content')
<div class="container m-4">
    <!-- <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Bahan Kemas</span>
            <span>100</span>
        </div>

    </div> -->
    
    <form action="{{ route('admin.gudang.masuk.update', $barang->id) }}" class="bg-secondary rounded p-4" method="POST">
      @csrf  
      @method('PUT')
      <h1>Edit Barang Masuk</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis</label>
        <input type="text" name="jenis" value="{{ $barang->jenis }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga</label>
        <input type="text" name="harga" value="{{ $barang->harga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <!-- <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Supplier</label>
        
      </div> -->
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Stok</label>
        <input type="text" name="stok" value="{{ $barang->stok }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection