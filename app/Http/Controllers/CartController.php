<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\Producto;
use yepagu\Category;
use yepagu\Galleryimg;
use Session;
use Redirect;

class CartController extends Controller
{
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

	public function show(){
		$carrito = \Session::get('cart');
		return view('carrito', compact('carrito'));
	}

	public function add($id, $cant){
		$carrito = \Session::get('cart');
		$carrito[$id] = ['id'=>$id , 'cant'=> $cant];
		\Session::put('cart', var_dum($carrito));
		return Redirect::To('carrito');
	}

	public function destroy(){
		session()->forget('cart');
		session()->flush();
		return Redirect::To('carrito');
	}
}