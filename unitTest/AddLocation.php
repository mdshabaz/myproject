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
require_once "beans/Location.php";
require_once "beans/Specialty.php";
class AddGroup {
    //put your code here
    private $Location=null;
    private $specialty = null;
    public function __construct() {
        $GroupId="1";
        $HospitalId="1";
        $LocationId="1";
        $name="test location";
        $address1="160 vijinapura";
        $address2="vijinapura";
        $city="BNG";
        $state="KAR";
        $country="IND";
        $PinCode="560016";
        $phone="9845098450";
        $fax="9845098450";
        $email="email@email.www";
        $website=www.wwww.www;
        $LocationStatus="Active";
        $comments="";
        $autoenroll="yes";
        
        $registrationdate = date(time());
        $this->specialty = new Specialty(1, "cardiology");
        $speciality = $this->specialty;
        $this->Location = new Location($GroupId, $HospitalId, $LocationId, $name, $address1, $address2, $city, $state, $country, $PinCode, $phone, $fax, $email, $website, $speciality, $registrationdate, $LocationStatus, $comments, $autoenroll);
        
    }
    public function addOneEntryLocation(){
        global $entityManager;
        try{
            $entityManager->persist($this->Location);
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
$obj = new AddLocation();
//$obj->addOneEntrySpecialty();
$obj->addOneEntryLocation();
