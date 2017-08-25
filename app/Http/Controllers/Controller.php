<?php

namespace yepagu\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('index');
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
}
