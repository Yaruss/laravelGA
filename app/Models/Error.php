<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    use HasFactory;
    protected $fillable = ['names_id', 'id', 'id1', 'id2', 'id3'];

    public function names(){
        return $this->belongsTo(Name::class);
    }
    public function scopeErrorPagination($query){
        return $query
            ->with('names')
            ->orderBy('created_at', 'desc')->paginate(18);
    }
}
