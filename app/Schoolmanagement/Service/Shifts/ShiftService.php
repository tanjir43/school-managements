<?php

namespace App\Schoolmanagement\Service\Shifts;
use Illuminate\Support\Str;

class ShiftService {

    public  function getShiftData(){

    }

    public  function storeShiftData($shiftModel , $request){
        return $shiftModel::updateOrCreate(['id' => $request->edit_id],
        [
            'name'        => $request->name,
            'status'      => $request->status,
            'code'        => Str::substr($request->name, 1, 2)
    ]);
    }

    public  function deleteShiftData($shiftModel){
        return $shiftModel->delete();
    }
}