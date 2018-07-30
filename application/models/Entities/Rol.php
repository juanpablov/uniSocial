<?php
namespace Entities;

/**
 * @Entity
 * @Table(name="rol")
 * @author admin
 *
 */
class Rol
{
    /**
     * @Column(type="string", length=150, name="nombre")
     * 
     */
    private $nombre;
    /**
     * @id
     * @GeneratedValue
     * @column(type="integer")
     * 
     */
    private $id;
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    
    
}

