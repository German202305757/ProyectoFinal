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
        $datos['success'] = session()->getFlashdata('success');
        $datos['error'] = session()->getFlashdata('error');

        return view('usuarios', $datos);
    }

    public function agregarUsuario()
    {
        $usuario = new UsuariosModel();
        $adoptante = new AdoptantesModel();

        $idUsuario = $this->request->getPost('txt_codigo');
        $idAdoptante = $this->request->getPost('txt_id_adoptante');

        $adoptanteExiste = $adoptante->find($idAdoptante);
        if (!$adoptanteExiste) {
            session()->setFlashdata('error', 'Error: El ID de adoptante no existe. Verifica antes de registrar al usuario.');
            return redirect()->to(base_url('usuarios'));
        }

        $usuarioExiste = $usuario->find($idUsuario);
        if ($usuarioExiste) {
            session()->setFlashdata('error', 'Error: El ID de usuario ya existe. Usa un código diferente.');
            return redirect()->to(base_url('usuarios'));
        }

        $datos = [
            'id_usuario'   => $idUsuario,
            'usuario'      => $this->request->getPost('txt_usuario'),
            'contraseña'   => $this->request->getPost('txt_contrasena'),
            'rol'          => $this->request->getPost('txt_rol'),
            'id_adoptante' => $idAdoptante
        ];

        $usuario->insert($datos);
        session()->setFlashdata('success', 'Usuario agregado correctamente.');
        return redirect()->to(base_url('usuarios'));
    }

    public function buscarUsuario($codigo)
    {
        $usuario = new UsuariosModel();
        $datos['datos'] = $usuario->where('id_usuario', $codigo)->first();
        return view('form_editar_usuario', $datos);
    }

    public function eliminarUsuario($id_usuario)
    {
        $usuario = new UsuariosModel();
        $usuario->delete($id_usuario);
        session()->setFlashdata('success', 'Usuario eliminado correctamente.');
        return redirect()->to(base_url('usuarios'));
    }

    public function modificarUsuario()
{
    $usuario = new UsuariosModel();
    $adoptante = new AdoptantesModel();

    $nuevoCodigo = $this->request->getPost('txt_codigo');
    $codigoAnterior = $this->request->getPost('txt_codigo_original');
    $idAdoptante = $this->request->getPost('txt_id_adoptante');

    if (!$adoptante->find($idAdoptante)) {
        session()->setFlashdata('error', 'Error: El ID de adoptante no existe.');
        return redirect()->to(base_url('usuarios'));
    }

    if (empty($codigoAnterior) || !$usuario->find($codigoAnterior)) {
        session()->setFlashdata('error', 'Error: No se encontró el usuario original para modificar.');
        return redirect()->to(base_url('usuarios'));
    }

    if ($nuevoCodigo != $codigoAnterior && $usuario->find($nuevoCodigo)) {
        session()->setFlashdata('error', 'Error: El nuevo ID de usuario ya está en uso.');
        return redirect()->to(base_url('usuarios'));
    }

    $datos = [
        'id_usuario'=> $nuevoCodigo,
        'usuario'=> $this->request->getPost('txt_usuario'),
        'contraseña'=> $this->request->getPost('txt_contrasena'),
        'rol'=> $this->request->getPost('txt_rol'),
        'id_adoptante'=> $idAdoptante
    ];

    if ($nuevoCodigo != $codigoAnterior) {
        $usuario->where('id_usuario', $codigoAnterior)->delete();
        $usuario->insert($datos);
    } else {
        $usuario->update($nuevoCodigo, $datos);
    }
    session()->setFlashdata('success', 'Usuario modificado correctamente.');
    return redirect()->to(base_url('usuarios'));
}

}