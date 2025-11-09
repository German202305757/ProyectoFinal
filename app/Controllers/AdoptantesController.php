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
        return view('adoptante',$datos);
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


        public function buscarAdoptante($codigo){
        echo "codigo seleccionado para busqueda: ".$codigo;
        $adoptante = new AdoptantesModel();
        $datos['datos'] = $adoptante->where('id_adoptante',$codigo)->first();
        return view('form_editar_adoptante',$datos);
    }
    public function eliminarAdoptante($id_adoptante)
    {
        $usuario = new \App\Models\UsuariosModel();
        $adoptante = new \App\Models\AdoptantesModel();

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
        $datos = [
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'edad'=>$this->request->getPost('txt_edad'),
            'dpi'=>$this->request->getPost('txt_dpi'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'correo'=>$this->request->getPost('txt_email'),
            'direccion'=>$this->request->getPost('txt_direccion')
        ];
        $codigo = $this->request->getPost('txt_codigo');
        $adoptante->update($codigo, $datos);

        
        session()->setFlashdata('success', 'Adoptante modificado correctamente.');
return redirect()->to(base_url('adoptante'));
    }

}