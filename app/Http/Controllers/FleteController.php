<?php

namespace yepagu\Http\Controllers;

use Illuminate\Http\Request;
use yepagu\Flete;

class FleteController extends Controller
{
	public function update($id, Request $request){
		$flete = Flete::find($id);
        $flete->fill($request->all());
        $flete->save();
        return response()->json([
                "msg"=>'ok'
            ]);
	}
}
   