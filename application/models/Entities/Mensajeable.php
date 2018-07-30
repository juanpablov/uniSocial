<?php
namespace Entities;

/**
 * 
 * @author admin
 * @Entity
 * @Table(name="mensajeable")
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="tipo", type="string")
 * @DiscriminatorMap({"aporte" = "Aporte", "discusion" = "Discusion", "grupo" = "Grupo", "usuario" = "Usuario"})
 */
abstract class Mensajeable
{
    /**
     * @OneToMany(targetEntity="Mensaje", mappedBy="emisor")
     * 
     */
    private $mensajesEnviados; //onetomany
    /**
     * @OneToMany(targetEntity="Mensaje", mappedBy="receptor")
     *
     */
    private $mensajesRecibidos;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    
    public function __construct(){
        $mensajes = array();
    }
    public abstract function enviar($unMensajeable);
       
    
    public abstract function recibir($unMensaje);
        
    
}

