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
                        <a class="nav-link" href="/sales">Sales</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <form action="#" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td>Customer</td>
                        <td>:</td>
                        <td>
                            <select id="customer" name="customer">
                                <option>Pilih Customer</option>
                                @foreach($customer as $c)
                                <option value="{{$c->id_cust}}">{{$c->nama_cust}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Item</td>
                        <td>:</td>
                        <td>
                            <select id="item" name="item">
                                <option>Pilih Barang</option>
                                @foreach($item as $i)
                                <option value="{{$i->id_item}}">{{$i->nama}} - {{$i->stok}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kuantitas</td>
                        <td>:</td>
                        <td><input name="qty" type="number"></td>
                    </tr>
                    <tr>
                        <td>Total Diskon</td>
                        <td>:</td>
                        <td>
                            <input id="diskon" name="diskon" type="text" value="" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td><input id="harga" name="harga" type="text" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>:</td>
                        <td><input id="bayar" name="bayar" type="text" value="" readonly></td>
                    </tr>
                </table>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </form>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Transaksi</th>
                        <th>Tanggal</th>
                        <th>Customer</th>
                        <th>Item</th>
                        <th>Kuantitas</th>
                        <th>Diskon</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </body>
    <script>
        var arrCust = 
    </script>
</html>