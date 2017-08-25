<?php

namespace yepagu;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'products';

    public $timestamps = false;
    
    protected $fillable = ['referencia', 'nombre', 'precioalmacen', 'preciopublico', 'linea', 'stock', 'marca', 'idcategoria', 'tamano', 'color', 'oferta', 'descripcion','anotaciones', 'multimedia'];
    
}
