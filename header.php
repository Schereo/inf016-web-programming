<nav class="nav-container">
    <a href="<?= $depth?>" class="logo"><img src="<?= $depth?>assets/header.png" alt="oscolia logo"></a>
    <div class="nav-items">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="index.php#suche">Schule suchen</a>
            <a href="index.php#map">Schulen Karten</a>
            <a href="index.php#anlegen">Schule anlegen</a>
            <?php if (isset($_SESSION['userSessions'])) { ?>
                <a href="pages/logout/logout.php" onclick="logout()">Logout</a>
            <?php } else { ?>
                <a id="anmeldenLink" href="index.php#anmelden">Anmelden</a>
                <a id="registrierenLink" href="index.php#registrieren">Registrieren</a>
            <?php } ?>
        </div>
    </div>
</nav>
