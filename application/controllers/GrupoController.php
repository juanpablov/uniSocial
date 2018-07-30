<?php
use Entities\Usuario;
use Entities\Grupo;
require_once APPPATH.'/models/entities/BuenaReputacion.php';
require_once APPPATH.'/models/entities/Mensajeable.php';
require_once APPPATH.'/models/entities/Usuario.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class GrupoController extends CI_Controller
{
    private $model;
    public function __construct(){
        parent::__construct();
        $this->model = parent::cargarModel('Model');
    }
    
    /**
     * @return Model
     */private function model(){
     return $this->model; //es el atributo que se utiliza para mapear los objetos contra la base
    }
    
    public function agregarGrupo($nombreDeGrupo){ 
        $unGrupo = new Grupo();
        $unGrupo->setNombreGrupo($nombreDeGrupo);
        $this->model()->agregar($unGrupo); //creo un grupo
    }
    
    public function detalleGrupo($unGrupo){
        $unGrupo = $this->model()->buscar('Entities\Grupo', $unGrupo);
        $this->smarty->assign("unGrupo",$unGrupo);
        $this->smarty->display("detalleGrupo.tpl"); //muestro interior del grupo
    }
    
    public function agregarUsuarioGrupo($idUsuario, $idGrupo){
        $unUsuario = $this->model()->buscar('Entities\Usuario', $idUsuario);
        $unGrupo = $this->model()->buscar('Entities\Grupo', $idGrupo);
        $unUsuario->agregarAGrupo($unGrupo);
        $this->model()->modificar($unUsuario); //agrego un usuario al grupo
        
    }
    

    
    
}

