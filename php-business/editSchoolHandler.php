<?php
require_once 'schoolDao.php';
require_once 'schoolJson.php';
$school = array(
    "name" => $_POST['schoolname'],
    "schoolType" => $_POST['schooltype'],
    "description" => $_POST['description'],
    "principal" => $_POST['principal'],
    "phoneNumber" => $_POST['phonenumber'],
    "mail" => $_POST['mail'],
    "homepageUrl" => $_POST['homepage']);
$school ['address'] = array(
    "street" => $_POST['street'],
    "number" => $_POST['number'],
    "zipCode" => $_POST['zipCode'],
    "district" => $_POST['district'],
);
School::update($school->id);