<?php
use JS\Entity\Event;

/**
 * Description of EventTest
 *
 * @author jigal
 */
class EventTest
    extends \ModelTestCase
{



    public function testCanCreateEvent()
    {
        $this->assertInstanceOf('JS\Entity\Event', new Event());
    }

    public function testCanSetEventPropertiesAndRetrieveThem()
    {
        $e = new Event();
        $e->setName('Koninginnedag');
        $e->setStartDateTime(new \DateTime('2011-09-01T20:00:00'));
        $e->setEndDateTime(new \DateTime('2011-09-01T22:00:00'));
        $em = $this->doctrineContainer->getEntityManager();
        $em->persist($e);
        $em->flush();
        $event = $em->find('JS\Entity\Event', 1);
    }

    public function testEndDateTimeCanNotbeBeforestartEndTime()
    {
        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    public function testCanModifyEvent()
    {
        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );

    }
    

}

