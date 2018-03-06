<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
  public function index()
  {
    return "hola Erwin";
  }
  public function nombre($nombre)
	{
		return "Hola mi nombre es: ".$nombre;
	}
}
