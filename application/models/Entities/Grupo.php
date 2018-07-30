<?php
namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\PersistentCollection;

/**
 * @Entity
 * @Table(name="grupo")
 * @author admin
 *
 */

class Grupo extends Mensajeable
{
    
    /**
     * Many Groups have Many Users
     * @ManyToMany(targetEntity="Usuario", inversedBy="grupos", cascade={"all"})
     * 
     */
    private $usuarios;
    /**
     * @Id
     * @GeneratedValue
     * @column(type="integer")
     * 
     */
    private $id;
    /**
     * @Column(type="string", length=150, name="nombre")
     * 
     */
    private $nombreGrupo;
    
    /**
     * @return mixed
     */
    public function getNombreGrupo()
    {
        return $this->nombreGrupo;
    }

    /**
     * @param mixed $nombreGrupo
     */
    public function setNombreGrupo($nombreGrupo)
    {
        $this->nombreGrupo = $nombreGrupo;
    }

    public function __construct(){
        $this->usuarios = new ArrayCollection();
        parent::__construct();
    }

    
    /**
     * @return PersistentCollection
     */public function usuarios(){
        return $this->usuarios;
    }
    
    public function agregarUsuario($unUsuario){
        $this->usuarios()->add($unUsuario);
    }
    
    public function quitarUsuario($unUsuario){
        
    }
    public function enviar($unMensajeable)
    {}

    public function recibir($unMensaje)
    {}

}


