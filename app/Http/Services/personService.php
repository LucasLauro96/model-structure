<?php

namespace App\Http\Services;

use App\Http\Repositories\personRepository;

class personService
{
    public function store($person) {
        $persoRepository = new personRepository();

        $person = $persoRepository->store($person);
        dd($person);
    }
}