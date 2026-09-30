<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function index()
    {
        return response()->json(Contacto::latest()->get(),200);
    }

    public function store(Request $request)
    {
        $contacto = Contacto::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'status' => true
        ]);
        return response()->json($contacto, 201);
    }
}
