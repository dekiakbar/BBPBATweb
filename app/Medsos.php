<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medsos extends Model
{
    protected $fillable = ['fb','tweet','google','ig'];
    protected $table = 'medsos'; 
}
