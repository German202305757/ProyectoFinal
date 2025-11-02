<?php

namespace App\Controllers;
use App\Models\AdoptantesModel;
use App\Models\UsuariosModel;


class AdoptantesController extends BaseController
{

     public function agregarAdoptante(){
        $adoptante = new AdoptantesModel();
        $datos = [
            'id_adoptante'=>$this->request->getPost('txt_codigo'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'edad'=>$this->request->getPost('txt_edad'),
            'dpi'=>$this->request->getPost('txt_dpi'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'correo'=>$this->request->getPost('txt_email'),
            'direccion'=>$this->request->getPost('txt_direccion')
        ];
        print_r($datos);
        $adoptante->insert($datos);
        return $this->index();
    }

}