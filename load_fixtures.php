<?php
require_once "bootstrap.php";
require "app/entities/Student.php";

use Faker\Factory;
use App\Entity\Student;

$console_output_type = 'text';
$console_message = 'Fixtures loaded successfully !!!';

$faker = Factory::create();

for ($i = 0; $i <= 10; $i++){
    $name = $faker->firstname;
    $surname = $faker->lastname;
    $gender = $faker->randomElement(["male", "female"]);
    $category = $faker->randomElement($array = array("KSM", "KS", "KK", "KI", "KSMs", "KSs", "KKs", "KIs"));
    $faculty = $faker->randomElement($array = array("FKIT", "TF"));

    $student = new Student();
    $student->setName($name);
    $student->setSurname($surname);
    $student->setGender($gender);
    $student->setCategory($category);
    $student->setFaculty($faculty);

    $entityManager->persist($student);
    $entityManager->flush();
}

require "vendor/university/libs/console_output.php";
