<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['nama_ikan','harga','kategori_id','slug','ukuran','stok','foto','keterangan'];
    protected $table = 'shop';

    public function kategori()
    {
    	return $this->belongsTo('App\Kshop');
    }
}
