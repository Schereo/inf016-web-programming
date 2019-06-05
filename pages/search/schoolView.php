<?php
require_once 'database/Query.php';

$schools = [];
$ratingAvg = 0;
$query = (new Query((new DatabaseConnector())->connect()));

if(isset($_GET["schoolName"]) || isset($_GET["district"]) || isset($_GET["schoolType"])|| isset($_GET["ID"])) {
    if (isset($_GET["schoolName"])) {
        $schoolName = htmlentities($_GET["schoolName"]);
        $schoolTemp = $query->getSchoolsByName($_GET['schoolName']);
        foreach ($schoolTemp as $school) {
            $ratingAvg = $query->getAvgRatingForSchool($school['school_id']);
            array_push($school, $ratingAvg);
            array_push($schools, $school);

        }
        print_r($schools);
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
