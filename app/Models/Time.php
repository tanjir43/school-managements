<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected  $fillable = ['code',' status','start_from','end_from','shift_id'];

    public function shift(){
      return  $this->belongsTo(Shift::class, 'shift_id','id');
    }

    public function scopeGetActiveTimes($query){
        return $query->where('status',\constStatus::Active)->get(['id','start_from','end_from']);
    }
}
