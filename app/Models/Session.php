<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected  $fillable = ['name','status','code','current_session'];

    public function scopeGetActiveSessions($query){
        return $query->where('status',\constStatus::Active)->get(['id','name','code']);
    }

    public function scopeGetCurrentSession($query){
        return $query->where('status',\constCurrentSession::Yes)->get(['id','name','code']);
    }
}
