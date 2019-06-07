<?php
    $img = $query->getUploadedImages($school['school_id']);
    echo '<img class = "responsive " src="data:image/jpeg;base64,'.base64_encode( $img[0]['data'] ).'"/>';

