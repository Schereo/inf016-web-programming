<?php
require_once "../../database/Query.php";
require_once "../../database/Update.php";
require_once "../../database/Insert.php";
require_once "../../database/DatabaseConnector.php";
session_start();


$canteen = $_POST['canteen'];
$learnEnvironment = $_POST['learnenvironment'];
$teacher = $_POST['teacher'];
$activity = $_POST['activity'];
$school_id = $_POST['school_id'];

$query = new Query((new DatabaseConnector())->connect());


if ($query->hasRatingsForSchool($_SESSION['user_ID'], $school_id) != null) {
    $update = new Update((new DatabaseConnector())->connect());
    $update->updateRatings($canteen, $learnEnvironment, $teacher, $activity, $_SESSION['user_ID'], $school_id);
} else {
    $insert = new Insert((new DatabaseConnector())->connect());
    $insert->newRating($canteen, $learnEnvironment, $teacher, $activity, $_SESSION['user_ID'], $school_id);
}



