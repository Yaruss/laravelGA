<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewError extends Controller
{
    public function show(Request $request){
        return view('viewerror');
    }
}
