<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\UsuariosModel;

class LoginController extends BaseController
{
    public function index()
    {
        $nombre = $this-> request->getPost('txt_usuario');
        $pass = $this-> request->getPost('txt_pass');

        $usuario = new LoginModel();
        
        $datos = $usuario ->select('usuario,tipo_usuario,id_adoptante')  
        ->where('usuario',$nombre)
        -> where('contraseña', $pass)
        -> first();
        
        if ($datos){
            $sesion=[                
                'usuario'=>$datos['usuario'],
                'tipo'=>$datos['tipo_usuario'],
                'adoptante'=>$datos['id_adoptante'],
                'activa'=>true
            ]; 
            session()->set($sesion);

            if($datos['tipo_usuario']==1){
                return view('menu_admin');
            }elseif($datos['tipo_usuario']==2){
                return view('menu_editor');
            }elseif($datos['tipo_usuario']==3){
                return view('menu_cliente');
            }else{
                echo ("Tipo de dato desconocido");
            }

            print_r($datos);
        } else {
            return redirect()->to(base_url('/?error=1'));
            
        }
    }
    public function cerrarSesion(){
        session()->destroy();
        return redirect()->to(base_url('/?error=2'));
    }
}