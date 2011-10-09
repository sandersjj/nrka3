<?php

/**
 * Description of Shift
 *
 * @author jigal
 */
class Shift {

    /**
     * @var integer id
     * @Column(name="id", type="integer",nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;
     /**
     * @Column(type="string",nullable=true, length="15")
     * @var string dayPart i.e. morning / evening/ fullday
     */
    private $dayPart;
    /**
    * @column(type="datetime", nullable=true)
    * var dateTime startdatetime
    */
    private $startdatetime;
    /**
    * @column(type="datetime", nullable=true)
    * var dateTime enddatetime
    */
    private $enddatetime;
    
    private $evtid;

}

