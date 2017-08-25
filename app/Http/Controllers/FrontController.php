<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('index');
    }

    public function detalleproducto()
    {
        return view('detalleproducto');
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
    public function detalleproducto(){
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
