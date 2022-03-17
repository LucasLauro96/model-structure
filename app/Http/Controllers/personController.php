<?php

namespace App\Http\Controllers;

use App\Http\Services\personService;
use Illuminate\Http\Request;

class personController extends Controller
{
    public function index() {
        return view('admin.person.index');
    }

    public function store(Request $request) {
        $personService = new personService();

        $personService->store($request);
    }
}
