<?php
namespace JS\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="events")
 * @author jigal
 */
class Event {
    /**
    * @var integer id
    * @Column(name="id", type="integer",nullable=false)
    * @Id
    * @GeneratedValue(strategy="IDENTITY")
    */

    private $id;
    /**
    * @Column(type="string",nullable=true, length="50")
    * @var string name
    */
    private $name;

    /**
    * @column(type="datetime", nullable=true)
    * var dateTime startDayTime
    */
    private $startDateTime;

    /**
    * @column(type="datetime", nullable=true)
    * var dateTime endDayTime
    */
    private $endDateTime;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getStartDateTime() {
        return $this->startDateTime;
    }

    public function setStartDateTime($startDateTime) {
        $this->startDateTime = $startDateTime;
    }

    public function getEndDateTime() {
        return $this->endDateTime;
    }

    public function setEndDateTime($endDateTime) {
        $this->endDateTime = $endDateTime;
    }



}

