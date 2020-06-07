<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function store(Request $request) { 
        product::create ([
            'nama_produk' => $request->Product_Name, 
            'jumlah_produk' => $request->Product_Qty, 
            'harga_produk'=> $request->Product_Price
        ]);
        return redirect('/products');
    }

    public function edit($id) {
        $product = product::findOrFail($id); //sebuah method dari laravel buat ambil single data
        return view('edit', compact('product')); //cari data base on id lalu di lempar ke file edit
    }

    public function update(Request $request, $id) {
        product::findOrFail($id)->update([
            'nama_produk' => $request->Product_Name, 
            'jumlah_produk' => $request->Product_Qty, 
            'harga_produk'=> $request->Product_Price
        ]);
        return redirect('/products');
    }

    public function getProducts() {
        $products = product::all();
        return view('products', compact('products'));
    }

    public function delete($id) {
        product::destroy($id);
        return back();
    }
}
