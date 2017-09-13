<?php

use yepagu\Producto;
use yepagu\Category;
use yepagu\Galleryimg;

function getProduct($id){
	$producto = Producto::find($id);
	return $producto;
}

function getImage($image)
{
	if($image !== '' or $image !== NULL){
        $arrayimg = explode(',', $image);
        $imgGalbd = Galleryimg::find($arrayimg[0]);
    }else{
        $imgGalbd = array('id'=>'0', 'claveimg'=>'sinimagen', 'extension'=>'jpg', 'descrip'=>'Sin Imagen');
    }
	return $imgGalbd;
}

function verArray($item, $array){
	$categorias = explode(',', $array);
	if(in_array($item->id, $categorias)){ 
		return true; 
	}else{
		return false;
	}
	
}
