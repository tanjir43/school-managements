<?php

namespace App\Schoolmanagement\Service\Levels;

class LevelService {

    public  function getLeveleData(){

    }

    public  function storeLeveleData($levelModel , $request){
        return $levelModel::updateOrCreate(['id' => $request->edit_id],
        [
            'name'        => $request->name,
            'status'      => $request->status,
            'description' => $request->description
    ]);
    }

    public  function deleteLeveleData($levelModel){
        return $levelModel->delete();
    }
}