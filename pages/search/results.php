<section>
    <?php if (isset($isAjax) && $isAjax === true) {
        require_once "pages/search/schoolView.php";
    } ?>
    <div id="results" class="school-cards-container" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php if (!empty($schools)):
            foreach ($schools as $school):?>
                <div class="small-card">
                    <div class="small-card-header">
                        <h2><?= $school['name'] ?></h2>
                    </div>
                    <div class="small-card-body">
                        <div>  <?php include 'pages/search/showPicture.php' ?> </div>
                        <ul class="card-list">
                            <li><b>Schulform</b> <?= $school['school_type'] ?></li>
                            <li><b>Stadtteil</b> <?= $school['district'] ?></li>
                            <li><b>Schüler</b> <?= $school['students'] ?></li>
                            <li><b>Berwertung</b>
                                <?php if ($school['ratingAvg'] == 0): ?>&#x2606 &#x2606 &#x2606 &#x2606 &#x2606<?php endif; ?>
                                <?php if ($school['ratingAvg'] == 1): ?>&#x2605 &#x2606 &#x2606 &#x2606 &#x2606<?php endif; ?>
                                <?php if ($school['ratingAvg'] == 2): ?>&#x2605 &#x2605 &#x2606 &#x2606 &#x2606<?php endif; ?>
                                <?php if ($school['ratingAvg'] == 3): ?>&#x2605 &#x2605 &#x2605 &#x2606 &#x2606<?php endif; ?>
                                <?php if ($school['ratingAvg'] == 4): ?>&#x2605 &#x2605 &#x2605 &#x2605 &#x2606<?php endif; ?>
                                <?php if ($school['ratingAvg'] == 5): ?>&#x2605 &#x2605 &#x2605 &#x2605 &#x2605<?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="small-card-footer">
                        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <button class="default-button button-size" value="<?= $school['school_id'] ?>" name="ID">
                                Details
                            </button>
                        </form>
                        <form action="<?= $school['homepage_url'] ?>">
                            <button class="default-button button-size">Homepage</button>
                        </form>
                    </div>
                </div>
            <?php endforeach;
        endif; ?>
    </div>
</section>