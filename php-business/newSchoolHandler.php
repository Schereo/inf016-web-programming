<?php
require_once 'schoolDao.php';
require_once 'schoolJson.php';
$school = array(
    "name" => $_POST['schoolname'],
    "schoolType" => $_POST['schooltype'],
    "descprition" => $_POST['description'],
    "principal" => $_POST['principal'],
    "phoneNumber" => $_POST['phonenumber'],
    "mail" => $_POST['mail'],
    "homepageURL" => $_POST['homepage']);
$school ['address'] = array(
        "street" => $_POST['street'],
        "number" => $_POST['number'],
        "zipCode" => $_POST['zipCode'],
        "district" => $_POST['district'],
    );
School::writeJson($school);
header("Location:../index.php");