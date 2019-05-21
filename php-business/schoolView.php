<?php
$schools = [];

if (isset($_GET["schoolName"])) {
    $schoolName = htmlentities($_GET["schoolName"]);
    $schools = School::getByName($schoolName);
}

if (isset($_GET["district"])) {
    $district = htmlentities($_GET["district"]);
    $schools = School::getByDistrict($district);
}

if (isset($_GET["schoolType"])) {
    $schoolType = htmlentities($_GET["schoolType"]);
    $schools = School::getByType($schoolType);
}