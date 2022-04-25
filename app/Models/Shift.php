<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = ['name' ,'status' ,'code'];

    public function scopeGetActiveShifts($query){
        return $query->where('status',\constStatus::Active)->get(['id','name']);
    }
}
