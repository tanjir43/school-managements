<?php 

namespace App\Schoolmanagement\Service\Grades;

class GradeService{

    public function getGradeData($gradeModel){
        return $gradeModel::with('level:id,name')->get();
    }

    public function storeGradeData($gradeModel ,$request){
        return $gradeModel::updateOrCreate(['id' => $request->edit_id],
            [
            'name'      =>$request->name,
            'status'    =>$request->status,
            'level_id'  =>$request->level_id,
            'description' => $request->description,
        ]);
    }

    public function deleteGradeData($gradeModel){
        $gradeModel->delete();
    }
}