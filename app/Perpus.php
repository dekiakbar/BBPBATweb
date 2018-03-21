<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    protected $fillable = ['judul_buku','penerbit','kategori_id','tahun_terbit',''];
    protected $table = 'perpus';

    public function kategori()
    {
    	return $this->hasMany('App\kategoriPerpus');
    }
}
