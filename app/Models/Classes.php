<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = ['grade_id', 'name','code', 'status'];



    public function grade(){
        return $this->belongsTo(Grade::class , 'grade_id' ,'id');
    }
}
