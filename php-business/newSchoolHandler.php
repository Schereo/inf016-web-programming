<?php
require_once 'schoolDao.php';
require_once 'schoolJson.php';
require_once 'userDao.php';
require_once 'userJson.php';
$school = array(
    "author" => $_SESSION['serName'],
    "id" => count(School::readJson()->schools)+1,
    "userID" => User::getUserByMail()->userID,
    "name" => $_POST['schoolname'],
    "schoolType" => $_POST['schooltype'],
    "descprition" => $_POST['description'],
    "principal" => $_POST['principal'],
    "phoneNumber" => $_POST['phonenumber'],
    "mail" => $_POST['mail'],
    "homepageURL" => $_POST['homepage'],
    $school ['address'] = array(
    "students" => $_POST['students'],
$school ['address'] = array(
        "street" => $_POST['street'],
        "number" => $_POST['number'],
        "zipCode" => $_POST['zipCode'],
        "district" => $_POST['district'],
    )));
School::writeJson($school);
header("Location:../index.php");
