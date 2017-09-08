<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\Flete;

class PrincipalController extends Controller
{
	public function index(){
		$fletes = Flete::all();
		 return view('admin.index',['fletes'=>$fletes]); 
	}
}
   