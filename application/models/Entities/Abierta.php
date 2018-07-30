<?php
namespace Entities;
require_once 'EstadoDiscusion.php';

/**
 * 
 * @author admin
 * @Entity
 */
class Abierta extends EstadoDiscusion
{

    /**
     * 
     * @param Mensaje $unMensaje
     */
    public function contestar($unMensaje)
    {
        parent::getDiscusion()->agregarRespuesta($unMensaje);
    }
    public function suspenderDiscusion()
    {
        $pausada = new Pausada();
        $pausada->setDiscusion(parent::getDiscusion());
        parent::getDiscusion()->setEstado($pausada);
    }

    public function cerrarDiscusion()
    {
        $cerrada = new Cerrada();
        $cerrada->setDiscusion(parent::getDiscusion());
        parent::getDiscusion()->setEstado($cerrada);
    }

}

