<?php
// list_products.php
use App\Entity\Student;
require('vendor/autoload.php');
require "app/entities/Student.php";

require_once "bootstrap.php";

$studentRepository = $entityManager->getRepository('App\\Entity\\Student');
$students = $studentRepository->findAll();

	echo "|ID|" . "|Name|" . "|Surname|" . "|Gender|" . "|Category|" . "|Faculty| \n";
foreach ($students as $student) {

    echo "{$student->getId()} - {$student->getName()} - {$student->getSurname()} - {$student->getGender()} - {$student->getCategory()} - {$student->getFaculty()} \n";
   
}
