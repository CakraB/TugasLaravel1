<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Laravel CRUD</title>
</head>
<body>
    <div class="contaiener">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1 class="mt-2">Tambah Produk</h1>
                    <form action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input type="etext" name="Product_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Produk">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Produk</label>
                        <input type="text" name="Product_Qty" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Harga Produk</label>
                            <input type="text" name="Product_Price" class="form-control" id="exampleInputPassword1" placeholder="Harga Produk">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>