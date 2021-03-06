<?php

namespace App\Http\Repositories;

use App\Models\User;

class authRepository
{
    public function getUser($user) {
        $userModel = new User();

        return $userModel->select(
            'id',
            'name',
            'email',
            'password'
        )
        ->where(
            'email', $user->email
        )
        ->first();
    }
}