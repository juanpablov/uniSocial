<?php
namespace Entities;
/**
 * @Entity
 * @author admin
 *
 */
class Discusion extends Mensajeable
{
    /**
     * @OneToOne(targetEntity="EstadoDiscusion")
     * 
     */
    private $estado;
    /**
     * @ManyToOne(targetEntity="Usuario", inversedBy="discusiones")
     * @JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;
    
    public function __construct(){
        $this->setEstado(new Abierta());
        $this->getEstado()->setDiscusion($this);
        parent::__construct();
    }
    /**
     * @return EstadoDiscusion
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function contestar($unMensaje){
        $this->getEstado()->contestar($unMensaje);
    }
    
    public function agregarRespuesta($unaRespuesta){
        array_push($this->respuestas, $unaRespuesta);
    }
    public function enviar($unMensajeable)
    {}

    public function recibir($unMensaje)
    {}

    
}

