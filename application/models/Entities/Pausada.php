<?php
namespace Entities;
/**
 * 
 * @author admin
 * @Entity
 */
class Pausada extends EstadoDiscusion
{
    
    /**
     * @Column(type="datetime", name="tiempo")
     * 
     */
    private $tiempo; //datetime
    
    /**
     * @Column(type="integer", name="minutos")
     */
    private $minutos; //integer
    
    public function __construct(){
        $this->tiempo = new \DateTime();
    }
    
    
    /**
     * @return mixed
     */
    public function getMinutos()
    {
        return $this->minutos;
    }

    /**
     * @param mixed $minutos
     */
    public function setMinutos($minutos)
    {
        $this->minutos = $minutos;
    }

    /**
     * @return \DateTime
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * @param mixed $tiempo
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }

    public function contestar($unMensaje)
    {
        $ahora = new \DateTime();
        $diferencia = $this->getTiempo()->diff($ahora); //diff nos da la diferencia entre dos valores datetime
        if ($diferencia->i>$this->minutos){ 
            $abierta = new Abierta();
            $abierta->setDiscusion(parent::getDiscusion());
            parent::getDiscusion()->setEstado($abierta);
        }
        
    }
    public function suspenderDiscusion()
    {
        
    }

    public function cerrarDiscusion()
    {
        $cerrada = new Cerrada();
        $cerrada->setDiscusion(parent::getDiscusion());
        parent::getDiscusion()->setEstado($cerrada);
    }

}

