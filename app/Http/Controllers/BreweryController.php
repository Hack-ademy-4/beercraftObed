<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreweryController extends Controller
{

  public function index()
  {
    $cervecerias = Brewery::all();
    
    $title = "TODAS NUESTRAS CERVECERIAS";

    return view("breweries-index", compact("cervecerias", "title"));
  }

  public function show($id)
  {
    $cerveceria = Brewery::findOrFail($id);
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


    return view("/detalles", compact("cerveceria", "cervezas", "title"));
  }

  public function create(Request $request)
  {
    $validación = $request->validate([
      'name' => 'required|max:60|min:3',
      'description' => 'required|max:350|min:3',
      'capacity' => 'required'
      ]);
      
      $cerveceria = new Brewery();
      $cerveceria->name = $validación['name'];
      $cerveceria->description = $validación['description'];
      $cerveceria->capacity = $validación['capacity'];
      
      $cerveceria->save();

      return redirect()->route("cervecerias");
  }


  public function nuevaCerveceria()
  {
    if (!Auth::user()) {
      return redirect ('login');
    }
    return view("form_cerveceria");
  }

  public function edit($id)
  {
    $cerveceria = Brewery::findOrFail($id);
    return view("cerveceria-edit", compact("cerveceria"));
  }

  public function update($id, Request $request)
  {
    $cerveceria = Brewery::findOrFail($id);
    $cerveceria->name = $request->name;
    $cerveceria->description = $request->description;
    $cerveceria->capacity = $request->capacity;

    $cerveceria->save();

    return redirect()->route("edit.cerveceria", ['id'=>$cerveceria->id]);


  }

  public function destroy($id)
  {
    $cerveceria = Brewery::findOrFail($id);
    $cerveceria->delete();

    return redirect()->route("cervecerias");

  }

 
}
