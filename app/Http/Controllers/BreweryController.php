<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweryController extends Controller
{

    public function todas()
    {
        return view("cervezas");
    }
}
