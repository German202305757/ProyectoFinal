<?php

namespace App\Controllers;

use App\Models\AdoptantesModel;
use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class RegistroController extends BaseController
{
    public function index()
    {
        return view('registro');
    }

    public function guardar()
    {
        $adoptanteModel = new AdoptantesModel();
        $usuarioModel = new UsuariosModel();

        $nombre = trim($this->request->getPost('nombre'));
        $apellido = trim($this->request->getPost('apellido'));
        $edad = $this->request->getPost('edad');
        $correo = trim($this->request->getPost('correo'));
        $dpi = trim($this->request->getPost('dpi'));
        $telefono = trim($this->request->getPost('telefono'));
        $direccion = trim($this->request->getPost('direccion'));

        $adoptanteModel->insert([
            'nombre'    => $nombre,
            'apellido'  => $apellido,
            'edad'      => $edad,
            'correo'    => $correo,
            'dpi'       => $dpi,
            'telefono'  => $telefono,
            'direccion' => $direccion
        ]);

        $idAdoptante = $adoptanteModel->getInsertID();

        $usuarioGenerado = strtolower(str_replace(' ', '', $nombre)) . $apellido;
        $passwordGenerado = $apellido . $edad; 
        $usuarioModel->insert([
            'usuario'       => $usuarioGenerado,
            'contraseña'    => $passwordGenerado,
            'rol'           => 'adoptante',
            'id_adoptante'  => $idAdoptante,
            'tipo_usuario'  => '3'
        ]);

        return redirect()->to('/?registro=exito')
            ->with('success', 'Registro completado correctamente. 
                               Tu usuario es: <b>' . $usuarioGenerado . '</b> 
                               y tu contraseña inicial es: <b>' . $passwordGenerado . '</b>');
    }
}
