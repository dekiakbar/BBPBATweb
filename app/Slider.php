<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['judul','foto','deksripsi'];
    protected $table = 'slider';
}
