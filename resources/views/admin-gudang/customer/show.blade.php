@extends('../layouts.app.v2-admin')

@section('content')

<table class="table text-light">
    <h1 class="m-4">Detail Customer</h1>
    <thead>
    <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Detail</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <!-- <th scope="row">1</th> -->
        <td>{{ $customer->nama }}</td>
        <td>{{ $customer->alamat }}</td>
        <td>{{ $customer->detail }}</td>
    </tr>
    
    </tbody>
</table>
@endsection