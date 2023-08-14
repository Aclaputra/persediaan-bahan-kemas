@extends('../layouts.app.v2-admin')

@section('content')
<div class="container m-4">
    <!-- <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Bahan Kemas</span>
            <span>100</span>
        </div>

    </div> -->
    
    <form action="{{ route('admin.gudang.customer.store')}}" method="POST" class="bg-secondary rounded p-4" >
      @csrf  
      <h1>Input customer</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Detail</label>
        <input type="text" name="detail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection