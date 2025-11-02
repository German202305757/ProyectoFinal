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
     public function agregarUsuario()
    {
        $usuario = new UsuariosModel();
        $adoptante = new AdoptantesModel();

        $id_adoptante = $this->request->getPost('txt_id_adoptante');
        $existeAdoptante = $adoptante->find($id_adoptante);

        if (!$existeAdoptante) {
            session()->setFlashdata('mensaje', 'El ID de adoptante ingresado no existe.');
            session()->setFlashdata('tipo_mensaje', 'danger');
            return redirect()->to(base_url('usuarios'));
        }

        $datos = [
            'id_usuario'   => $this->request->getPost('txt_codigo'),
            'usuario'      => $this->request->getPost('txt_usuario'),
            'contraseña'   => $this->request->getPost('txt_contrasena'),
            'rol'          => $this->request->getPost('txt_rol'),
            'id_adoptante' => $id_adoptante
        ];

        $usuario->insert($datos);

        session()->setFlashdata('mensaje', 'Usuario agregado correctamente.');
        session()->setFlashdata('tipo_mensaje', 'success');

        return redirect()->to(base_url('usuarios'));
    }
}