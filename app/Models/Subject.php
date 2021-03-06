<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code','credit', 'status','final_percentage','assignment_percentage','hour'];

    public function scopeGetActiveSubjects($query){
        return $query->where('status',\constStatus::Active)->get(['id','name']);
    }
}
