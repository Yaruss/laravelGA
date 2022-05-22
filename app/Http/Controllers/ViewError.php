<?php

namespace App\Http\Controllers;

use App\Models\Error;
use Illuminate\Http\Request;

class ViewError extends Controller
{
    public function show(Request $request){
        $errors = Error::ErrorPagination();
        return view('viewerror', compact('errors'));
    }
}
