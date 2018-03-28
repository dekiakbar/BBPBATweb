<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['nama_ikan','harga','kategori_id','ukuran','stok','foto','keterangan'];
    protected $table = 'shop';
}
