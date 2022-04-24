<?php
namespace App\Schoolmanagement\Service\Days;

use Illuminate\Support\Str;

class DayService {
    public function getDayData(){

    }

    public function storeDayData($dayModel, $request){
    return $dayModel->updateOrCreate(['id'=> $request->edit_id],
        [
            'name'      => $request->name,
            'code'      => Str::substr($request->name,1,2),
            'status'    => $request->status,
        ]);
    }
    public function  deleteDayData($dayModel){
    return $dayModel->delete();
    }
}
