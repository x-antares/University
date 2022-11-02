<?php

namespace app\controllers;
use App\Entity\Student;
use university\core\helpers\Helper;


class MainController extends AppController
{
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

            Helper::toMainPage();
        }
    }

    public function edit(){
        require_once ROOT ."bootstrap.php";
        require APP ."/entities/Student.php";

        $request = Helper::getRequest();
        $id = $request['id'] ?? null;

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
            $this->set(compact('student', 'name', 'surname', 'gender', 'category', 'faculty'));
        }else{
            $this->layout = '404';
        }

        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $gender = $_POST['gender'];
            $category = $_POST['category'];
            $faculty = $_POST['faculty'];

            $student->setName($name);
            $student->setSurname($surname);
            $student->setGender($gender);
            $student->setCategory($category);
            $student->setFaculty($faculty);
            $entityManager->persist($student);
            $entityManager->flush();
            $this->set(compact('student', 'name', 'surname', 'gender', 'category', 'faculty'));
        }
    }


    public function delete(){
        require_once ROOT ."bootstrap.php";
        require APP ."/entities/Student.php";

        $request = Helper::getRequest();
        $id = $request['id'] ?? null;


        $studentRepository = $entityManager->getRepository('App\\Entity\\Student');
        $student = $studentRepository->find($id);

        if(isset($student)){
            $entityManager->remove($student);
            $entityManager->flush();
        }

        Helper::toMainPage();
    }
}