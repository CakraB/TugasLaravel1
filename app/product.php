<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{                                                                               
    protected $fillable = ['nama_produk','jumlah_produk','harga_produk'];
}
