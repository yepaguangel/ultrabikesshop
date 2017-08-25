<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\producto;
use yepagu\category;
use Redirect;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //LIMIT (10)
        // $productos = \yepagu\producto::All()->take(10);

        //PAGINADO
        $productos = producto::paginate(10);
        Return view('admin.producto', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = category::all();
        $productos = producto::all();
        Return view('admin.productonuevo', compact('categorias','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \yepagu\producto::create([
            'referencia'=> $request['referencia'],
            'nombre'=> $request['nombre'],
            'precioalmacen'=> $request['precioalmacen'],
            'preciopublico'=> $request['preciopublico'],
            'linea'=> $request['linea'],
            'stock'=> $request['stock'],
            'marca'=> $request['marca'],
            'categoria'=> $request['categoria'],
            'tamano'=> $request['tamano'],
            'color'=> $request['color'],
            'oferta'=> $request['oferta'],
            'descripcion'=> $request['descripcion'],
            'anotaciones'=> $request['anotaciones'],
            'multimedia'=> $request['multimedia']
            ]);
        return Redirect::to('admin.producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = producto::find($id);
        $categorias = category::all();
        Return view('admin.productoeditar',['producto'=>$producto], compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
         $producto = producto::find($id);
         $producto->fill($request->all());
         $producto->save();
         Session::flash('messagge','Producto Modificado');
         return Redirect::to('/admin/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function filtro($idcategoria){
        $productos = producto::where('idcategoria',$idcategoria)->limit(10)->get();
        return view('admin.productofiltro', compact('productos'));
    }
}
