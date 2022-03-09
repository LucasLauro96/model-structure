<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personController extends Controller
{
    public function index() {
        return view('admin.person.index');
    }
}
