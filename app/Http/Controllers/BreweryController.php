<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweryController extends Controller
{

  public function todas()
  {

    $cervecerias = [
      [
        "nombre" => "Old Town",
        "desc" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
        "aforo" => 20
      ],
      [
        "nombre" => "Irish Drunks",
        "desc" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
        "aforo" => 43
      ],
      [
        "nombre" => "Joyce",
        "desc" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
        "aforo" => 17
      ],
      [
        "nombre" => "Piccolo Bar",
        "desc" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
        "aforo" => 26
      ]
    ];

    $title = "TODAS NUESTRAS CERVECERIAS";

    return view("cervecerias", compact("cervecerias", "title"));
  }


  public function detallesCerveceria()
  {
    $cervezas =[
     [
        "nombre" => "Coronita",
        "informacion" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
        "precio" => "3€"
      ],
      [
        "nombre" => "Pacífico",
        "informacion" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
        "precio" => "2.5€"
      ],
      [
        "nombre" => "Sol",
        "informacion" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
        "precio" => "3.5€"
      ],
      [
        "nombre" => "León",
        "informacion" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
        "precio" => "3.30€"
      ]

    ];

     $title = "TU PRÓXIMA CERVECERIAS FAVORIA";


    return view("detalles", compact("cervezas", "title"));
  }

  public function nuevaCerveceria()
  {
    return view("form_cerveceria");
  }

  public function create(Request $request)
  {
    $validación = $request->validate([
      'name' => 'required|max:60|min:3',
      'description' => 'required|max:350|min:3',
      'capacity' => 'required'
      ]);
      
      return redirect()->route("inicio");
  }
}
