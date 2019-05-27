<?php
require_once 'db/userDao.php';
require_once 'db/userJson.php';

function userLogin($emailLogin, $passwordLogin)
{
    if (isset($_POST['anmelden'])) {
        $found = 0;
        foreach (User::getAll() as $users) {
            if ($emailLogin == $users->mail) {
                $found = -1;
                if ($users->password == $passwordLogin) {
                    $_SESSION['userSessions'] = true;
                    $_SESSION['userName'] = $users->mail;
                    $_SESSION['firstName'] = $users->vorname;
                    $_SESSION['lastName'] = $users->nachname;
                    $_SESSION['userID'] = $users->userID;
                    $found = 2;
                }
            }
        }
        if ($found == 0) {
            print_r("Benutzer nicht gefunden");
        }
        if ($found == -1) {
            print_r("Passwort falsch!");
        }
        if ($found == 2) {
            print_r("Login erfolgreich");
        }
    }
}