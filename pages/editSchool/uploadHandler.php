<?php
require_once "../../database/Insert.php";

if (isset($_FILES['upload'])) {
    $upload = $_FILES['upload'];
    $uploadName = $_FILES['upload']['name'];
    $uploadSize = $_FILES['upload']['size'];
    $uploadError = $_FILES['upload']['error'];
    $uploadTmpName = $_FILES['upload']['tmp_name'];
    $imgProperties = getimagesize($uploadTmpName);
    $imgData = addslashes(file_get_contents($uploadTmpName));

    $uploadExt = explode('.', $uploadName);
    $uploadActuelExt = strtolower(end($uploadExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($uploadActuelExt, $allowed)) {
        if ($uploadError === 0) {
            $uploadNameNew = uniqid('', true) . "." . $uploadActuelExt;
            $destination = 'uploads/' . $uploadNameNew;
            move_uploaded_file($uploadTmpName, $destination);
            $insert->newImage($uploadNameNew, $uploadSize, $imgProperties, $imgData);
            header("Location:../../index.php#anlegen");

        } else if ($uploadError === 1) {
            echo " Ihre Datei ist leider zu groß. ";
        }
    } else {
        echo "Upload fehlgeschlagen";
    }
}

