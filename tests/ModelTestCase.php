<?php
/**
 * Description of ModelTestcase
 *
 * @author jigal
 */
class ModelTestCase
    extends PHPUnit_Framework_TestCase
{
    /**
     *
     * @var \Bisna\Application\Container\DoctrineContainer
     */
    protected $doctrineContainer;

    public static function dropSchema($params)
    {
        if(file_exists($params['path'])){
            unlink($params['path']);
        }
    }

    public function getClassMetas($path, $namespace)
    {
        $metas = array();
        if($handle = opendir($path))
        {
            while(false !== ($file= readdir($handle)))
            {
                if(strstr($file,'.php'))
                {
                                 

                    list($class) = explode('.',$file);
                    $metas[] = $this->doctrineContainer->getEntityManager()->getClassMetadata($namespace.$class);
                    
                 }
            }
        }
        
        return $metas;
    }

    public function setUp()
    {
        
        global $application;
        $application->bootstrap();
        $this->doctrineContainer = Zend_Registry::get('doctrine');
        
        self::dropSchema($this->doctrineContainer->getConnection()->getParams());

        $tool = new Doctrine\ORM\Tools\SchemaTool($this->doctrineContainer->getEntityManager());
        $tool->createSchema($this->getClassMetas(APPLICATION_PATH . '/../library/JS/Entity', 'JS\Entity\\'));

        parent::setUp();
    }

    public function tearDown()
    {
        self::dropSchema($this->doctrineContainer->getConnection()->getParams());
        parent::tearDown();
    }

}

