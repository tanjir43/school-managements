<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected  $fillable = ['name','code','status'];

    public function scopeGetActiveDays($query){
        return $query->where('status',\constStatus::Active)->get(['id','name']);
    }
}
