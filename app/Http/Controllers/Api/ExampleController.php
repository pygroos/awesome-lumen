<?php

namespace App\Http\Controllers\Api;

use App\Constants\ErrCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function index(Request $request)
    {
        $isError = $request->get('error', 0);

        if ($isError) {
            return $this->responseError(ErrCode::USERNAME_ALREADY_EXIST);
        }

        return $this->responseSuccess();
    }
}
