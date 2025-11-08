<?php

namespace App\Controllers;
use App\Models\SolicitudesModel;

class SolicitudesController extends BaseController
{
    public function index(): string
    {        
        $solicitud= new SolicitudesModel();
        $datos['datos']= $solicitud->findAll();
        return view('solicitudes', $datos);
    }
    public function agregarSolicitud()
    {        
        $solicitud = new SolicitudesModel();
        $datos=[
            'id_solicitud'=> $this-> request->getPost('txt_id_solicitud'),
            'id_adoptante'=> $this-> request->getPost('txt_id_adoptante'),
            'id_animal'=> $this-> request->getPost('txt__id_animal'),
            'estado_solicitud'=> $this-> request->getPost('txt_estado'),
            'fecha_solicitud'=> $this-> request->getPost('txt_fecha'),
            'comentario'=> $this-> request->getPost('txt_comentario'),

        ];
        print_r($datos);
        $solicitud->insert($datos);
        return $this->index();
    }

   public function buscarSolicitud($codigo){
        echo "codigo seleccionado para busqueda: ". $codigo;
        $solicitud = new SolicitudesModel();  
        $datos['datos']= $solicitud->where('id_solicitud',$codigo)->first();
        return view('form_editar_solicitud',$datos);
   }
    public function modificarSolicitud(){
        $solicitud=new SolicitudesModel();
        $datos=[
            'estado_solicitud'=> $this-> request->getPost('txt_estado'),
            'fecha_solicitud'=> $this-> request->getPost('txt_fecha'),
            'comentario'=> $this-> request->getPost('txt_comentario'),
        ];
        $codigo = $this->request->getpost('txt_numero');
        $solicitud->update($codigo, $datos);
        return $this->index();
    }


        public function eliminarSolicitud($id){
        echo "Codigo Seleccionado: ". $id;
        $solicitud = new SolicitudesModel();
        $solicitud->delete($id); 
        return $this->index();
    }
}