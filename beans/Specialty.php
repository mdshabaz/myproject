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
 * Description of Specialty
 *
 * @author AL Misbah
 */
/** @Entity */
class Specialty{
/**
 * @Id
 * @Column(type="integer")
 */
    private $id;
 /**
 * @Column(type="string", length=255, unique=false, nullable=false)
 */   
    private $name;
    
    public function __construct($id,$name) {
        $this->id = $id;
        $this->name = $name;
    }
}
