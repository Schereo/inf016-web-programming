<?php
require_once "../../database/Insert.php";

if (isset($_FILES['upload'])) {
    $imgName = $_FILES['upload']['name'];
    $imgSize = $_FILES['upload']['size'];
    $imgMime = $_FILES['upload']['type'] ;
    $imgData = file_get_contents($_FILES['upload']['tmp_name']);

    $uploadError = $_FILES['upload']['error'];
    $allowed = array('jpg', 'jpeg', 'png');
    $extension = pathinfo($imgName, PATHINFO_EXTENSION);

    if (in_array($extension, $allowed)) {
        if ($uploadError === 0) {
            $uploadNameNew = uniqid('', true) . "." . $extension;
            $insert->newImage($uploadNameNew, $imgSize, $imgMime, $imgData);
            header("Location:../../index.php#anlegen");

        } else if ($uploadError === 1) {
            echo " Ihre Datei ist leider zu groß. ";
        }
    } else {
        echo "Bitte nur jpg, jpeg oder png Bilder hochladen.";
    }
}

