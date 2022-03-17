<?php

namespace App\Http\Repositories;

use App\Models\Person;
use Illuminate\Support\Facades\DB;

class personRepository
{
    public function store($person) {
        $personModel = new Person();

        DB::beginTransaction();
        try{
            $personModel->name = $person->name;
            $personModel->email = $person->email;
            $personModel->cpf = $person->cpf;
            $personModel->cnpj= $person->cnpj;
            $personModel->phone= $person->phone;
            $personModel->password = $person->password;
            $personModel->save();

            DB::commit();
            return response($personModel, 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response($e, 500);
        }
    }
}