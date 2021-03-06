<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success( $data,$status=200){

        return response()->json(["status"=>"success","data"=>$data],$status);
    }


    public function error($message,$status=500){
        return response()->json(["status"=>"error","message"=>$message],$status);
    }
}
