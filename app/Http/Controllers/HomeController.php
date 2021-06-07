<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio()
    {
        $title = "Bienvenidos a Beercraft";
        return view("welcome");
    }

    public function contacto()
    {
        return view("contacto");
    }

    public function nuevoContacto(Request $request)
    {
        $validación = $request->validate([
            'nombre' => 'required|max:60|min:3',
            'email' => 'email:rfc,dns',
            'mensaje' => 'required|max:350|min:3'
            ]);
        return redirect()->route("inicio")->with("message", "Hola $request->nombre hemos recibido tu mensaje, pronto te contestaremos");
    }
}
