<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = ['shop_id','jumlah','nama','alamat','email','pos','hp','status'];
    protected $table = 'pesan';

    public function shop()
    {
    	return $this->belongsTo('App\Shop');
    }
}
