<?php
namespace Entities;
/**
 * 
 * @author admin
 * @Entity
 * @Table(name="estado")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="tipo", type="string")
 * @DiscriminatorMap({"abierta" = "Abierta", "cerrada" = "Cerrada", "pausada" = "Pausada"})
 */
abstract class EstadoDiscusion
{
    /**
     * @OneToOne(targetEntity="Discusion")
     * 
     */
    private $discusion;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    
    
    /**
     * @return Discusion 
     */
    public function getDiscusion()
    {
        return $this->discusion;
    }

    /**
     * @param mixed $discusion
     */
    public function setDiscusion($discusion)
    {
        $this->discusion = $discusion;
    }

    public abstract function contestar($unMensaje);
    
    public abstract function cerrarDiscusion();
    
    public abstract function suspenderDiscusion();
}


