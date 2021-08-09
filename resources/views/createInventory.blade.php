<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Inventory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
 
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tambah Inventory</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('store-inventory') }}" method="POST">
        @csrf
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang:</strong>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Barang:</strong>
                    <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Barang:</strong>
                    <input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    </form>
</div>
 
</body>
</html>