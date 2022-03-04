<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\People;

class PersonController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        People::create([
            'id_user' => $request->id_user,
            'Name' => $request->Name,
            'Age' => $request->Age,
        ]);

        return "Pessoa Criada com sucesso!";
    }
}
