<?php
use Entities\Usuario;
require_once APPPATH.'/models/entities/BuenaReputacion.php';
require_once APPPATH.'/models/entities/Mensajeable.php';
require_once APPPATH.'/models/entities/Usuario.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioController extends CI_Controller
{
    private $model;
    public function __construct(){
        parent::__construct();
        $this->model = parent::cargarModel('Model');
    }
    
    /**
     * @return Model
     */private function model(){
        return $this->model;
    }
    
    public function agregarUsuario($idUsuario){
        $unUsuario = new Usuario(); //por cada new y cada agregar es una nueva fila/instancia
        $unRol = $this->model()->buscar('Entities\Rol', 1);
        $unUsuario->setRol($unRol);
        $unUsuario->setApellido();
        $unUsuario->setNombre();
        $this->model()->agregar($unUsuario);
       
    }
    
    public function verDetalle($idUsuario){
        //Logica de buscar un usuario
        $unUsuario = $this->model()->buscar('Entities\Usuario', $idUsuario);
        $unUsuario->setLegajo();
        $unUsuario->setFechaNacimiento(); //puedo poner el datetime para imprimir una fecha cualquiera
        $unUsuario->setMail();
        $unUsuario->setNroTelefonoMovil();
        $this->model()->modificar($unUsuario);
        $this->smarty->assign("unUsuario",$unUsuario);
        $this->smarty->display("detalleUsuario.tpl");
    }
    
    public function verDetalleDeUsuarioGrupo($idUsuario){
        $unUsuario = $this->model()->buscar('Entities\Usuario', $idUsuario);
        $this->smarty->assign("unUsuario",$unUsuario);
        $this->smarty->display("verDetalleDeUsuarioGrupo.tpl");
    }
}

