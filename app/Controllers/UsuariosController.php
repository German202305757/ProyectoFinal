<?php

namespace App\Controllers;
use App\Models\UsuariosModel;
use App\Models\AdoptantesModel;

class UsuariosController extends BaseController
{
    public function index(): string
    {
        $usuario = new UsuariosModel();
        $datos['datos'] = $usuario->findAll();
        return view('usuarios',$datos);
    }
}