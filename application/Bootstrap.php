<?php
 class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
 {
     public function _initAutoloaderNamespaces()
     {
         require_once APPLICATION_PATH .'/../../shared/Doctrine/lib/Doctrine/ORM/Tools/Setup.php';

         try {

             \Doctrine\ORM\Tools\Setup::registerAutoloadGit(APPLICATION_PATH ."/../../shared/Doctrine/");
         } catch (Exception $exc) {
             echo $exc->getTraceAsString();
      }
    }
 }
