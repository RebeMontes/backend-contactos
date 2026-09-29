<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function index()
    {
        return response()->json(Contacto::all(),200);
    }

    public function store(Request $request)
    {
        $contacto = Contacto::create($request->all());
        return response()->json($contacto, 201);
    }
}
