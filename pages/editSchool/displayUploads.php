<?php

$query = new Query((new DatabaseConnector())->connect());
$img = $query->getUploadedImages();

echo '<img src="data:image/png;base64,' . base64_encode($img['data']) . '"/>';