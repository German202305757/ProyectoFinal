<?php

namespace App\Controllers;
use App\Models\AdoptantesModel;
use App\Models\UsuariosModel;

class AdoptantesController extends BaseController
{
    public function index(): string
    {
        $adoptante = new AdoptantesModel();
        $datos['datos'] = $adoptante->findAll();
        $datos['success'] = session()->getFlashdata('success');
        $datos['error'] = session()->getFlashdata('error');

        return view('adoptante', $datos);
    }

     public function agregarAdoptante()
{
    $adoptante = new AdoptantesModel();

    $datos = [
        'nombre'   => $this->request->getPost('txt_nombre'),
        'apellido' => $this->request->getPost('txt_apellido'),
        'edad'     => $this->request->getPost('txt_edad'),
        'dpi'      => $this->request->getPost('txt_dpi'),
        'telefono' => $this->request->getPost('txt_telefono'),
        'correo'   => $this->request->getPost('txt_email'),
        'direccion'=> $this->request->getPost('txt_direccion')
    ];

    $adoptante->insert($datos);

    session()->setFlashdata('success', 'Adoptante agregado correctamente.');
    return redirect()->to(base_url('adoptante'));
}


    public function buscarAdoptante($codigo)
    {
        $adoptante = new AdoptantesModel();
        $datos['datos'] = $adoptante->where('id_adoptante', $codigo)->first();

        if (!$datos['datos']) {
            session()->setFlashdata('error', 'No se encontró el adoptante con el ID especificado.');
            return redirect()->to(base_url('adoptante'));
        }

        return view('form_editar_adoptante', $datos);
    }

    public function eliminarAdoptante($id_adoptante)
    {
        $usuario = new UsuariosModel();
        $adoptante = new AdoptantesModel();

        $usuariosAsociados = $usuario->where('id_adoptante', $id_adoptante)->findAll();

        if (!empty($usuariosAsociados)) {
            session()->setFlashdata('error', 'No se puede eliminar el adoptante porque tiene usuarios asignados.');
            return redirect()->to(base_url('adoptante'));
        }

        $adoptante->delete($id_adoptante);
        session()->setFlashdata('success', 'Adoptante eliminado correctamente.');
        return redirect()->to(base_url('adoptante'));
    }

    public function modificarAdoptante()
    {
        $adoptante = new AdoptantesModel();
        $usuario = new UsuariosModel();

        $codigo = $this->request->getPost('txt_codigo');
        $nuevoCodigo = $this->request->getPost('txt_nuevo_codigo') ?? $codigo;

        if ($codigo != $nuevoCodigo && $adoptante->find($nuevoCodigo)) {
            session()->setFlashdata('error', 'Error: el nuevo ID ya pertenece a otro adoptante.');
            return redirect()->to(base_url('adoptante'));
        }

        $usuariosAsociados = $usuario->where('id_adoptante', $codigo)->findAll();
        if (!empty($usuariosAsociados) && $codigo != $nuevoCodigo) {
            session()->setFlashdata('error', 'No se puede cambiar el ID porque está asignado a un usuario.');
            return redirect()->to(base_url('adoptante'));
        }

        $datos = [
            'id_adoptante' => $nuevoCodigo,
            'nombre'=> $this->request->getPost('txt_nombre'),
            'apellido'=> $this->request->getPost('txt_apellido'),
            'edad'=> $this->request->getPost('txt_edad'),
            'dpi'=> $this->request->getPost('txt_dpi'),
            'telefono'=> $this->request->getPost('txt_telefono'),
            'correo'=> $this->request->getPost('txt_email'),
            'direccion'=> $this->request->getPost('txt_direccion')
        ];
        $codigo = $this->request->getPost('txt_codigo');
        $adoptante->update($codigo, $datos);

        
        session()->setFlashdata('success', 'Adoptante modificado correctamente.');
return redirect()->to(base_url('adoptante'));
    }

        try {
            $adoptante->update($codigo, $datos);
            session()->setFlashdata('success', 'Adoptante modificado correctamente.');
        } catch (\Exception $e) {
            session()->setFlashdata('error', 'Error al modificar el adoptante: ' . $e->getMessage());
        }

        return redirect()->to(base_url('adoptante'));
}
