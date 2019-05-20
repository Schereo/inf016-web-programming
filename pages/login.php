<?php
if (file_exists("creds.json") &&
    is_readable("creds.json")) {
    $myfile = file_get_contents("creds.json") or die("Unable to open file!");
    $credentials = json_decode($myfile);
}
if (isset($_POST['anmelden'])) {
    $found = 0;
    $usernameInput = strip_tags($_POST['mail']);
    $passwordInput = strip_tags($_POST['passwort']);

    foreach ($credentials->users as $users) {
        if ($users->mail == $usernameInput) {
            $found = 1;
            if ($users->password == $passwordInput) {
                $_SESSION['userSessions'] = array(
                    'name' => $users->mail,
                    'login' => 'login');
                $found = 2;
            }
        }
    }
    if($found == 0){ print_r("Benutzer nicht gefunden");}
    if($found == 1){ print_r ("Passwort falsch!");}
    if($found == 2){ print_r("Login erfolgreich");}
}
?>
<section>
    <h2 id="anmelden" class="card-header">Anmelden</h2>
    <form class="login-body" method="post">
        <input class="input" id="login-e-mail" type="text" name="mail" placeholder="E-Mail Adresse">
        <input class="input" id="login-password" type="password" name="passwort" placeholder="Passwort">
        <button class="default-button card-footer button-size" type="submit" name="anmelden">Anmelden</button>
        <a href="#">Passwort vergessen</a>
    </form>
</section>