<?php 

namespace App\Schoolmanagement\Service\Classes;

use Illuminate\Support\Str;
class ClassService{

    public function getClassData($classModel){
        return $classModel::with('grade:id,name')->get();
    }

    public function storeClassData($classModel ,$request){
        return $classModel::updateOrCreate(['id' => $request->edit_id],
            [
            'name'      =>$request->name,
            'status'    =>$request->status,
            'grade_id'  =>$request->grade_id,
            'code'      => Str::substr($request->name, 1,2)
        ]);
    }

    public function deleteClassData($classModel){
        $classModel->delete();
    }
}