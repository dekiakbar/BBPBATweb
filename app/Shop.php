<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['nama_ikan','harga','jenis','ukuran','stok','foto','keterangan'];
    protected $table = 'shop';
}
