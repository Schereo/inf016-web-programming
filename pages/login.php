<?php
require_once('php-business/loginHandler.php');

print_r($_SESSION['userSessions'])?>
<section>
    <h2 id="anmelden" class="card-header">Anmelden</h2>
    <form class="login-body" method="post">
        <input class="input" id="login-e-mail" type="text" name="mail" placeholder="E-Mail Adresse">
        <input class="input" id="login-password" type="password" name="passwort" placeholder="Passwort">
        <button class="default-button card-footer button-size" type="submit" name="anmelden">Anmelden</button>
        <a href="#">Passwort vergessen</a>
    </form>
</section>