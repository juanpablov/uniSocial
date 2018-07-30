<?php

use Doctrine\ORM\EntityManager;

class Model extends CI_Model {
    /**
     * @var EntityManager
     */
    private $em;

    public function __construct() {
             $this->em = $this->doctrine->em;
    }

    private function ejecutar($unaTransaccion, $unElemento){
        try{
            $this->em->beginTransaction();
            $this->em->$unaTransaccion($unElemento);
            $this->em->commit();
            $this->em->flush();
        }
        catch (Exception $ex){
            log_message("error", $ex->getMessage());
            throw $ex;
        }
    }
    
    public function modificar($unElemento){
        $this->ejecutar("merge", $unElemento);
    }
    
    public function eliminar($unElemento){
        $this->ejecutar("remove", $unElemento);
    }
    
    public function agregar($unElemento){
        $this->ejecutar("persist", $unElemento);
    }
    
    /**
     * 
     * @throws Exception
     * @return object|NULL
     */
    public function buscar($unaEntidad, $deId){
        try{
            $entidad = $this->em->find($unaEntidad, $deId);
            return $entidad;
        }
        catch (Exception $ex){
            log_message("error", $ex->getMessage());
            throw $ex;
        }
    }
    
    public function buscarPor($unCriterio, $unaEntidad){
        try{
            $unObjeto = $this->em->getRepository($unaEntidad)->findOneBy($unCriterio);
            return $unObjeto;
        }
        catch (Exception $ex){
            log_message("error", $ex->getMessage());
            throw $ex;
        }
    }
    
    public function existe($unaEntidad, $deId){
        return (!is_null($this->buscar($unaEntidad, $deId)));
    }
    
    public function existePor($unCriterio, $unaEntidad){
        return (!is_null($this->buscarPor($unCriterio, $unaEntidad)));
    }
    
    public function buscarTodosPor($unCriterio, $unaEntidad, $unOrden = null){
        try{
            $unRepositorio = $this->em->getRepository($unaEntidad)->findBy($unCriterio,$unOrden);
            $this->em->flush();
            return $unRepositorio;
        }
        catch (Exception $ex){
            log_message("error", $ex->getMessage());
            throw $ex;
        }
    }
    
    public function buscarTodos($unaEntidad){
        try {
            $repositorio = $this->em->getRepository($unaEntidad)->findAll();
            $this->em->flush();
            return $repositorio;
        }
        catch (Exception $ex){
            log_message("error", $ex->getMessage());
            throw $ex;
        }
    }
    
    public function ejecutarSql($sql)
    {   
        $this->em->getConnection()->getWrappedConnection()->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
        $stmt = $this->em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function ejecutarNonQuerySql($sql)
    {
        $stmt = $this->em->getConnection()->prepare($sql);
        $stmt->execute();
    }

    public function ejecutarDQL($dql, $parametro = array(), $debug = false , $limite = 0) {
        /* @var $query \Doctrine\ORM\Query */
        $query = $this->em->createQuery($dql);
        foreach ($parametro as $clave => $valor) {
            $query->setParameter($clave, $valor);
        }
        if($limite != 0)
            $query->setMaxResults($limite);
        if ($debug) {
            echo $query->getSQL();
        } else {
            $resultset = $query->getResult();
            return $resultset;
        }
    }
        
}