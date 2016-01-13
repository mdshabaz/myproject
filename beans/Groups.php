<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Groups
 *
 * @author AL Misbah
 */
/** @Entity */
class Groups {
/**
 * @Id
 * @Column(type="integer")
 */
private $GroupId;
/**
 * @Column(type="string", length=255, unique=true, nullable=false)
 */
private $name;
/**
 * @Column(type="string", length=255, unique=false, nullable=false)
 */
private $address1;
/**
 * @Column(type="string", length=255, unique=false, nullable=false)
 */
private $address2;
/**
 * @Column(type="string", length=32, unique=false, nullable=false)
 */
private $city;
/**
 * @Column(type="string", length=32, unique=false, nullable=false)
 */
private $state;
/**
 * @Column(type="string", length=32, unique=false, nullable=false)
 */
private $country;
/**
 * @Column(type="string", length=32, unique=false, nullable=false)
 */
private $PinCode;
/**
 * @Column(type="string", length=32, unique=false, nullable=false)
 */
private $phone;
/**
 * @Column(type="string", length=32, unique=false, nullable=false)
 */
private $fax;
/**
 * @Column(type="string", length=255, unique=false, nullable=false)
 */
private $email;
/**
 * @Column(type="string", length=255, unique=false, nullable=false)
 */
private $website;
  /**
     * @ManyToOne(targetEntity="Specialty")
     * @JoinColumn(name="specialty_id", referencedColumnName="id")
     */
private $specialty;
/**
 * @Column(type="datetime", unique=false, nullable=false)
 */
private $registrationdate;
/*
 * @Column(type="binary", unique=false, nullable=false, default=false)
 */
private $LocationStatus;
/**
 * @Column(type="string", length=255, unique=false, nullable=false)
 */
private $comments;
/*
 * @Column(type="binary", unique=false, nullable=false, default=false)
 */
private $autoenroll;

public function __construct($id,$name,$address1,$address2, $city, $state, $country, $pincode, $phone,$fax,$email,$website,$specialty,$registrationDate){
    $this->GroupId = $id;
    $this->name = $name;
    $this->address1 = $address1;
    $this->address2 = $address2;
    $this->city = $city;
    $this->state = $state;
    $this->country = $country;
    $this->PinCode = $pincode;
    $this->phone = $phone;
    $this->fax = $fax;
    $this->email = $email;
    $this->website = $website;
    $this->specialty = $specialty;
    $this->registrationdate = $registrationDate;
    
    
    
}

}


