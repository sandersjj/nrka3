<?php
namespace JS\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @author jigal
 */
class User
{
    /**
     * @var integer id
     * @Column(name="id", type="integer",nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @Column(type="string",nullable=true, length="15")
     * @var string prefix
     */
    private $prefix;
    /**
     * @Column(type="string",nullable=true, length="60")
     * @var string firstName
     */
    private $firstName;
    /**
     * @Column(type="string",nullable=false, length="60")
     * @var string surname
     */
    private $surname;
    /**
     * @Column(type="string",nullable=true, length="60")
     * @var string address
     */
    private $address;
    /**
     * @Column(type="string",nullable=true, length="10")
     * @var string houseno
     */
    private $houseno;
    /**
     * @Column(type="string",nullable=true, length="10")
     * @var string postcode
     */
    private $postcode;
    /**
     * @Column(type="string",nullable=true, length="25")
     * @var string place
     */
    private $place;
    /**
     * @Column(type="string",nullable=true, length="15")
     * @var string phone
     */
    private $phone;
    /**
     * @Column(type="string",nullable=true, length="15")
     * @var string mobile
     */
    private $mobile;
    /**
     * @Column(type="string",nullable=true, length="60")
     * @var string email
     */
    private $email;
    /**
     * @Column(type="string",nullable=true, length="60")
     * @var string password
     */
    private $password;


    public function __construct()
    {
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPrefix() {
        return $this->prefix;
    }

    public function setPrefix($prefix) {
        $this->prefix = $prefix;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getHouseno() {
        return $this->houseno;
    }

    public function setHouseno($houseno) {
        $this->houseno = $houseno;
    }

    public function getPostcode() {
        return $this->postcode;
    }

    public function setPostcode($postcode) {
        $this->postcode = $postcode;
    }

    public function getPlace() {
        return $this->place;
    }

    public function setPlace($place) {
        $this->place = $place;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    
    public function setPassword($password) {
        $this->password = md5($password);
    }



}
