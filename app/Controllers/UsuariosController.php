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
    public function eliminarUsuario($id)
    {
        $usuario = new UsuariosModel();
        $usuario->delete($id);
        return $this->index();
    }
     public function modificarUsuario()
    {
        $usuario = new UsuariosModel();
        $adoptante = new AdoptantesModel();

        $codigo = $this->request->getPost('txt_codigo');
        $id_adoptante = $this->request->getPost('txt_id_adoptante');

        // ⚙️ Verificar si existe el adoptante antes de actualizar
        $existeAdoptante = $adoptante->find($id_adoptante);

        if (!$existeAdoptante) {
            session()->setFlashdata('mensaje', 'No se puede modificar el usuario: el ID de adoptante no existe.');
            session()->setFlashdata('tipo_mensaje', 'danger');
            return redirect()->to(base_url('usuarios'));
        }

        $datos = [
            'usuario'      => $this->request->getPost('txt_usuario'),
            'contraseña'   => $this->request->getPost('txt_contrasena'),
            'rol'          => $this->request->getPost('txt_rol'),
            'id_adoptante' => $id_adoptante
        ];

        $usuario->update($codigo, $datos);

        session()->setFlashdata('mensaje', 'Usuario modificado correctamente.');
        session()->setFlashdata('tipo_mensaje', 'success');

        return redirect()->to(base_url('usuarios'));
    }
}