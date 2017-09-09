<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use yepagu\Flete;

class PrincipalController extends Controller
{
	public function index(){
		if (!session()->has('id')) {
            return Redirect::To('admin/login');
        }
		$fletes = Flete::all();
		return view('admin.index',['fletes'=>$fletes]); 
	}
}
   