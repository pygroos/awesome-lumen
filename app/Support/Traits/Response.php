<?php

namespace App\Support\Traits;

use App\Constants\ErrCode;
use App\Constants\ErrDesc;

trait Response
{
    public function responseSuccess($data = [])
    {
        return response()->json([
            'code' => ErrCode::SUCCESS,
            'message' => ErrDesc::getDesc()[ErrCode::SUCCESS],
            'data' => $data
        ]);
    }

    public function responseError($code)
    {
        return response()->json([
            'code' => $code,
            'message' => ErrDesc::getDesc()[$code],
            'data' => []
        ]);
    }
}
