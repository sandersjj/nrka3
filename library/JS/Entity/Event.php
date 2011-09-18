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
    * @column(type="datetime", nullable=true
    * var dateTime startDayTime
    */

    private startDayTime;

    /**
    * @column(type="datetime", nullable=true
    * var dateTime startDayTime
    */
    private endDayTime;




}

