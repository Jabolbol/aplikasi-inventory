<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Inventory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
 
<div class="container">
    <div class="clear"style="padding-top: 30px"></div>
    <h2>Aplikasi Inventory</h2>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
            <form action="/search" method="GET">
                <input type="text" name="search" placeholder="Cari Barang .." value="{{ old('search') }}">
                <input type="submit" value="CARI">
            </form>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('create-inventory') }}"> Tambah Inventory</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama barang</th>
            <th>Kode barang</th>
            <th>Jumlah barang</th>
            <th>Tanggal</th>
            <th width="200px"  class="text-center">Action</th>
        </tr>
        @foreach ($inventories as $inventory)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $inventory->nama_barang }}</td>
            <td>{{ $inventory->kode_barang }}</td>
            <td>{{ $inventory->jumlah_barang }}</td>
            <td>{{ $inventory->created_at }}</td>
            <td class="text-center"><a class="btn btn-primary btn-sm" href="{{ route('edit-inventory',$inventory->id) }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
 
</body>
</html>