@extends('../layouts.app.v2-admin')

@section('content')
<div class="container d-flex">
    <div class="container bg-secondary rounded row m-4">
        <div class="p-2 row">
            <span class="fw-bold fs-5">Total Suppliers</span>
            <span>900</span>
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
    <h1 class="p-2">List Suppliers</h1>
    <a href="{{ route('admin.gudang.supplier.create') }}"><button class="btn btn-success m-4">Create</button></a>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Detail</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <!-- foreach supplier -->
        <?php $i=1; ?>
    @foreach ($supplier as $data) 
    <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $data->nama_supplier }}</td>
        <td>{{ $data->detail }}</td>
        <td>
            <div class="container d-flex">
                <a href="{{ route('admin.gudang.supplier.edit', $data->id) }}"><button class="btn btn-warning mx-2">edit</button></a>
                <!-- <button class="btn btn-danger">delete</button> -->
            <a class="bg-dark" href="{{ route('admin.gudang.supplier.show', $data->id) }}"
                class="block rounded-lg shadow-md">
                <button class="btn btn-primary mx-2">show</button>
                
                </a>
                
                <form action="{{ route('admin.gudang.supplier.destroy', $data->id) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger mx-2">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    
    </tbody>
</table>
@endsection