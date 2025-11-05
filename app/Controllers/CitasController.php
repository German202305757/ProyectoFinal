<?php

namespace App\Controllers;
use App\Models\CitasModel;

class CitasController extends BaseController
{
    public function index(): string
    {
        $citas= new CitasModel();       
        $datos['datos']= $citas->findAll();      
        return view('citas', $datos);
    }
    public function agregarCitas()
    {
        $citas = new CitasModel();       
        $datos=[
            'id_cita'=> $this-> request->getPost('txt_cita'),
            'id_solicitud'=> $this-> request->getPost('txt_solicitud'),
            'fecha_cita'=> $this-> request->getPost('txt_fecha'),
            'hora_cita'=> $this-> request->getPost('txt_hora'),
            'tipo_cita'=> $this-> request->getPost('txt_tipo'),
            'comentario'=> $this-> request->getPost('txt_comentario'),
            

        ];
        print_r($datos);       
        $citas->insert($datos);        
        return $this->index();
    }

      public function eliminarCitas($id){
        echo "Codigo Seleccionado: ". $id;        
        $citas = new CitasModel();        
        $citas->delete($id); 
        return $this->index();
    }

    public function buscarCitas($codigo){
        echo "codigo seleccionado para busqueda: ". $codigo;
        $citas = new CitasModel();    
        $datos['datos']= $citas->where('id_cita',$codigo)->first();       
        return view('form_editar_citas',$datos);
    }
      public function modificarCitas(){    
        $citas=new CitasModel();       
        $datos=[
            'id_cita'=> $this-> request->getPost('txt_cita'),
            'id_solicitud'=> $this-> request->getPost('txt_solicitud'),
            'fecha_cita'=> $this-> request->getPost('txt_fecha'),
            'hora_cita'=> $this-> request->getPost('txt_hora'),
            'tipo_cita'=> $this-> request->getPost('txt_tipo'),
            'comentario'=> $this-> request->getPost('txt_comentario'),
            ];
      
        $codigo = $this->request->getpost('txt_cita');       
        $citas->update($codigo, $datos);       
        return $this->index();
    }
}