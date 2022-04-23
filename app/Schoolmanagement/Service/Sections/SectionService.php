<?php

namespace App\Schoolmanagement\Service\Sections;

class SectionService {

    public  function getShiftData(){

    }

    public  function storeSectionData($sectionModel , $request){
        return $sectionModel::updateOrCreate(['id' => $request->edit_id],
            [
                'name'        => $request->name,
                'status'      => $request->status,
                'code'        => $request->code
            ]);
    }

    public  function deleteSectionData($sectionModel){
        return $sectionModel->delete();
    }
}
