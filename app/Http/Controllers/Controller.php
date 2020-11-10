<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function returnSucess($data, $message= 'OK', $status = 200) {
        return response(
            [
                'data' => $data,
                'message' => $message
            ]
            , $status);
    }
    public function returnError($data, $message  = 'Error', $status = 207) {
        return response(
            [
                'data' => $data,
                'message' => $message
            ]
            , $status);
    }
}
