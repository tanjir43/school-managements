<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LelGradeClassSubject extends Model
{
    use HasFactory;

    protected  $fillable =['level_id','grade_id','subject_id','class_id'];

    public  function  level(){
        return $this->belongsTo(Level::class);
    }
    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function class(){
        return $this->belongsTo(Classes::class);
    }

}
