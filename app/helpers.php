<?php

use yepagu\Galleryimg;

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
