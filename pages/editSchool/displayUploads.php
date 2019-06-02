<?php
if(!is_dir("pages/editSchool/uploads")){
    mkdir("pages/editSchool/uploads");
}
$uploads = "pages/editSchool/uploads";
if ($openFile = opendir($uploads)) {
    while (($file = readdir($openFile)) !== False) {
        if ($file != "." && $file != "..")
            echo " <img src='$uploads/$file'>";
    }
}