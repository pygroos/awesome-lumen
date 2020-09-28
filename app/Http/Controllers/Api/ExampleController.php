<?php

namespace App\Http\Controllers\Api;

use App\Constants\ErrCode;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function index(Request $request, UserRepository $repository)
    {
        $isError = $request->get('error', 0);
        $users = $repository->usersList();

        if ($isError) {
            return $this->responseError(ErrCode::USERNAME_ALREADY_EXIST);
        }

        return $this->responseSuccess(['list' => $users]);
    }
}
