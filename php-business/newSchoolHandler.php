<?php
require_once 'schoolDao.php';
require_once 'schoolJson.php';
$school = array(
    "name" => $_POST['schoolname'],
    "schoolType" => $_POST['schooltype'],
    "district" => $_POST['district'],
    "descprition" => $_POST['description']
);
School::writeJson($school);