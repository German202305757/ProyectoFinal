<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class LoginController extends BaseController
{
    public function index()
    {
        $email = $this-> request->getPost('txt_email');
        $pass = $this-> request->getPost('txt_pass');

        $usuario = new UsuariosModel();
        
        //busqueda de datos y respuesta de usuario
        $datos = $usuario ->select('nombre,tipo_usuario',)  
        ->where('email',$email)
        -> where('password', $pass) 
        -> first();
        
        // si $datos es true entonces -> crea sesión y redirige a páginas correspondientes segun id
        if ($datos){
            $sesion=[
                'nombre'=>$datos['nombre'],
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