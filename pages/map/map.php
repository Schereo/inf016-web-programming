<h2 id="map" class="card-header">Map</h2>
<section class="card-body mapcontainer">
    <div class="mapimage">
        <iframe title="Map of Oldenburg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2393.0944202097276!2d8.187361315219686!3d53.14439997993721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b6dfb1330a433f%3A0xcd64e0ccd2c6150b!2sBBS+Berufsbildende+Schulen+Haarentor!5e0!3m2!1sde!2sde!4v1555402008182!5m2!1sde!2sde"
                style="border:0"></iframe>
    </div>
    <section class="filter">
        <h2 class="mapfilterheader">Filter</h2>
        <div class="mapfilter">
            <h5 id="map-filter-body-header">Schultyp</h5>
            <div class="mapfilterbody">
                <button type="submit" name="filtern" class="default-button filter-button" id="gymnasien">Gymnasien</button>
                <button type="submit" name="filtern" class="default-button filter-button" id="oberschulen">Oberschulen</button>
                <button type="submit" name="filtern" class="default-button filter-button" id="bbs">BBS</button>
                <button type="submit" name="filtern" class="default-button filter-button" id="gesamtschulen">Gesamtschulen</button>
                <button type="submit" name="filtern" class="default-button filter-button" id="grundschulen">Grundschulen</button>
            </div>

            <div id="filter-search-headline">Stadtteil</div>
            <form>
                <select class="input map-filter-schools">
                    <?php foreach ($districts as $district): ?>
                        <option value="<?=$district?>"><?=$district?></option>
                    <?php endforeach;
                    unset($district);?>
                </select>
            </form>
            <div class="mapfilterfooter">
                <button class="default-button button-size" type="submit" name="filtern">Filtern</button>
            </div>

        </div>
    </section>
</section>