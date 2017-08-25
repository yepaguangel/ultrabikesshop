<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\galleryimg;

class UploadimageController extends Controller
{
    public function index(){
    	return view('admin.galeriaimg');
    }

    public function store(Request $request){
    	$path = public_path().'/filegallery/';
        $files = $request->file('file');
        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
        }
    }
}
