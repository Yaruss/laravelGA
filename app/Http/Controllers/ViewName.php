<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewName extends Controller
{
    public function show(Request $request){
        return view('editname');
    }
}
