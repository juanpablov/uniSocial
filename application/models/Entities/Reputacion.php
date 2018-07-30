<?php
namespace Entities;
/**
 * 
 * @author admin
 * @Entity
 * @Table(name="reputacion")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="tipo", type="string")
 * @DiscriminatorMap({"mala" = "MalaReputacion", "buena" = "BuenaReputacion"})
 */

abstract class Reputacion
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    /**
     * @OneToOne(targetEntity="Usuario")
     * 
     */
    private $usuario; //onetoone
    public abstract function puntuacion($unUsuario, $unAporte);
    
}

