<?php


class Helper {

    public static function getStatus(){
        return [
            '' => 'Select Status',
            constStatus::Active   => "Active",
            constStatus::InActive => "InActive"
        ];
    }

    public static function getStatusClass($status){
        switch($status){
            case constStatus::InActive:
                return "badge badge-danger";
                break;

            case constStatus::Archive:
                return "badge badge-warning";
                break;

            default:
            return "badge badge-success";
            break;
        }
    } 

    public static function getStatusValue($status){
        switch($status){
            case constStatus::InActive:
                return "InActive";
                break;

            case constStatus::Archive:
                return "Archived";
                break;

            case constStatus::Active:
                return "Active";
                break;
        }
    }

    public static function getSelectedValue($key , $value){
        return $key == $value ? 'selected' : ''; 
    }
}