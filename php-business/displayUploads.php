<?php
if(!is_dir("php-business/uploads")){
    mkdir("php-business/uploads");
}
$uploads = "php-business/uploads";
if ($openFile = opendir($uploads)) {
    while (($file = readdir($openFile)) !== False) {
        if ($file != "." && $file != "..")
            echo " <img src='$uploads/$file'>";
    }
}
