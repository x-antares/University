<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Student")
 */
class Student
{
    /** 
    * @ORM\Id @ORM\Column(type="integer") 
    * @ORM\GeneratedValue 
    */
    private $id;

    /** 
    * @ORM\Column(type="string") 
    * @var string
    */
    private $name;

	/** 
    * @ORM\Column(type="string")
    * @var string
    */
    private $surname;   

    /** 
    * @ORM\Column(type="string")
    * @var string
    */
    private $gender; 

    /** 
    * @ORM\Column(type="string")
    * @var string
    */
    private $category;


    /** 
    * @ORM\Column(type="string")
    * @var string
    */
    private $faculty;

    public function getId()
    {

        return $this->id;
    }

    public function getName(): string
    {

    	return $this->name;
    }


    public function setName(string $name): void
    {

    	$this->name = $name;

    }

    public function getSurname(): string
    {

    	return $this->surname;
    }


    public function setSurname(string $surname): void
    {

    	$this->surname = $surname;

    }

 
    public function getGender(): string
    {

        return $this->gender;
    }

    public function setGender(string $gender): void
    {

        $this->gender = $gender;

    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
         $this->category = $category;
    }

    public function getFaculty(): string
    {
        return $this->faculty;
    }

    public function setFaculty(string $faculty): void
    {
        $this->faculty = $faculty;
    }

}
