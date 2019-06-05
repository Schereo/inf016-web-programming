<?php
require_once 'database/Query.php';

$schools = [];
$ratingAvg;
$query = (new Query((new DatabaseConnector())->connect()));

if(isset($_GET["schoolName"]) || isset($_GET["district"]) || isset($_GET["schoolType"])|| isset($_GET["ID"])) {
    if (isset($_GET["schoolName"])) {
        $schoolName = htmlentities($_GET["schoolName"]);
        $schoolsTemp = $query->getSchoolsByName($_GET['schoolName']);
        foreach ($schoolsTemp as $school) {
            $ratingAvg = $query->getAvgRatingForSchool($schools['school_id']);
            $school = [
                "creator" => $school['user_ID'],
                "name" => $school['schoolname'],
                "schoolType" => $school['schooltype'],
                "description" => $school['description'],
                "principal" => $school['principal'],
                "phoneNumber" => $school['phonenumber'],
                "mail" => $school['mail'],
                "homepageURL" => $school['homepage'],
                'address' => [
                    "street" => $school['street'],
                    "number" => $school['number'],
                    "district" => $school['district'],
                ],
                "ratingAvg" => $ratingAvg
            ];
            array_push($schools, $school);
        }

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
}
else {
    $schools = $query->getAllSchools();
}
