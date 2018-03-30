<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juktek extends Model
{
    protected $fillable = ['judul_juktek','slug','kutipan','file','foto'];
    protected $table = 'juktek';
}
