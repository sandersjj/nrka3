<?php

class IndexController extends JS_Controller_Action
{

    public function init()
    {
       
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



}

