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
 * Description of Patient
 *
 * @author AL Misbah
 */
class Patient {
    //put your code here
private $PatientId;
private $Title;              
private $FirstName;                 
private $MiddleName;                
private $LastName;                  
private $Phone;
private $EmailId;
private $RegistrationDate;
private $LoginidStatus;
private $LastLogin;
private $DisabledDate;
private $Status;
private $comments;

public function __construct($PatientId, $Title, $FirstName, $MiddleName, $LastName, $Phone, $EmailId, $RegistrationDate, $LoginidStatus, $LastLogin, $DisabledDate, $Status, $comments){

$this->PatientId =  $PatientId;
$this->Title = $Title;              
$this->FirstName = $FirstName;                 
$this->MiddleName = $MiddleName;                
$this->LastName =  $LastName;                  
$this->LastName =  $$LastName;
$this->EmailId =  $EmailId;
$this->RegistrationDate =  $RegistrationDate;
$this->LoginidStatus =  $LoginidStatus;
$this->LastLogin =  $LastLogin;
$this->DisabledDate =  $DisabledDate;
$this->Status =  $Status;
$this->comments =  $comments;
}
}