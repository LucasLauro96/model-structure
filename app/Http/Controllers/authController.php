<?php

namespace App\Http\Controllers;

use App\Http\Services\authService;
use Illuminate\Http\Request;

class authController extends Controller
{
    
public function auth(Request $request) {
    
    $authService = new authService();
    $data = $authService->login($request);
    
    return response($data, $data['status']);
}

}
