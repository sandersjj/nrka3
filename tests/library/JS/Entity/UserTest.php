<?php

use JS\Entity\User;
/**
 * Description of UserTest
 *
 * @author jigal
 */
class UserTest
    extends \ModelTestCase
{
    public function testCanCreateUser(){
        $this->assertInstanceOf('JS\Entity\User', new User());
    }

    public function testCanSetFirstAndLastNameAndRetrieveThem(){
        $u = new User();
        $u->setFirstName('Jigal');
        $u->setSurname('Sanders');
        $u->setEmail('jigalroecha@gmail.com');
        $u->setAddress('A.J. Ernststraat');
        $u->setHouseno('739');
        $u->setPassword('test12345');
        $u->setPhone('020-1234567');
        $u->setMobile('06-12345678');
        $u->setPostcode('1234 AB');
        $u->setPlace('Amsterdam');

        $em = $this->doctrineContainer->getEntityManager();
        $em->persist($u);
        $em->flush();

        $users = $em->createQuery('select u from JS\Entity\User u')->execute();
        $this->assertEquals(1,count($users));
        $this->assertEquals('Jigal', $users[0]->getFirstName());
        $this->assertEquals('Sanders', $users[0]->getSurname());
        $this->assertEquals('jigalroecha@gmail.com', $users[0]->getEmail());
        $this->assertEquals('A.J. Ernststraat', $users[0]->getAddress());
        $this->assertEquals('739', $users[0]->getHouseno());
        $this->assertEquals('020-1234567', $users[0]->getPhone());
        $this->assertEquals('06-12345678', $users[0]->getMobile());
        $this->assertEquals('1234 AB', $users[0]->getPostcode());
        $this->assertEquals('Amsterdam', $users[0]->getPlace());

    }

}

