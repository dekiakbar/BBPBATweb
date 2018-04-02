<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkl extends Model
{
    protected $fillable = [
    	'nama_kegiatan','nama_lengkap','email','ttl','alamat','no','nama_instansi',
    	'alamat_instansi','alamat_tinggal','judul_kegiatan','mulai','selesai'
    ];

    protected $table = 'pkl';
}
