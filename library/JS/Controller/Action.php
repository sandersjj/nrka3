<?php

/**
 * Description of Action
 *
 * @author jigal
 */
class JS_Controller_Action extends Zend_Controller_Action {

    protected $doctrineCOntainer;

    /**
     *
     */
    public function init() {


        $this->initDoctrine();
    }

    private function initDoctrine() {
        $this->doctrineContainer = Zend_Registry::get('doctrine');
        $em = $this->doctrineContainer->getEntityManager();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);


        $tool = new Doctrine\ORM\Tools\SchemaTool($this->doctrineContainer->getEntityManager());
        $tool->createSchema($this->getClassMetas(APPLICATION_PATH . '/../library/JS/Entity', 'JS\Entity\\'));
    }

    private function getClassMetas($path, $namespace) {
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

    public function getDoctrineContainer() {
        $this->doctrineContainer = Zend_Registry::get('doctrine');
        return $this->doctrineContainer;
    }

}

