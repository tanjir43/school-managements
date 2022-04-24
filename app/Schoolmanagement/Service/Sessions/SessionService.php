<?php

namespace App\Schoolmanagement\Service\Sessions;


class SessionService
{
    public function  getSessionData(){

    }

    public function storeSessionData($sessionModel,$request){
        return $sessionModel->updateOrCreate(['id' => $request->edit_id],
        [
            'name' => $request->name,
            'code' => $request->code,
            'status'=> $request->status,
            'current_session'=> $request->current_session,
        ]);
    }

    public function deleteSessionData($sessionModel){
    return $sessionModel->delete();
    }

}
