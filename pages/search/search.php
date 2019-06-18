<section>
    <?php
    require_once 'pages/selectItems.php';
    require_once 'pages/search/schoolView.php'; ?>
    <h2 id="suche" class="card-header">Schule Suchen</h2>
    <div class="card-body">
        <form class="search-container" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input class="input" id="searchInput" type="text" name="schoolName" placeholder="Schulname">
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
        <?php include 'pages/search/results.php'; ?>
    </div>
</section>