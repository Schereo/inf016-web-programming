<?php

$query = new Query((new DatabaseConnector())->connect());
$img = $query->getUploadedImages($_SESSION['user_ID']);

foreach($img as $image) {
    echo '<img src="data:image/png;base64,' . base64_encode($image['data']) . '"/>';
}