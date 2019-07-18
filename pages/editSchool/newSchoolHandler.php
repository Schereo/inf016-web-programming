<?php
session_start();
require_once "../../database/Insert.php";
require_once "zip_codes.php";

$school = [
    "creator" => $_SESSION['user_ID'],
    "name" => $_POST['schoolname'],
    "schoolType" => $_POST['schooltype'],
    "description" => $_POST['description'],
    "principal" => $_POST['principal'],
    "students" => $_POST['numberOfStudents'],
    "phoneNumber" => $_POST['phonenumber'],
    "mail" => $_POST['mail'],
    "homepageURL" => $_POST['homepage'],
    'address' => [
        "street" => $_POST['street'],
        "zip_code" => getZip()[$_POST['district']],
        "number" => $_POST['number'],
        "district" => $_POST['district'],
        "city"  => "Oldenburg",
    ]];

$insert = new Insert((new DatabaseConnector())->connect());
$insert->newSchool($school, $_SESSION['user_ID']+1000);
$update = new Update((new DatabaseConnector())->connect());
$update->imageSchoolID($_SESSION['user_ID']+1000);
$_SESSION['error'] = "Ihre Schule wurde erfolgreich angelegt.";
header("Location: ../../index.php");