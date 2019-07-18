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
        if (isset($_POST['id'])) {
            $insert->newImage($uploadNameNew, $imgSize, $imgMime, $imgData, $_POST['id']);
        } else {
            $insert->newImage($uploadNameNew, $imgSize, $imgMime, $imgData, $_SESSION['user_ID'] + 1000);
        }
        echo "Upload erfolgreich";
    } else if ($uploadError === 1) {
        echo "Ihr Bild ist zu groß";
    } else {
        echo "Fehlgeschlagen - bitte nur jpg, jpeg oder png hochladen";
    }
}

