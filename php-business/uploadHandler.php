<?php
if (isset($_FILES['upload'])) {
    $upload = $_FILES['upload'];
    $uploadName = $_FILES['upload']['name'];
    $uploadSize = $_FILES['upload']['size'];
    $uploadError = $_FILES['upload']['error'];
    $uploadTmpName = $_FILES['upload']['tmp_name'];

    $uploadExt = explode('.', $uploadName);
    $uploadActuelExt = strtolower(end($uploadExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($uploadActuelExt, $allowed)) {
        if ($uploadError === 0) {
            if ($uploadSize < 1000000) {
                $uploadNameNew = uniqid('', true) . "." . $uploadActuelExt;
                $destination = 'uploads/'.$uploadNameNew;
                move_uploaded_file($uploadTmpName, $destination);
                header("Location:../index.php#anlegen");
            } else {
            }
        } else {
        }
    }
}

