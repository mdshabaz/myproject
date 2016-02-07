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
require_once "beans/Staff.php";

class AddGroup {
    //put your code here
    private $Staff=null;
    
    public function __construct() {
        $GroupId="1";
        $StaffId="1";
        $Title="Mr";
        $FirstName="test fname";
        $MiddleName="test mname";
        $LastName="test lname";
        $Designation="staff";
        $Phone="";
        $EmailId="";
        $LoginidStatus="active";
        $UserTypeype="staff";
        $LastLogin="";
        $DisabledDate="";
        $Status="active";
        $comments="";
        
        $RegistrationDate = date(time());
        
        $this->Staff = new Staff($GroupId, $StaffId, $Title, $FirstName, $MiddleName, $LastName, $Designation, $Phone, $EmailId, $RegistrationDate, $LoginidStatus, $UserTypeype, $LastLogin, $DisabledDate, $Status, $comments);
        

    }
    public function addOneEntryStaff(){
        global $entityManager;
        try{
            $entityManager->persist($this->Staff);
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
$obj = new AddStaff();
//$obj->addOneEntrySpecialty();
$obj->addOneEntryStaff();
