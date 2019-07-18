<?php

$img = $query->getUploadedImagesEncoded($school['school_id']);
if(!empty($img)): ;

?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Das erste Bild soll das erste Ergebnis aus der Datenbank sein -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="data:image/jpeg;base64,<?= $img[0] ?>" data-no-lazy="1" class="responsive">
        </div>
        <?php if (is_array($img)): foreach (array_slice($img,1) as $images) { ?>
            <!-- Für jedes weiter Bild wird ein Item angelegt -->
            <div class="item">
                <img src="data:image/jpeg;base64,<?= $images ?>" data-no-lazy="1" class="responsive">
            </div>
        <?php } endif;
        ?>
    </div>
    <!-- Das fügt die Pfeile zu den Bildern hinzu -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
 <?php endif; ?>




