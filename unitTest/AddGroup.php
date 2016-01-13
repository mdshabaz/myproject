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
require_once "beans/Groups.php";
require_once "beans/Specialty.php";
class AddGroup {
    //put your code here
    private $group=null;
    private $specialty = null;
    public function __construct() {
        $id=1;
        $name ="Testhospital";
        $address1 ="";
        $address2="";
        $city ="Bangalore";
        $state = "Karnataka";
        $country = "India";
        $pincode="121212";
        $phone = "2323223233";
        $fax="";
        $email = "a@a.com";
        $website="";
        
        $registrationDate = date(time());
        $this->specialty = new Specialty(1, "cardiology");
        $specialty = $this->specialty;
        $this->group = new Groups($id,$name,$address1,$address2, $city, $state, $country, $pincode, $phone,$fax,$email,$website,$specialty,$registrationDate);
        

    }
    public function addOneEntryGroup(){
        global $entityManager;
        try{
            $entityManager->persist($this->group);
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
$obj = new AddGroup();
//$obj->addOneEntrySpecialty();
$obj->addOneEntryGroup();
