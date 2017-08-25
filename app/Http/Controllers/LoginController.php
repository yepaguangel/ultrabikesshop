<?php

namespace yepagu\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use yepagu\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
    	return view('admin.login');
    }

    public function store(LoginRequest $request){
    	//$request['password'] = bcrypt('secret');

    	//Hash::check('plain-text', $hashedPassword)

    	if(Auth::attempt(['email'=> $request['email'], 'password'=> $request['password']])){
    		return Redirect::to('/main');
    	}
    	Session::Flash('message-error','Datos Incorrectos');
    	return Redirect::To('/admin/login');
    }
}
