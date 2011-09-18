<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected $doctrineContainer;

    public function _initAutoloaderNamespaces() {

        require_once APPLICATION_PATH . '/../../shared/Doctrine/lib/Doctrine/ORM/Tools/Setup.php';

        try {

            \Doctrine\ORM\Tools\Setup::registerAutoloadGit(APPLICATION_PATH . "/../../shared/Doctrine/");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function initDbSchema() {



        $this->doctrineContainer = Zend_Registry::get('doctrine');
        $em = $this->getDoctrineContainer()->getEntityManager();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);


        $tool = new Doctrine\ORM\Tools\SchemaTool($this->doctrineContainer->getEntityManager());
        $tool->createSchema($this->getClassMetas(APPLICATION_PATH . '/../library/JS/Entity', 'JS\Entity\\'));



//        $classes = array(
//        $em->getClassMetadata('JS\Entity\User'),
//            //$em->getClassMetadata('Entities\Profile')
//        );
        $tool->createSchema($classes);
    }

    public function getClassMetas($path, $namespace) {
        $metas = array();
        if ($handle = opendir($path)) {
            while (false !== ($file = readdir($handle))) {
                if (strstr($file, '.php')) {


                    list($class) = explode('.', $file);
                    $metas[] = $this->doctrineContainer->getEntityManager()->getClassMetadata($namespace . $class);
                }
            }
        }

        return $metas;
    }

//    public function getDoctrineContainer() {
//        return getResource('doctrine');
//    }
}

