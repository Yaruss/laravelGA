<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id', 'ip'];

    public function scopeFindByIp($query, $ip){
        return $query->where('ip', $ip)->first();
    }
    public function scopeisIp($query, $ip){
        return $query->where('ip', $ip)->exists();
    }
}
