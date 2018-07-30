<?php
namespace Entities;
require_once 'Mensajeable.php';

/**
 * @Entity
 * @Table(name="aporte")
 * @author admin
 *
 */

class Aporte extends Mensajeable
{
    /**
     * @Column(type="integer", name="puntuacion")
     * 
     */
    private $puntuacion;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    /**
     * @ManyToOne(targetEntity="Usuario", inversedBy="aportes")
     * @JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;
    
    public function __construct(){
        parent::__construct();
    }

    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * @param mixed $puntuacion
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;
    }

    
    public function puntuar($numero){
        
    }
    public function enviar($unMensajeable)
    {}

    public function recibir($unMensaje)
    {}

}

