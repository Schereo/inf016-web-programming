<?php
if (file_exists("creds.json") &&
    is_readable("creds.json")) {
    $myfile = file_get_contents("creds.json") or die("Unable to open file!");
    $credentials = json_decode($myfile);

}
if (isset($_POST['registrieren'])) {
    $alreadysaved = false;
    $forename = strip_tags($_POST['vorname']);
    $surname = strip_tags($_POST['nachname']);
    $mailInput = strip_tags($_POST['email']);
    $passwordInput = strip_tags($_POST['passwort']);
    $passwordMatch = strip_tags($_POST['passwort2']);

    foreach ($credentials->users as $users) {

        if ($mailInput == $users->mail) {
            $alreadysaved = true;
            break;
        }
    }

    if ($passwordInput == $passwordMatch) {
        $newUserArray = array('vorname'=>$forename,'nachname'=>$surname,'mail'=>$mailInput,'password'=>$passwordInput);
        $credentials->users.array_push($newUserArray);
        file_put_contents($myfile);
    }

    if ($alreadysaved) {
        print_r("Bereits vorhanden Bruder");
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