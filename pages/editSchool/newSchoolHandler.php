<?php
require_once "../../database/Insert.php";
$school = [
    "creator" => $_SESSION['user_ID'],
    "name" => $_POST['schoolname'],
    "schoolType" => $_POST['schooltype'],
    "description" => $_POST['description'],
    "principal" => $_POST['principal'],
    "phoneNumber" => $_POST['phonenumber'],
    "mail" => $_POST['mail'],
    "homepageURL" => $_POST['homepage'],
    'address' => [
        "street" => $_POST['street'],
        "number" => $_POST['number'],
        "district" => $_POST['district'],
    ]];

$insert = new Insert((new DatabaseConnector())->connect());
$insert->newSchool($school, $_SESSION['user_ID'] );
$_SESSION['error'] = "Ihre Schule wurde erfolgreich angelegt.";
header("Location: ../../index.php");