<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable =['name' , 'status' ,'description','level_id'];


    public function level(){
        return $this->belongsTo(Level::class , 'level_id' ,'id');
    }
}
