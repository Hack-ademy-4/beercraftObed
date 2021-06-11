<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function inicio()
    {
        $title = "Bienvenidos a Beercraft";
        $color = "green";
        return view("welcome", compact("title", "color"));
    }

    public function contacto()
    {
        return view("contacto");
    }

    public function nuevoContacto(Request $request)
    {
        $validación = $request->validate([
            'name' => 'required|max:60|min:3',
            'email' => 'email:rfc,dns',
            'message' => 'required|max:350|min:3'
            ]);


        DB::table('contacts')->insert($validación);    
        return redirect()->route("inicio")->with("message", "Hola $request->nombre hemos recibido tu mensaje, pronto te contestaremos");
    }
}
