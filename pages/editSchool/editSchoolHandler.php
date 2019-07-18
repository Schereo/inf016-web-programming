<?php
/*
    session_start();
*/
require_once "../../database/Update.php";
require_once "zip_codes.php";

$school = [
    "school_id" => $_POST['editID'],
    "creator" => $_SESSION['user_ID'],
    "name" => $_POST['schoolname'],
    "schoolType" => $_POST['schooltype'],
    "description" => $_POST['description'],
    "principal" => $_POST['principal'],
    "phoneNumber" => $_POST['phonenumber'],
    "mail" => $_POST['mail'],
    "homepageURL" => $_POST['homepage'],
    "students" => $_POST['numberOfStudents'],
    'address' => [
        "street" => $_POST['street'],
        "number" => $_POST['number'],
        "district" => $_POST['district'],
        "zip_code" => getZip()[$_POST['district']]
    ]];

var_dump($school);

$update = new Update((new DatabaseConnector())->connect());
$update->editSchool($school);
header("Location: ../../index.php");

