<?php
require_once $depth."database/Insert.php";

function newSchool()
{
    $school = array(
        "author" => $_SESSION['firstName'],
        "userID" => $_SESSION['userID'],
        "name" => $_POST['schoolname'],
        "schoolType" => $_POST['schooltype'],
        "description" => $_POST['description'],
        "principal" => $_POST['principal'],
        "phoneNumber" => $_POST['phonenumber'],
        "mail" => $_POST['mail'],
        "homepageURL" => $_POST['homepage'],
        "students" => $_POST['students'],
            $school ['address'] = array(
                "street" => $_POST['street'],
                "number" => $_POST['number'],
                "zipCode" => $_POST['zipCode'],
                "district" => $_POST['district'],
            ));

//derzeit werden die Fotos nach upload wieder aus dem Ordner gelöscht - später sollen Sie ihrer Schule richtig zugeordnet werden.
    $uploads = "uploads";
    if ($openFile = opendir($uploads)) {
        while (($file = readdir($openFile)) !== False) {
            if ($file != "." && $file != "..") {
                unlink("uploads/" . $file);
            }
        }
    };
    header('Location: ../../index.php');
    $insert = new Insert((new DatabaseConnector())->connect());
    $insert -> newSchool($school);
}