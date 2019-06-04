<?php require_once "database/Delete.php";

$query = new Query((new DatabaseConnector())->connect());
$delete = new Delete((new DatabaseConnector())->connect());

$img = $query->getUploadedImages($_SESSION['user_ID']);

foreach($img as $image) {
    echo ' <form action="" class="uploadedPictures"><img src="data:image/png;base64,' . base64_encode($image['data']) . '"/> <br> 
 <button class="delete" type="submit"> löschen </button> </form>' ;
}