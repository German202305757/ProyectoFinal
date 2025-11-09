<?php

namespace App\Controllers;
use App\Models\MascotasModel;

class MascotasController extends BaseController
{
    public function index(): string
    {
        $animal= new MascotasModel();       
        $datos['datos']= $animal->findAll();      
        return view('mascotas', $datos);
    }
    public function catalogo(): string
    {
        $animal= new MascotasModel();       
        $datos['datos']= $animal->findAll();      
        return view('mascotas_cliente', $datos);
    }

    public function agregarMascotas()
    {
        $animal = new MascotasModel();       
        $datos=[
            'id_animal'=> $this-> request->getPost('txt_id'),
            'nombre'=> $this-> request->getPost('txt_nombre'),
            'raza'=> $this-> request->getPost('txt_raza'),
            'especie'=> $this-> request->getPost('txt_especie'),
            'vacunas'=> $this-> request->getPost('txt_vacunas'),
            'esterilizado'=> $this-> request->getPost('txt_esterilizado'),
            'edad'=> $this-> request->getPost('txt_edad'),
            'estado_disponibilidad'=> $this-> request->getPost('txt_estado'),

        ];
        print_r($datos);       
        $animal->insert($datos);        
        return $this->index();
    }

      public function eliminarMascota($id){
        echo "Codigo Seleccionado: ". $id;        
        $animal = new MascotasModel();        
        $animal->delete($id); 
        return $this->index();
    }

   public function buscarMascotas($codigo){
        echo "codigo seleccionado para busqueda: ". $codigo;
        $animal = new MascotasModel();    
        $datos['datos']= $animal->where('id_animal',$codigo)->first();       
        return view('form_editar_mascotas',$datos);
    }
     public function buscarMascotasSolicitud($codigo){
        /* echo "codigo seleccionado para busqueda: ". $codigo;
        echo session()->get('adoptante');
        */
        $animal = new MascotasModel();    
        $datos['datos']= $animal->where('id_animal',$codigo)->first();       
        return view('solicitud_cliente',$datos);
    }

       public function modificarMascotas(){    
        $animal=new MascotasModel();       
        $datos=[
            'id_animal'=> $this-> request->getPost('txt_id'),
            'nombre'=> $this-> request->getPost('txt_nombre'),
            'raza'=> $this-> request->getPost('txt_raza'),
            'especie'=> $this-> request->getPost('txt_especie'),
            'vacunas'=> $this-> request->getPost('txt_vacunas'),
            'esterilizado'=> $this-> request->getPost('txt_esterilizado'),
            'edad'=> $this-> request->getPost('txt_edad'),
            'estado_disponibilidad'=> $this-> request->getPost('txt_estado'),
        ];
      
        $codigo = $this->request->getpost('txt_id');       
        $animal->update($codigo, $datos);       
        return $this->index();
    }
}