<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEditName;
use App\Models\Name;
use Illuminate\Http\Request;

class ViewName extends Controller
{
    public function show(Request $request){
        return $this->NamesPagination();
    }
    public function delandshow(RequestEditName $request){
        Name::destroy($request->id);
        return $this->NamesPagination();
    }
    public function editandshow(RequestEditName $request){
        Name::where('id',$request->id)->update(['ganame'=>$request->name]);
        return $this->NamesPagination();
    }
    private function NamesPagination(){
        $names = Name::NamesPagination();
        return view('editname', compact('names'));
    }

}
