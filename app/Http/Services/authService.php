<?php

namespace App\Http\Services;

use App\Http\Repositories\authRepository;

class authService
{
    public function login ($user) {
        
        $authRepository = new authRepository();
        return $authRepository->getUser($user);
    }
}