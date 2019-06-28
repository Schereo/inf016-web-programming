<?php require_once "pages/search/schoolView.php"?>
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
            <input type="hidden" name="allSchools" value="<?php echo 'hi '.$schools;?>" id="allSchools" />
            <h5 id="map-filter-body-header">Schultyp</h5>
            <form class="mapfilterbody" method="POST" id="schoolTypeFilter">
                <button type="submit" name="filtern" class="default-button filter-button" id="gymnasien" value="Ammerländer Heerstraße 69 Oldenburg">
                    Gymnasien
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="oberschulen"
                        value="Osterkampsweg 80 26131 Oldenburg">Oberschulen
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="bbs"
                        value=" 26842 Ostrhauderfehn">BBS
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="gesamtschulen"
                        value="Uhlhornsweg Oldenburg">Gesamtschulen
                </button>
                <button type="submit" name="filternType" class="default-button filter-button" id="grundschulen"
                        value="Kennedyteich Oldenburg">Grundschulen
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