<?php

namespace yepagu;

use Illuminate\Database\Eloquent\Model;

class Flete extends Model
{
    protected $table = 'fletes';

    public $timestamps = false;
    
    protected $fillable = ['titulo', 'valor'];
    
}
