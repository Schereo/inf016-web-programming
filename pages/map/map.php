<?php if (isset($isAjax) && $isAjax === true) {
        require_once "pages/search/schoolView.php";
    }
    ?>
<script src="pages/map/map.js"></script>
<h2 class="card-header">Map</h2>
<section class="card-body mapcontainer">
    <div class="mapimage">
        <div id="map">
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYy2BPNDvAPoFORz_7HjpcSeNeAtmvsFQ&callback=initMap">
            </script>
        </div>
    </div>
    <section class="filter">
        <h2 class="mapfilterheader">Filter</h2>
        <div class="mapfilter">
            <input type="hidden" name="allSchools" value="<?=$schools;?>" id="allSchools" />
            <script>
                var allSchools = <?php echo json_encode($schools, JSON_PRETTY_PRINT);?></script>
            <h5 id="map-filter-body-header">Schultyp</h5>
            <form class="mapfilterbody" method="POST" id="schoolTypeFilter">
                <button type="submit" name="filtern" class="default-button filter-button" id="gymnasien" value="Gymnasium">
                    Gymnasien
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="oberschulen"
                        value="Oberschule">Oberschulen
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="bbs"
                        value="BBS">BBS
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="gesamtschulen"
                        value="Gesamtschule">Gesamtschulen
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="grundschulen"
                        value="Grundschule">Grundschulen
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="resetMarkers" value="resetMarkers">Alle Schulen
                </button>
            </form>
            <div id="filter-search-headline">Stadtteil</div>
            <form>
                <select class="input map-filter-schools form-control" id="districtFilter">
                    <?php foreach ($districts as $district): ?>
                        <option value="<?= $district ?>"><?= $district ?></option>
                    <?php endforeach;
                    unset($district); ?>
                </select>
            </form>
            <div class="mapfilterfooter">
                <button class="default-button button-size" type="submit" name="filtern" id="addMarks">Filtern</button>
            </div>
        </div>

        </form>
    </section>
</section>