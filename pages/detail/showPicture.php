<div></div>
<?php
$img = $query->getUploadedImages($school['school_id']);
$pictureIterator = 0;
if (is_array($img)) {
    $amountOfPictures = sizeof($img);
}
?>
<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-inner" role="listbox">
            <div class="slide current">
                <div class="content">
                    <img src="data:image/jpeg;base64,<?= $img[0] ?>" alt="Chania">
                </div>
            </div>

            <?php foreach ($img

            as $images) { ?>
            <div class="slide">
                <div class="content">
                    <img src="data:image/jpeg;base64,<?= $images ?>" alt="Flower" width="460" height="345">
                </div>

                <?php }
                ?>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
