<?php require_once('pages/userHandler/registerHandler.php')?>
<section>
    <h2 id=registrieren class="card-header">Registrieren</h2>
    <form class="register-body" method="post">
        <input class="input" type="text" name="firstName" placeholder="Vorname">
        <input class="input" type="text" name="lastName" placeholder="Nachname">
        <input class="input" type="email" name="email" placeholder="Email">
        <input class="input" type="password" name="passwort" placeholder="Passwort">
        <input class="input" type="password" name="passwort2" placeholder="Passwort wiederholen">
        <button class="default-button button-size" type="submit" name="registrieren"> Registrieren</button>
    </form>
</section>