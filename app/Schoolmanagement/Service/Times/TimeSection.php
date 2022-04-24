<?php

namespace App\Schoolmanagement\Service\Times;

use Illuminate\Support\Str;

class TimeSection{

    public  function getTimeData($timeModel){
    return $timeModel::with('shift:id,name')->get();
    }

    public  function storeTimeData($timeModel , $request){
        return $timeModel::updateOrCreate(['id' => $request->edit_id],
            [
                'shift_id'    => $request->shift_id,
                'status'      => $request->status,
                'code'        => time(),
                'start_from'  => $request->start_from,
                'end_from'    => $request->end_from,
            ]);
    }

    public  function deleteTimeData($timeModel){
        return $timeModel->delete();
    }
}
