<?php

namespace yepagu\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use yepagu\User;

class LoginController extends Controller
{
    public function index(){
        if (session()->has('id')) {
            return Redirect::To('admin/principal');
        }
        return view('admin.login');
    	
    }

    public function store(Request $request){
    	$usuario = User::where('email', '=', $request['email'])->where('password', '=', $request['password'])->first();
        if (count($usuario) > 0) {
            session(['id' => $usuario->id, 
                     'email' => $usuario->email]);
            return Redirect::To('admin/principal');
        }else{
            $request->session()->flash('message.color', 'red');
            $request->session()->flash('message.content', '!Lo sentimos Usuario o Contraseña erradas');
            return view('admin.login');
        }
    }
}
