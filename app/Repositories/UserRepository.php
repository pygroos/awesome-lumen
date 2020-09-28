<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $modUser = null;

    public function __construct(User $model)
    {
        $this->modUser = $model;
    }

    public function usersList()
    {
        $res = [];
        $users = $this->modUser::all();
        if ($users->count()) {
            foreach ($users as $user) {
                $res[] = [
                    'id' => $user->id,
                    'username' => $user->username
                ];
            }
        }

        return $res;
    }
}
