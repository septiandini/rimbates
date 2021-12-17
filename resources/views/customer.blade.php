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
            <form action="/customer/save" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>:</td>
                        <td><input type="text" name="contact"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Diskon</td>
                        <td>:</td>
                        <td><input type="number" name="diskon"></td>
                    </tr>
                    <tr>
                        <td>Tipe Diskon</td>
                        <td>:</td>
                        <td>
                            <select name="tipe">
                                <option value="persen">Persen</option>
                                <option value="fix">Fix</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>KTP</td>
                        <td>:</td>
                        <td><input type="file" name="file"></td>
                    </tr>
                </table>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </form>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id Customer</th>
                        <th>Nama</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Diskon</th>
                        <th>Tipe</th>
                        <th>KTP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer as $c)
                    <tr>
                        <td>{{ $c->id_cust }}</td>
                        <td>{{ $c->nama_cust }}</td>
                        <td>{{ $c->contact }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->alamat }}</td>
                        <td>{{ $c->diskon }}</td>
                        <td>{{ $c->tipe_diskon }}</td>
                        <td><img width="150px" src="{{ url('/data_customer/'.$c->ktp) }}"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>