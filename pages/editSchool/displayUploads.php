<?php
require_once __DIR__ . "/../../database/Query.php";

$id = $_POST['id'];
if (isset($school['school_id'])) {
    $id = $school['school_id'];
}
$query = new Query((new DatabaseConnector())->connect());
$img = $query->getUploadedImages($id);

foreach ($img as $image) {
    echo ' 
<form id ="delete_form" method="post" class="uploadedPictures">
 <img src="data:image/png;base64,' . base64_encode($image['data']) . '"/> 
<br><button id="delete_img" class="delete" type="submit" name="delete_img" value="' . $image['image_id'] . '" onclick="deletePic(this.value)"> löschen </button> 
 </form>';
}