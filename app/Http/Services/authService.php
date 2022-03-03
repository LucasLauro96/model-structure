<?php

namespace App\Http\Services;

use App\Http\Repositories\authRepository;
use Illuminate\Support\Facades\Hash;

class authService
{
    public function login ($user) {
        
        $authRepository = new authRepository();
        $userData = $authRepository->getUser($user);

        if($userData && Hash::check($user->password, $userData->password)){
            $this->createSession($userData);
            
            return [
                'status' => 200,
                'message' => 'user logged'
            ];
        } else {
            return [
                'status' => 404,
                'message' => 'user not found'
            ];
        }
    }

    private function createSession ($user) {
        if(!isset($_COOKIE["PHPSESSID"]))
            session_start();

        $data = [
            'id' => $user->id,
            'name' => $user->name,
        ];

        $_SESSION['auth'] = $data;
    }
}