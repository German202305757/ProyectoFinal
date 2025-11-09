<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\AdoptantesModel;

class UsuariosController extends BaseController
{
    public function index(): string
    {
        $usuarioModel = new UsuariosModel();
        $datos['datos'] = $usuarioModel->findAll();
        return view('usuarios', $datos);
    }

    public function agregarUsuario()
    {
        $usuarioModel = new UsuariosModel();

        $datos = [
            'usuario'      => $this->request->getPost('txt_usuario'),
            'contraseña'   => password_hash($this->request->getPost('txt_contraseña'), PASSWORD_DEFAULT),
            'rol'          => $this->request->getPost('txt_rol'),
            'id_adoptante' => $this->request->getPost('txt_id_adoptante'),
            'tipo_usuario' => $this->request->getPost('txt_tipo_usuario'),
        ];

        $usuarioModel->insert($datos);

        session()->setFlashdata('success', 'Usuario agregado correctamente.');
        return redirect()->to(base_url('usuarios'));
    }

    public function buscarUsuario($id)
    {
        $usuarioModel = new UsuariosModel();
        $datos['datos'] = $usuarioModel->where('id_usuario', $id)->first();

        return view('form_editar_usuario', $datos);
    }

    public function modificarUsuario()
    {
        $usuarioModel = new UsuariosModel();

        $id = $this->request->getPost('txt_id_usuario');

        $datos = [
            'usuario'      => $this->request->getPost('txt_usuario'),
            'rol'          => $this->request->getPost('txt_rol'),
            'id_adoptante' => $this->request->getPost('txt_id_adoptante'),
            'tipo_usuario' => $this->request->getPost('txt_tipo_usuario'),
        ];

        // Si el usuario cambió su contraseña, actualizarla también
        $nuevaPass = $this->request->getPost('txt_contraseña');
        if (!empty($nuevaPass)) {
            $datos['contraseña'] = password_hash($nuevaPass, PASSWORD_DEFAULT);
        }

        $usuarioModel->update($id, $datos);

        session()->setFlashdata('success', 'Usuario modificado correctamente.');
        return redirect()->to(base_url('usuarios'));
    }

    public function eliminarUsuario($id)
    {
        $usuarioModel = new UsuariosModel();

        // Verificar si el usuario existe antes de eliminarlo
        $usuario = $usuarioModel->find($id);
        if (!$usuario) {
            session()->setFlashdata('error', 'El usuario no existe.');
            return redirect()->to(base_url('usuarios'));
        }

        $usuarioModel->delete($id);

        session()->setFlashdata('success', 'Usuario eliminado correctamente.');
        return redirect()->to(base_url('usuarios'));
    }
}
