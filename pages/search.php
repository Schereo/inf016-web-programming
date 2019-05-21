<section>
    <?php
    include 'php-business/schoolDao.php';
    include 'php-business/schoolJson.php';
    include 'php-business/schoolView.php'?>
    <h2 id="suche" class="card-header">Schule Suchen</h2>
    <div class="card-body">
        <form class="search-container" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input class="input" type="text" name="schoolName" placeholder="Schulname">
            <select class="input" name="schoolType">
                <option value="sto" disabled selected>Schulform</option>
                <option value="Grundschule">Grundschule</option>
                <option value="Gymnasium">Gymnasium</option>
                <option value="Oberschule">Oberschule</option>
                <option value="Förderschule">Förderschule</option>
                <option value="Integrierte Gesamtschule">Integrierte Gesamtschule</option>
                <option value="Berufsbildende Schule">Berufsbildende Schule</option>
            </select>
            <select class="input" name="district">
                <option value="sto" disabled selected>Stadtteil</option>
                <option value="Alexandersfeld">Alexandersfeld</option>
                <option value="Bloherfelde">Bloherfelde</option>
                <option value="Bürgerfelde">Bürgerfelde</option>
                <option value="Donnerschwee">Donnerschwee</option>
                <option value="Etzhorn">Etzhorn</option>
                <option value="Eversten">Eversten</option>
                <option value="Innenstadt">Innenstadt</option>
                <option value="Kreyenbrück">Kreyenbrück</option>
                <option value="Krusenbusch">Krusenbusch</option>
                <option value="Nadorst">Nadorst</option>
                <option value="Neuenwege">Neuenwege</option>
                <option value="Ofenerdiek">Ofenerdiek</option>
                <option value="Ohmstede">Ohmstede</option>
                <option value="Osternburg">Osternburg</option>
                <option value="Tweelbäke">Tweelbäke</option>
                <option value="Wechloy">Wechloy</option>
            </select>
            <button class="default-button button-size" type="submit">Suchen</button>
        </form>
        <div class="school-cards-container">
            <?php if(!empty($schools)):
                foreach( $schools as $school):?>
            <div class="small-card">
                <div class="small-card-header">
                    <h2><?=$school->name?></h2>
                </div>
                <div class="small-card-body">
                    <img src="/assets/images/<?=$school->imagePath?>" alt="Bild zeigt <?=$school->name?>" class="responsive">
                    <ul class="card-list">
                        <li><?=$school->schoolTyp?></li>
                        <li><?=$school->address->district?></li>
                        <li><?=$school->students?></li>
                        <li>Bewertung</li>
                    </ul>
                </div>
                <div class="small-card-footer">
                    <a href="#">Details anzeigen</a>
                    <a href="<?=$school->homepageUrl?>" target="_blank">Zur Website</a>
                </div>
            </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>