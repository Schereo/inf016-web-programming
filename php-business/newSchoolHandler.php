<?php
require_once 'schoolDao.php';
require_once 'schoolJson.php';
$school = array(
    "id" => count(School::readJson()->schools)+1,
    "userID" => User::getUserByMail()->userID,
    "name" => $_POST['schoolname'],
    "schoolTyp" => $_POST['schooltype'],
    "descprition" => $_POST['description'],
    "principal" => $_POST['principal'],
    "phoneNumber" => $_POST['phonenumber'],
    "mail" => $_POST['mail'],
    "students" => $_POST['students'],
    "homepageURL" => $_POST['homepage'],
    "imagePath" => $_POST['imagepath']);
$school ['address'] = array(
        "street" => $_POST['street'],
        "number" => $_POST['number'],
        "zipCode" => $_POST['zipCode'],
        "district" => $_POST['district'],
    );
School::writeJson($school);
header("Location:../index.php");