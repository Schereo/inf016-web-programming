<?php

$query = new Query((new DatabaseConnector())->connect());

$img = $query->getUploadedImages($_SESSION['user_ID']);

if(is_array($img)):
foreach ($img as $image) {?> '<form action="pages/editSchool/deleteImgHandler.php" method="post" class="uploadedPictures"><img src="data:image/jpeg;base64,<?= $image ?>"/> <br>
 <button class="delete" type="submit" name="delete_img" value="' . $image['image_id'] . '"/> löschen </button> </form>';
<?php } endif ?>