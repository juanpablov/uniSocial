<?php
namespace Entities;
require_once 'Reputacion.php';
/**
 * @Entity
 * @author admin
 *
 */
class BuenaReputacion extends Reputacion
{

    /**
     * @param Usuario $unUsuario
     */public function puntuacion($unUsuario, $aporte)
    {
        $acumulador = 0;
        foreach ($unUsuario->getAportes() as $unAporte){
            $acumulador+=$unAporte->getPuntuacion(); //sumatoria de puntuaciones
        }
        
        $cantidadAportes = count($unUsuario->getAportes()); //cantidad de aportes
        if ($acumulador/$cantidadAportes*2>3){
            $unUsuario->setReputacion(new MalaReputacion());
        }
        
    }
    
}


