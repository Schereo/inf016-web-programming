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


//derzeit werden die Fotos nach upload wieder aus dem Ordner gelöscht - später sollen Sie ihrer Schule richtig zugeordnet werden.
$uploads = "uploads";
if ($openFile = opendir($uploads)) {
    while (($file = readdir($openFile)) !== False) {
        if ($file != "." && $file != "..") {
            unlink("uploads/" . $file);
        }
    }
};
$insert = new Insert((new DatabaseConnector())->connect());
$insert->newSchool($school);
header("Location: ../../index.php");


/*    für die Bilder später ^^

if ($openFile = opendir("uploads")) {
    while (($image = readdir($openFile)) !== False) {
        if ($image != "." && $image != "..") {
            $imageName = $image->read();
            $imageSize = filesize("uploads/".$imageName);
            $pathToFile = "uploads/".$imageName;
            $insert = new Insert((new DatabaseConnector())->connect());
            $insert->newImage(1, $imageName, $imageSize, $pathToFile);
        }
    }
};*/