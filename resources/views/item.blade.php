<!<!doctype html>
<html>
    <head>
        <title>Aplikasi Inventory Penjualan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/item">Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/customer">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sales</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
            </div>
            @endif
            <form action="/item/save" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Unit</td>
                        <td>:</td>
                        <td>
                            <select name="unit">
                                <option value="kg">kg</option>
                                <option value="pcs">pcs</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td><input type="number" name="stok"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><input type="number" name="harga"></td>
                    </tr>
                    <tr>
                        <td>Barang</td>
                        <td>:</td>
                        <td><input type="file" name="file"></td>
                    </tr>
                </table>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </form>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id Item</th>
                        <th>Nama</th>
                        <th>Unit</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Barang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itemBarang as $ib)
                    <tr>
                        <td>{{ $ib->id_item }}</td>
                        <td>{{ $ib->nama }}</td>
                        <td>{{ $ib->unit }}</td>
                        <td>{{ $ib->stok }}</td>
                        <td>{{ $ib->harga }}</td>
                        <td><img width="150px" src="{{ url('/data_item/'.$ib->barang) }}"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>