<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestEditName;

class EditName extends Controller
{
    public function show(RequestEditName $request){
        return view('editname');
    }
}
