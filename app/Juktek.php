<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juktek extends Model
{
    protected $fillable = ['judul_juktek','kutipan','isi','foto'];
    protected $table = 'juktek';
}
