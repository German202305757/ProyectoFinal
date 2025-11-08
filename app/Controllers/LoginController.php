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
        
        //busqueda de datos y respuesta de usuario
        $datos = $usuario ->select('usuario,tipo_usuario')  
        ->where('usuario',$nombre)
        -> where('contraseña', $pass)
        -> first();
        
        // si $datos es true entonces -> crea sesión y redirige a páginas correspondientes segun id
        if ($datos){
            $sesion=[
                'usuario'=>$datos['usuario'],
                'tipo'=>$datos['tipo_usuario'],
                'activa'=>true
            ]; 
            //crear variables de sesion acceder a ellos desde cualquier página
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
            //redirige con mensaje de error
            return redirect()->to(base_url('/?error=1'));
            
        }
    }
    public function cerrarSesion(){
        //destruye las variables de sesión
        session()->destroy();
        //lleva a la página de inicio con mensaje de sesion cerrada.
        return redirect()->to(base_url('/?error=2'));
    }
}