<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contacto;

class PrincipalController extends Controller
{

  public function post_form(Request $request)
  {


    $nombre       = $request->nombre;
    $empresa      = $request->empresa;
    $telefono     = $request->telefono;
    $correo       = $request->correo;
    $mensaje      = $request->mensaje;

    $objeto = new Contacto();
    $objeto->nombre    = $nombre;
    $objeto->empresa   = $empresa;
    $objeto->telefono  = $telefono;
    $objeto->correo    = $correo;
    $objeto->mensaje   = $mensaje;
    $objeto->save();

    return [ 'success' => true ];

  }

}
