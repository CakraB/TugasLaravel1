<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>
      <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Daftar Produk</h1>
                <table class="table table-hover">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->nama_produk}}</td>
                            <td>{{$product->jumlah_produk}}</td>
                            <td>{{$product->harga_produk}}</td>
                            <td>
                              <form action="{{route('product.edit', $product->id)}}" method="GET" class="row">
                                <button type="submit" class="btn btn-success">Edit</button>
                              </form>
                            </td>
                            <td>
                              <form action="{{route('product.delete', $product->id)}}" method="POST" class="row">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        <a href="/">Create Todo</a>
      </div>
</body>
</html>