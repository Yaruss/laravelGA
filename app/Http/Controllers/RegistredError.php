<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\RequestRegistredError;

use App\Models\Name;

use App\Jobs\AddRegistredError;

class RegistredError extends Controller
{
    public function show(RequestRegistredError $request){

        if(Name::isIp($request->ip())){
            $name = Name::FindByIp($request->ip());
        }else{
            $name = Name::create([
                'name'=>'New GA',
                'ip' => $request->ip()
            ]);
        }
        AddRegistredError::dispatch($name->id, $request['id1'],$request['id2'],$request['id3']);
        return response()->json([
            'status' => 'success',
            'id_ga' => $name->id,
            'SERVER_i' => $request->ip()
        ], 201);
    }
}
