<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\producto;
use Maatwebsite\Excel\Facades\Excel;
use Redirect;

ini_set('max_execution_time',180);

class FilesController extends Controller
{

	public function store(Request $request){
		//obtenemos el campo file definido en el formulario
       $file = $request->file('file');
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put('excel.csv',  \File::get($file));
 		
       $contador = 0;
 		if(( $handle = fopen(public_path('admin/files/excel.csv'), 'r')) !== FALSE){
 			while(( $data = fgetcsv($handle, 1000, ';')) !== FALSe )
 			{
 				if(is_numeric($data[7])) 
 				{
 					if($data[7] > 8 )
 					{
	 					\yepagu\producto::create([
				            'referencia'=> $data[3],
				            'nombre'=> utf8_encode($data[4]),
				            'precioalmacen'=> $data[9],
				            'preciopublico'=> $data[10],
				            'linea'=> $data[1],
				            'stock'=> $data[7],
				            'marca'=> $data[0],
				            'categoria'=> 0,
				            'tamano'=> '',
				            'color'=> '',
				            'oferta'=> 0,
				            'descripcion'=> utf8_encode($data[4]),
				            'anotaciones'=> '',
				            'multimedia'=> ''
				        ]);
				        $contador++;
	 				}
 				}
 			}
 			fclose($handle);
 		}

 		return Redirect::To('/admin/principal');
 		//return view('admin.principal',compact('contador'));
	}

	public function upload(Request $request){
		echo 'sddfdf';
		$file = Input::file('file');
		$secureName = hash::make($file=getClientOriginalName());
		$dir = public_path().'fileimage';
		$subir=$file->move($dir, $secureName.'.'.$file->guessExtension());
		return json();
	} 
}