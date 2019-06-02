<?php
require_once 'database/Query.php';

$schools = [];
$query = (new Query((new DatabaseConnector())->connect()));

if (isset($_GET["schoolName"])) {
    $schoolName = htmlentities($_GET["schoolName"]);
    $schools = $query->getSchoolsByName($_GET['schoolName']);
}

if (isset($_GET["district"])) {
    $district = htmlentities($_GET["district"]);
    $schools = $query->getSchoolsByDistrict($_GET['district']);
}

if (isset($_GET["schoolType"])) {
    $schoolType = htmlentities($_GET["schoolType"]);
    $schools = $query->getSchoolsByType($_GET['schoolType']);
}

if (isset($_GET["ID"])) {
    $schoolID = htmlentities($_GET["ID"]);
    $school = $query->getSchool($_GET['ID']);
}