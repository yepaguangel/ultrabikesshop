<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\Galleryimg;
use Redirect;

class UploadimageController extends Controller
{
    public function index(){
        $galimagenes = Galleryimg::paginate(20);
    	return view('admin.galeriaimg', compact('galimagenes'));
    }

    public function store(Request $request){
    	$path = public_path().'/filegallery/';
        $files = $request->file('file');
        foreach($files as $file){

        	//ADIGNAMOS UN CODIGO UNICO
        	$codunique = uniqid();
        	//CAPTURAMOS EXTENSION DEL ARCHIVO
        	$fileExt = $file->getClientOriginalExtension();
        	//CAPTURAMOS EL NOMBRE REAL DEL ARCHIVO
            $fileName = $file->getClientOriginalName();
            //RENOMBRAMOS EL ARCHIVO
            $fileRename = $codunique . '.' . $fileExt;
            //REDIEMNSIONAMOS LA IMAGEN
            //$file->resize(300,300);
            /*
            COPIAMOS O SUBIMOS EL ARCHIVO EN LA RUTA ESPECIFICA
            	SI EL ARCHIVO FUE COIADO O CARGADO CORRECTAMENTE, GUARDAMOS EL REGISTRO
            */
           
            if($file->move($path, $fileRename))
            {
            	\yepagu\Galleryimg::create([
            			'claveimg' => $codunique,
            			'extension' => $fileExt,
            			'nomoriginal' => $fileName
            		]);
            }else{
                echo ':(';
            }
        }
    }

    public function update($id, Request $request)
    {
        $galleryimg = Galleryimg::find($id);
        $galleryimg->fill($request->all());
        $galleryimg->save();
        return response()->json([
                "msg"=>'ok'
            ]);
    }

    public function destroy($id){
        //CONSULTAMOS PARA SABER EL IDUNICO
        $imagen = Galleryimg::find($id);
        $fileImage = 'filegallery/' . $imagen->claveimg . '.' . $imagen->extension;
        //BSUCAMOS IMAGEN PARA ELIMINAR
        if (file_exists($fileImage))
        {
            unlink($fileImage);
            //BORRAMOS REGISTRO EN BD
            \yepagu\Galleryimg::destroy($id);
        }

        Return Redirect::to('admin/galeriaimg');
    }
}
