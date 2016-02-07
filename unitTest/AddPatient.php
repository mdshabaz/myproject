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
require_once "beans/Patient.php";
class AddGroup {
    //put your code here
    private $Patient=null;
    public function __construct() {
               
        $PatientId="1";
        $Title="Mr";              
        $FirstName="test fname";                 
        $MiddleName="test mname";                
        $LastName="test lname";                                  
        $Phone="9845098450";
        $EmailId="email@email.email";
        $LoginidStatus="active";
        $LastLogin="";
        $DisabledDate="";
        $Status="";
        $comments="";
        
        $RegistrationDate = date(time());
        $this->specialty = new Specialty(1, "cardiology");
        $this->Patient = new Patient($PatientId, $Title, $FirstName, $MiddleName, $LastName, $Phone, $EmailId, $RegistrationDate, $LoginidStatus, $LastLogin, $DisabledDate, $Status, $comments);
        

    }
    public function addOneEntryPatient(){
        global $entityManager;
        try{
            $entityManager->persist($this->Patient);
        }
        catch(Exception $e){
            print_r($e);
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
$obj = new AddPatient();
//$obj->addOneEntrySpecialty();
$obj->addOneEntryPatient();
