<?php
require_once "../../database/Insert.php";
session_start();

if (isset($_FILES['upload'])) {
    $imgName = $_FILES['upload']['name'];
    $imgSize = $_FILES['upload']['size'];
    $imgMime = $_FILES['upload']['type'];

    $uploadError = $_FILES['upload']['error'];
    $allowed = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    $extension = pathinfo($imgName, PATHINFO_EXTENSION);

    if ($uploadError === 0 && in_array($extension, $allowed)) {
        $imgData = file_get_contents($_FILES['upload']['tmp_name']);
        $uploadNameNew = uniqid('', true) . "." . $extension;
        if(isset($school['school_id'])){
            $insert->newImage($uploadNameNew, $imgSize, $imgMime, $imgData, $school['school_id']);
        }
        $insert->newImage($uploadNameNew, $imgSize, $imgMime, $imgData, $_SESSION['user_ID']);
        $_SESSION['uploadError'] = "Upload erfolgreich";
        header("Location:../../index.php#anlegen");
    } else if ($uploadError === 1) {
        $_SESSION['uploadError'] = "Ihr Bild ist zu groß";
        header("Location:../../index.php#anlegen");
    } else {
        $_SESSION['uploadError'] = "Fehlgeschlagen - bitte nur jpg, jpeg oder png hochladen";
        header("Location:../../index.php#anlegen");
    }
}

