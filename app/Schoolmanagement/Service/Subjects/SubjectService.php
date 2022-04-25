<?php
namespace App\Schoolmanagement\Service\Subjects;

use App\Models\LelGradeClassSubject;
use Illuminate\Support\Str;

class SubjectService{
    public  function getSubjectData($SubjectModel){
        return $SubjectModel::get();
    }

    public  function storeSubjectData($SubjectModel , $request){

        if($request->has('assign')){
            $SubjectModel::find($request->edit_id)->update([

                'assignment_percentage'  => $request->assignment_percentage,
                'final_percentage'       => $request->final_percentage
            ]);
        }else{
            $subject= $SubjectModel::updateOrCreate(['id' => $request->edit_id],
            [
                'name'        => $request->name,
                'status'      => $request->status,
                'code'        => $request->code,
                'credit'      => $request->credit,
                'hour'        => $request->hour,
          ]);
            LelGradeClassSubject::updateOrCreate(['subject_id'=>$request->edit_lel_grade_class_subject_id],
            [
                'level_id'  =>$request->level_id,
                'grade_id'  =>$request->grade_id,
                'subject_id'  => $subject->id,
                'class_id'  =>$request->class_id,
            ]);
        }

      return $this;
    }

    public  function deleteSubjectData($SubjectModel){
        return $SubjectModel->delete();
    }
}
