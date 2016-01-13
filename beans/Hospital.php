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
 * Description of Hospital
 *
 * @author AL Misbah
 */
class Hospital {
    //put your code here
private $GroupId;
private $HospitalId;
private $name;
private $address1;
private $address2;
private $city;
private $state;
private $country;
private $PinCode;
private $phone;
private $fax;
private $email;
private $website;
private $speciality;
private $registrationdate;
private $LocationStatus;
private $comments;
private $autoenroll;

public function __construct($GroupId, $HospitalId, $name, $address1, $address2, $city, $state, $country, $PinCode, $phone, $fax, $email, $website, $speciality, $registrationdate, $LocationStatus, $comments, $autoenroll){

$this->GroupId = $GroupId;
$this->HospitalId = $HospitalId;
$this->name = $name;
$this->address1 = $address1;
$this->address2 = $address2;
$this->city = $city;
$this->state = $state;
$this->country = $country;
$this->PinCode = $PinCode;
$this->phone = $phone;
$this->fax = $fax;
$this->email = $email;
$this->website = $website;
$this->speciality = $speciality;
$this->registrationdate = $registrationdate;
$this->LocationStatus = $LocationStatus;
$this->comments = $comments;
$this->autoenroll = $autoenroll;

}
}
