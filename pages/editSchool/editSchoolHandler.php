<?php
$depth = "../../";
require_once $depth."database/Update.php";

function editSchool()
{
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
            ]]
        ;

//derzeit werden die Fotos nach upload wieder aus dem Ordner gelöscht - später sollen Sie ihrer Schule richtig zugeordnet werden.
    $uploads = "uploads";
    if ($openFile = opendir($uploads)) {
        while (($file = readdir($openFile)) !== False) {
            if ($file != "." && $file != "..") {
                unlink("uploads/" . $file);
            }
        }
    };

    $update = new Update((new DatabaseConnector())->connect());
    $update -> editSchool($school);
    header("Location:../../index.php");
}