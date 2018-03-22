<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    protected $fillable = ['judul_buku','pengarang','kategoriPerpus_id','tahun_terbit',''];
    protected $table = 'perpus';

    public function kategori()
    {
    	return $this->belongsTo('App\kategoriPerpus','kategoriPerpus_id');
    }
}
