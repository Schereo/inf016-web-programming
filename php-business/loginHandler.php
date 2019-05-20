<?php
if (isset($_POST['anmelden'])) {
    $found = 0;
    $usernameInput = strip_tags($_POST['mail']);
    $passwordInput = strip_tags($_POST['passwort']);

    foreach (User::getAll() as $users) {
        if (User::getByMail($usernameInput)) {
            $found = 1;
            if (User::getPassword($usernameInput) == $passwordInput) {
                $_SESSION['userSessions'] = array(
                    'username' => $users->mail,
                    'firstName' => $users->vorname,
                    'lastName' => $users->nachname,
                    'login' => 'login');
                $found = 2;
            }
        }
    }
    if($found == 0){ print_r("Benutzer nicht gefunden");}
    if($found == 1){ print_r ("Passwort falsch!");}
    if($found == 2){ print_r("Login erfolgreich");}
}