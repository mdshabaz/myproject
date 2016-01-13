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
 * Description of staff
 *
 * @author AL Misbah
 */
class staff {
    //put your code here
private $GroupId;
private $StaffId;
private $LoginId;
private $Password;
private $Title;
private $FirstName;
private $MiddleName;
private $LastName;
private $Designation;
private $Phone;
private $EmailId;
private $RegistrationDate;
private $LoginidStatus;
private $UserTypeype;
private $LastLogin;
private $DisabledDate;
private $Status;
private $comments;


Public function __construct($GroupId, $StaffId, $Title, $FirstName, $MiddleName, $LastName, $Designation, $Phone, $EmailId, $RegistrationDate, $LoginidStatus, $UserTypeype, $DisabledDate, $Status, $comments){

$this->GroupId = $GroupId;
$this->StaffId = $StaffId;
$this->Title = $Title;
$this->FirstName = $FirstName;
$this->MiddleName = $MiddleName;
$this->LastName = $LastName;
$this->Designation = $Designation;
$this->Phone = $Phone;
$this->EmailId = $EmailId;
$this->RegistrationDate = $RegistrationDate;
$this->LoginidStatus = $LoginidStatus;
$this->UserTypeype = $UserTypeype;
$this->DisabledDate = $DisabledDate;
$this->Status = $Status;
$this->comments = $comments;


}
}
