<?php

namespace app\controllers;
use App\Entity\Student;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;




class MainController extends AppController {


public function index(){
require_once ROOT ."bootstrap.php"; 
require APP ."/entities/Student.php";


if(isset($_POST['id'])){
	$id = $_POST['id'];
}

$studentRepository = $entityManager->getRepository('App\\Entity\\Student');
$students = $studentRepository->findAll();
$this->set(compact('students'));
}
	
public function add(){
}

public function new(){
require_once ROOT ."bootstrap.php"; 
require APP ."/entities/Student.php";

if (isset($_POST['submit'])){
$name = $_POST['name'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$faculty = $_POST['faculty'];

$student = new Student();
$student->setName($name);
$student->setSurname($surname);
$student->setGender($gender); 
$student->setCategory($category);
$student->setFaculty($faculty);
$entityManager->persist($student);
$entityManager->flush();

	}
}

public function edit(){
require_once ROOT ."bootstrap.php"; 
require APP ."/entities/Student.php";

$id = $_POST['id'];
$studentRepository = $entityManager->getRepository('App\\Entity\\Student');
$student = $studentRepository->find($id);
if (isset($student)){

	$name = $student->getName();
	$surname = $student->getSurname();
	$gender = $student->getGender();
	$category = $student->getCategory();
	$faculty = $student->getFaculty();

	$entityManager->persist($student);
	$entityManager->flush();
	$this->set(compact('name', 'surname', 'gender', 'category', 'faculty'));
}

if (isset($_POST['submit'])){
$name = $_POST['name'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$faculty = $_POST['faculty'];

$student = new Student();
$student->setName($name);
$student->setSurname($surname);
$student->setGender($gender); 
$student->setCategory($category);
$student->setFaculty($faculty);
$entityManager->persist($student);
$entityManager->flush();
	}
}


public function remove(){
require_once ROOT ."bootstrap.php"; 
require APP ."/entities/Student.php";

$id = $_POST['id'];
$studentRepository = $entityManager->getRepository('App\\Entity\\Student');
$student = $studentRepository->find($id)->delete();
$studentRepository->flush();

echo $student;
} 


}