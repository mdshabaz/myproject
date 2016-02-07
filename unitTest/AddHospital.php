<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddGroup
 *
 * @author AL Misbah
 */
require_once "bootstrap.php";
require_once "beans/Hospital.php";
require_once "beans/Specialty.php";
class AddHospital {
    //put your code here
    private $Hospital=null;
    private $specialty = null;
    public function __construct() {
        
$GroupId="1";
$HospitalId="1";
$name="test hospital";
$address1="160 vijinapura";
$address2="vijinapura";
$city="BNG";
$state="KAR";
$country="IND";
$PinCode="560016";
$phone="9845098450";
$fax="9845098450";
$email="email@email.email";
$website=www.noweb.www;
$LocationStatus="active";
$comments="";
$autoenroll="yes";
        
        
        
        
        
        $registrationDate = date(time());
        $this->specialty = new Specialty(1, "cardiology");
        $speciality = $this->specialty;
        $this->Hospital = new Hospital($GroupId, $HospitalId, $name, $address1, $address2, $city, $state, $country, $PinCode, $phone, $fax, $email, $website, $speciality, $registrationDate, $LocationStatus, $comments, $autoenroll);

    }
    public function addOneEntryHospital(){
        global $entityManager;
        try{
            $entityManager->persist($this->Hospital);
        }
        catch(Exception $e){
            print_r($e);
        }
    }
    public function addOneEntrySpecialty(){
        global $entityManager;
        try{
        $entityManager->persist($this->specialty);
        }
        catch(Exception $e){
           // print_r($e);
        }
    }
    
    public function __destruct() {
        global $entityManager;
        try{
        $entityManager->flush();
        }
        catch(Exception $e){print_r($e);}
    }
}
$obj = new AddHospital();
//$obj->addOneEntrySpecialty();
$obj->addOneEntryHospital();
