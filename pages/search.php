<section>
    <h2 id="suche" class="card-header">Schule Suchen</h2>
    <div class="card-body">
        <form class="search-container" method="GET">
            <input class="input" type="text">
            <select class="input" name="schoolType">
                <option value="sto" disabled selected>Schulform</option>
                <option value="form1">Grundschule</option>
                <option value="form2">Gymnasium</option>
                <option value="form3">Oberschule</option>
                <option value="form4">Förderschule</option>
                <option value="form5">Integrierte Gesamtschule</option>
                <option value="form6">Berufsbildende Schule</option>
            </select>
            <select class="input" name="district">
                <option value="sto" disabled selected>Stadtteil</option>
                <option value="st1">Alexandersfeld</option>
                <option value="st2">Bloherfelde</option>
                <option value="st3">Bürgerfelde</option>
                <option value="st4">Donnerschwee</option>
                <option value="st5">Etzhorn</option>
                <option value="st6">Eversten</option>
                <option value="st7">Gemeinde Bad Zwischenahn</option>
                <option value="st8">Innenstadt</option>
                <option value="st9">Kreyenbrück</option>
                <option value="st10">Krusenbusch</option>
                <option value="st11">Nadorst</option>
                <option value="st12">Neuenwege</option>
                <option value="st13">Ofenerdiek</option>
                <option value="st14">Ohmstede</option>
                <option value="st15">Osternburg</option>
                <option value="st16">Tweelbäke</option>
                <option value="st17">Wechloy</option>
            </select>
            <button class="default-button button-size" type="submit" name="anmelden">Suchen</button>
        </form>
        <div class="school-cards-container">
            <?php if(is_array(School::readJson()['schools'])){foreach(School::getAll() as $school): ?>
            <div class="small-card">
                <div class="small-card-header">
                    <h2><?=$school["name"]?></h2>
                </div>
                <div class="small-card-body">
                    <img src="/assets/images/<?=$school["imagePath"]?>" alt="Bild zeigt <?=$school["name"]?>" class="responsive">
                    <ul class="card-list">
                        <li><?=$school["schoolTyp"]?></li>
                        <li><?=$school["address"]["district"]?></li>
                        <li><?=$school["students"]?></li>
                        <li>Bewertung</li>
                    </ul>
                </div>
                <div class="small-card-footer">
                    <a href="#">Details anzeigen</a>
                    <a href="<?=$school["homepageUrl"]?>" target="_blank">Zur Website</a>
                </div>
            </div>
            <?php endforeach; }?>
        </div>
    </div>
</section>