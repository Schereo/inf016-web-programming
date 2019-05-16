<?php
if (file_exists("cred.txt") &&
    is_readable("cred.txt")) {
    $myfile = "cred.txt";
}
if (isset($_POST['registrieren'])) {
    $matchingPW = false;
    $username = strip_tags($_POST['email']);
    while($matchingPW == false) {
        if ($_POST['passwort'] = $_POST['passwort2']) {
            $password = strip_tags($_POST['passwort']);
            file_put_contents($myfile, $username, FILE_APPEND);
            file_put_contents($myfile, $password, FILE_APPEND);
            $matchingPW = true;
        } else {
            echo("Passwörter stimmen nicht überein");
        }
    }
}
?>
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