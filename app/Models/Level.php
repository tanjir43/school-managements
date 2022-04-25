<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = ['name' ,'status' ,'desription'];

    public function scopeGetActiveLevels($query){
        return $query->where('status',\constStatus::Active)->get(['id','name']);
    }
}
