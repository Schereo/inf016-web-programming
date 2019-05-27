<nav class="nav-container">
    <a href="/" class="logo"><img src="<?= $depth?>assets/header.png" alt="oscolia logo"></a>
    <div class="nav-items">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="index.php#suche">Schule suchen</a>
            <a href="index.php#map">Schulen Karten</a>
            <a href="index.php#anlegen">Schule anlegen</a>
            <?php if ($_SESSION['userSessions']) { ?>
                <a href="pages/logout/logout.php">Logout</a>
            <?php } else { ?>
                <a href="index.php#anmelden">Anmelden</a>
                <a href="index.php#registrieren">Registrieren</a>
            <?php } ?>
        </div>
    </div>
</nav>
