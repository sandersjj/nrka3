<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        $em =  $this->getDoctrineContainer()->getEntityManager();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
        $classes = array(
        $em->getClassMetadata('JS\Entity\User'),
        //$em->getClassMetadata('Entities\Profile')
);
$tool->createSchema($classes);
    }

    public function indexAction()
    {
       
       $d = $this->getDoctrineContainer();
       $em = $d->getEntityManager();
       $u = new \JS\Entity\User();
       $u->setFirstName('jigal');
       $u->setSurname('sanders');
       
       $em->persist($u);
       $em->flush();
       
    }

    public function getDoctrineContainer()
    {
	        return $this->getInvokeArg('bootstrap')->getResource('doctrine');
    }


}

