<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
/** @Entity */
class User
{
/**
 * @Id
 * @Column(type="integer")
 */
    private $id;
    private $LoginId;
    private $Pass;
/**
 * @Column(type="string", length=32, unique=true, nullable=false)
 */
private $username;
}