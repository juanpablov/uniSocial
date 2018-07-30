<?php
namespace Entities;

/**
 * @Entity
 * @Table(name="mensaje")
 * @author admin
 *
 */

class Mensaje
{
    /**
     * @Column(type="string", length=150, name="texto")
     * 
     */
    private $texto;
    /**
     * @ManyToOne(targetEntity="Mensajeable", inversedBy="mensajesEnviados")
     * @JoinColumn(name="emisor_id", referencedColumnName="id")
     * 
     */
    private $emisor; //manytoone
    /**
     * @ManyToOne(targetEntity="Mensajeable", inversedBy="mensajesRecibidos")
     * @JoinColumn(name="receptor_id", referencedColumnName="id")
     * 
     */
    private $receptor; //manytoone
    /**
     * @Id
     * @GeneratedValue
     * @column(type="integer")
     * 
     */
    private $id;
    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    
    public function enviar($unMensajeable){
        
    }
    
    public function recibir($otroUsuario){
        
    }
  
}

