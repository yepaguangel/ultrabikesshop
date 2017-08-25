<?php

namespace yepagu;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorias';

    public $timestamps = false;
    
    protected $fillable = ['nombrecategoria'];
    
}
