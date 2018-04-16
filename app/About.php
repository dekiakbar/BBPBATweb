<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['visi','misi','foto','tentang'];
    protected $table = 'about';
}
