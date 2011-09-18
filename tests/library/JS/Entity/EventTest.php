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

    }
}

