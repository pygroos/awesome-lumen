<?php

namespace App\Http\Controllers\Api;

use App\Constants\ErrCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ExampleController extends Controller
{
    public function index(Request $request)
    {
        $isError = $request->get('error', 0);

        if ($isError) {
            return $this->responseError(ErrCode::NETWORK_ERROR);
        }

        return $this->responseSuccess();
    }
}
