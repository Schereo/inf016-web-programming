<?php
    $img = $query->getUploadedImages($school['school_id']);
if (isset($img[0]['data'])) {
    echo '<img class = "responsive " alt="Kein Bild vorhanden" src="data:image/jpeg;base64,' . base64_encode($img[0]['data']) . '"/>';
}
