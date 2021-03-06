<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\Producto;
use yepagu\Category;
use Redirect;
use Session;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (!session()->has('id')) {
            return Redirect::To('admin/login');
        }

        //PAGINADO
        $categorias = Category::all();
        Return view('admin.categoria', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *

     
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        \yepagu\Category::create([
            'nombrecategoria'=> $request['nombrecategoria']
            ]);
        return redirect('admin/categoria')->with('message', 'store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $categoria = Category::find($id);
        $categoria->fill($request->all());
        $categoria->save();
        Session::flash('messagge','Producto Modificado');
        return Redirect::to('/admin/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \yepagu\Category::destroy($id);
        Return Redirect::to('admin/categoria');
    }
}
