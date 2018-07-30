<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\ClassLoader;
require_once "vendor/autoload.php";

class Doctrine {
    public $em = null;
    
    public function __construct(){
        $this->autoload();
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(APPPATH."/models/entities"), $isDevMode);
        $this->em = EntityManager::create($this->configuracionesDeConexion(), $config);  
    }
    
    private function autoload(){
        $entitiesClassLoader = new ClassLoader('Entities', rtrim(APPPATH . 'models'));
        $entitiesClassLoader->register();
    }
    
    private function configuracionesDeConexion(){ 
        require_once APPPATH.'config/database.php';
        return  array(
            'driver' => 'pdo_mysql',
            'user' =>     $db['default']['username'],
            'password' => $db['default']['password'],
            'host' =>     $db['default']['hostname'],
            'dbname' =>   $db['default']['database']
        );
    }
}