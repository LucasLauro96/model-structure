<?php

namespace App\Http\Controllers;

use App\Http\Services\authService;
use Illuminate\Http\Request;

class authController extends Controller
{
    
public function auth(Request $request) {
    
    $authService = new authService();
    return $authService->login($request);
    
    // return response($request, 200);
}

}
