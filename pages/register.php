<?php require_once('php-business/registerHandler.php') ; ?>
<section>
    <h2 id=registrieren class="card-header">Registrieren</h2>
    <form class="register-body" method="post">
        <input class="input" type="text" name="firstNameReg" placeholder="Vorname">
        <input class="input" type="text" name="lastNameReg" placeholder="Nachname">
        <input class="input" type="email" name="emailReg" placeholder="Email">
        <input class="input" type="password" name="passwortReg" placeholder="Passwort">
        <input class="input" type="password" name="passwort2Reg" placeholder="Passwort wiederholen">
        <button class="default-button button-size" type="submit" name="registrieren"> Registrieren</button>
    </form>
</section>