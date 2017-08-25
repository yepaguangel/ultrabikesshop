<?php

namespace yepagu;

use Illuminate\Database\Eloquent\Model;

class Galleryimg extends Model
{
    protected $table = 'galeriaimg';

    public $timestamps = false;
    
    protected $fillable = ['claveimg', 'nomoriginal', 'descrip'];
    
}