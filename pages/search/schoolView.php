<?php
require_once 'database/Query.php';

$search = false;
$schools = [];
$query = (new Query((new DatabaseConnector())->connect()));

if (isset($_GET["schoolName"]) || isset($_GET["district"]) || isset($_GET["schoolType"]) || isset($_GET["ID"])) {
    var_dump($schools);
    $search = true;
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
} else {
    $search = false;
    $schools = $query->getAllSchools();
}
