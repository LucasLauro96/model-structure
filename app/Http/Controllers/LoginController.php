<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
public function authenticate(Request $request){
    return response($request, 200);
}

}