<?php
namespace JS\Enitity;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 * @ORM\Table(name="shifts")
 * @author jigal
 */
class ShiftTest extends
    \ModelTestCase
{
    public function testCanCreateShift()
    {
        $e = new \Js\Entity\Event();
        $this->assertInstanceOf('JS\Entity\Shift', new \JS\Entity\Shift($e));
    }
    

}

