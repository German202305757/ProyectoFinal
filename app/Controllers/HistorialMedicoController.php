<?php

namespace App\Controllers;
use App\Models\HistorialMedicoModel;
class HistorialMedicoController extends BaseController
{
    public function index(): string
    {
        $historial = new HistorialMedicoModel();
        $datos['datos']=$historial->findAll();
        return view('historialmedico',$datos);
    }

public function agregarregistro(){
    $historial = New HistorialMedicoModel();
    $datos=[
        'id_historial'=>$this->request->getPost('txt_id_historial'),
        'id_animal'=>$this->request->getPost('txt_id_historial'),
        'vacunas_aplicadas'=>$this->request->getPost('txt_vacunas'),
        'tratamiento'=>$this->request->getPost('txt_tratamiento'),
        'fecha_revision'=>$this->request->getPost('txt_fecha')
    ];

    print_r($datos);
    $historial->insert($datos);
    return $this->index();
}


}