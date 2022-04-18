<?php
namespace App\Schoolmanagement\Service\Subjects;

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
            $SubjectModel::updateOrCreate(['id' => $request->edit_id],
            [
                'name'        => $request->name,
                'status'      => $request->status,
                'code'        => $request->code,
                'credit'      => $request->credit,
                'hour'        => $request->hour,
              
          ]
        );
        }
      
      return $this;
    }

    public  function deleteSubjectData($SubjectModel){
        return $SubjectModel->delete();
    }
}