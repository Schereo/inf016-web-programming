<section>
    <?php
    require_once 'php-business/schoolDao.php';
    require_once 'php-business/schoolJson.php';
    require_once 'php-business/schoolHandler.php';
    require_once 'php-business/schoolView.php'; ?>
    <h2 id="suche" class="card-header">Schule Suchen</h2>
    <div class="card-body">
        <form class="search-container" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input class="input" type="text" name="schoolName" placeholder="Schulname">
            <select class="input" name="schoolType">
                <option value="sto" disabled selected>Schulform</option>
                <?php foreach ($schoolforms as $schoolform): ?>
                    <option value="<?=$schoolform?>"><?=$schoolform?></option>
                <?php endforeach;
                unset($schoolform);?>
            </select>
            <select class="input" name="district">
                <option value="sto" disabled selected>Stadtteil</option>
                <?php foreach ($districts as $district): ?>
                    <option value="<?=$district?>"><?=$district?></option>
                <?php endforeach;
                unset($district);?>
            </select>
            <button class="default-button button-size" type="submit">Suchen</button>
        </form>
        <div class="school-cards-container" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php if(!empty($schools)):
                foreach( $schools as $school):?>
            <div class="small-card">
                <div class="small-card-header">
                    <h2><?=$school->name?></h2>
                </div>
                <div class="small-card-body">
                    <img src="/assets/images/<?=$school->imagePath?>" alt="Bild zeigt <?=$school->name?>" class="responsive">
                    <ul class="card-list">
                        <li><b>Schulform</b> <?=$school->schoolTyp?></li>
                        <li><b>Stadtteil</b> <?=$school->address->district?></li>
                        <li><b>Schüler</b> <?=$school->students?></li>
                        <li><b>Berwertung</b>
                            <?php if($school->ratingAvg == 0):?>&#x2606 &#x2606 &#x2606 &#x2606 &#x2606<?php endif;?>
                            <?php if($school->ratingAvg == 1):?>&#x2605 &#x2606 &#x2606 &#x2606 &#x2606<?php endif;?>
                            <?php if($school->ratingAvg == 2):?>&#x2605 &#x2605 &#x2606 &#x2606 &#x2606<?php endif;?>
                            <?php if($school->ratingAvg == 3):?>&#x2605 &#x2605 &#x2605 &#x2606 &#x2606<?php endif;?>
                            <?php if($school->ratingAvg == 4):?>&#x2605 &#x2605 &#x2605 &#x2605 &#x2606<?php endif;?>
                            <?php if($school->ratingAvg == 5):?>&#x2605 &#x2605 &#x2605 &#x2605 &#x2605<?php endif;?>
                        </li>
                    </ul>
                </div>
                <div class="small-card-footer">
                    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <button class="default-button button-size" value="<?=$school->id?>" name="ID">Details</button>
                    </form>
                    <form action="<?=$school->homepageUrl?>">
                        <button class="default-button button-size">Homepage</button>
                    </form>
                </div>
            </div>
            <?php endforeach;
            endif;?>
        </div>
    </div>
</section>