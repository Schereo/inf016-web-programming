<?php
$query = new Query((new DatabaseConnector())->connect());

$img = $query->getUploadedImages($school['school_id']);

foreach ($img as $image) {
    echo '<form action="pages/editSchool/deleteImgHandler.php" method="post" class="uploadedPictures"><img src="data:image/png;base64,' . base64_encode($image['data']) . '"/> <br> 
 <button class="delete" type="submit" name="delete_img" value="' . $image['image_id'] . '"/> löschen </button> </form>';
}