<?php
require('vendor/autoload.php');
require "app/entities/Student.php";
require_once "bootstrap.php";

$console_output_type = 'table';
$table_name = 'Students';
$model_fields = ['Id', 'Name', 'Surname', 'Gender', 'Category', 'Faculty'];

$studentRepository = $entityManager->getRepository('App\\Entity\\Student');
$students = $studentRepository->findAll();

$models = $students;

require "vendor/university/libs/console_output.php";
