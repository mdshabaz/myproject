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
 * Description of Doctor
 *
 * @author AL Misbah
 */
class Doctor {
    //put your code here
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
private $ProviderId;
private $LoginId;
private $Password;
private $Title;
private $FirstName;
private $MiddleName;
private $LastName;
private $Speciality;
private $Designation;
private $Phone;
private $Mobile1;
private $Mobile2;
private $Fax;
private $EmailId;
private $Website;
private $Address1;
private $Address2;
private $City;
private $State;
private $Country;
private $PinCode;
private $RegistrationDate;
private $LoginidStatus;
private $UserTypeype;
private $LastLogin;
private $DisabledDate;
private $Status;
private $comments;
private $EnrollType;


public function __construct($ProviderId, $LoginId, $Password, $Title, $FirstName, $MiddleName, $LastName, $Speciality, $Designation, $Phone, $Mobile1, $Mobile2, $Fax, $EmailId, $Website, $Address1, $Address2, $City, $State, $Country, $PinCode, $RegistrationDate, $LoginidStatus, $UserTypeype, $LastLogin, $DisabledDate, $Status, $comments, $EnrollType){
$this->ProviderId = $ProviderId;    
$this->LoginId = $LoginId;
$this->Password = $Password;
$this->Title = $Title;
$this->FirstName = $FirstName;
$this->MiddleName = $MiddleName;
$this->LastName = $LastName;
$this->Speciality = $Speciality;
$this->Designation = $Designation;
$this->Phone = $Phone;
$this->Mobile1 = $Mobile1;
$this->Mobile2 = $Mobile2;
$this->Fax = $Fax;
$this->EmailId = $EmailId;
$this->Website = $Website;
$this->Address1 = $Address1;
$this->Address2 = $Address2;
$this->City = $City;
$this->State = $State;
$this->Country = $Country;
$this->PinCode = $PinCode;
$this->RegistrationDate = $RegistrationDate;
$this->LoginidStatus = $LoginidStatus;
$this->UserTypeype = $UserTypeype;
$this->LastLogin = $LastLogin;
$this->DisabledDate = $DisabledDate;
$this->Status = $Status;
$this->comments = $comments;
$this->EnrollType = $EnrollType;
}    

}
