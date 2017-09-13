<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\Producto;
use yepagu\Category;
use yepagu\Galleryimg;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ 
        $productos = Producto::inRandomOrder()->limit(8)->get();
        $masvendidos = Producto::inRandomOrder()->limit(8)->get();
        $categoriaLimit = Category::limit(6)->get();
        print_r($productos);
        return view('index', compact('productos','masvendidos', 'categoriaLimit')); 
    }

    public function detalleproducto($id){ 
        $producto = producto::find($id);
        $imagenesProd = Galleryimg::whereIn('id', explode(',', $producto->imagen) )->get();
        return view('detalleproducto',compact('producto','imagenesProd')); 
    }
    
    public function indexdemo()
    {
        return view('indexdemo');
    }


    public function ofertas()
    {
        return view('ofertas');
    }

    public function conocenos()
    {
        return view('conocenos');
    }

    public function contactenos(){
        return view('contactenos');
    }

    public function micuenta(){
        return view('micuenta');
    }

    public function login(){
        return view('login');
    }

    public function carrito(){
        return view('carrito');
    }

    public function registro(){
        return view('registro');
    }
/*
    public function (){
    	return view('detalle-producto');
    }

    public function ofertas(){
    	return view('ofertas');
    }

    public function conocemas(){
    	return view('conoce-mas');
    }

    

    public function micuenta(){
    	return view('micuenta');
    }

    public function carrito(){
    	return view('carrito');
    }

    public function checkout(){
    	return view('checkout');
    }

    public function adminpanel(){
    	return view('adminpanel');
    }

    public function categorias(){
    	return view('categorias');
    }*/
}
