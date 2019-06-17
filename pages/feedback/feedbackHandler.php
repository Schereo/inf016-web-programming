<?php
require_once "../../database/Query.php";
require_once "../../database/Update.php";
require_once "../../database/Insert.php";

session_start();

$query = new Query((new DatabaseConnector())->connect());


if($query->hasRatingsForSchool($_SESSION['user_ID'],$school['school_id'])){
    $update = new Update((new DatabaseConnector())->connect());
    $update->updateRatings(canteen, learnEnvironment, teacher, activity, $school['school_id'], $_SESSION['user_ID']);
}else{
    $insert = new Insert((new DatabaseConnector())->connect());
    $insert->newRating(canteen, learnEnvironment, teacher, activity, $school['school_id'], $_SESSION['user_ID']);
}


