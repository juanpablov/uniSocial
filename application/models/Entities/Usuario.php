<?php
namespace Entities;

/**
 * @Entity
 * @Table(name="usuario")
 * 
 * @author admin
 *
 */

class Usuario extends Mensajeable
{
    /**
     * @Column(type="string", length=150, name="nombre") //mapeo
     * 
     */
    private $nombre;
    /**
     * @Column(type="string", length=150, name="apellido")
     * 
     */
    private $apellido;
    /**
     * @Column(type="datetime", name="fechanacimiento")
     * 
     */
    private $fechaNacimiento;
    /**
     * @Column(type="integer", name="legajo")
     * 
     */
    private $legajo;
    /**
     * @Column(type="string", name="mail")
     * 
     */
    private $mail;
    /**
     * @Column(type="integer", name="nrotelefonomovil")
     * 
     */
    private $nroTelefonoMovil;
    /**
     * @ManyToOne(targetEntity="Rol") //mapeo mucho a uno
     * @JoinColumn(name="rol_id", referencedColumnName="id")
     */
    private $rol;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    /**
     * @OneToMany(targetEntity="Discusion", mappedBy="usuario")
     */
    private $discusiones; //onetomany
    /**
     * @OneToMany(targetEntity="Aporte", mappedBy="usuario")
     * 
     */
    private $aportes;
    /**
     * Many Users have Many Groups
     * @ManyToMany(targetEntity="Grupo", mappedBy="usuarios", cascade={"all"})
     * @JoinTable(name="grupo_usuario",
     *            joinColumns={@JoinColumn(name="usuario_id", referencedColumnName="id")},
     *            inverseJoinColumns={@JoinColumn(name="grupo_id", referencedColumnName="id")}
     *            ) 
     * 
     */
    private $grupos;
    /**
     * @OneToOne(targetEntity="Reputacion", cascade={"all"})
     * 
     */
    private $reputacion; //onetoone
    
    public function __construct(){ 
        
        parent::__construct();
        $this->aportes = array(); //inicializo la lista de aportes, grupos..
        $this->grupos = array();
        $this->reputacion = new BuenaReputacion(); //segun el enunciado siempre inicia con buena reputacion
        
    }
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @return mixed
     */
    public function getLegajo()
    {
        return $this->legajo;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getNroTelefonoMovil()
    {
        return $this->nroTelefonoMovil;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @param mixed $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @param mixed $legajo
     */
    public function setLegajo($legajo)
    {
        $this->legajo = $legajo;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $nroTelefonoMovil
     */
    public function setNroTelefonoMovil($nroTelefonoMovil)
    {
        $this->nroTelefonoMovil = $nroTelefonoMovil;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function contestarDiscusion($unaDiscusion){
        
    }
    
    public function puntuar($aporte, $puntos){
        $acumulador = 0;
        foreach ($this->aportes as $unAporte){
            $acumulador+=$unAporte->getPuntuacion();
        }
    }
    
    
    /**
     * @param Grupo $unGrupo
     */public function agregarAGrupo($unGrupo){
        $this->grupos->add($unGrupo);
        $unGrupo->agregarUsuario($this);
    }
    
    public function setReputacion($unaReputacion){
        $this->reputacion = $unaReputacion;
    }
    public function enviar($unMensajeable)
    {}

    public function recibir($unMensaje)
    {}
    
    public function grupos(){
        return $this->grupos;
    }

}

