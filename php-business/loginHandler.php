<?php
require_once 'php-business/userDao.php';
require_once 'php-business/userJson.php';

function userLogin($emailLogin, $passwordLogin){
if (isset($_POST['anmelden'])) {
    $found = 0;


    foreach (User::getAll() as $users) {
        if (User::getByMail($emailLogin)) {
            $found = 1;
            if (User::getPassword($emailLogin) == $passwordLogin) {
                $_SESSION['userSessions'] = true;
                    $_SESSION['userName'] = $users->mail;
                    $_SESSION['firstName'] = $users->vorname;
                    $_SESSION['lastName'] = $users->nachname;
                $found = 2;
            }
        }
    }
    if($found == 0){ print_r("Benutzer nicht gefunden");}
    if($found == 1){ print_r ("Passwort falsch!");}
    if($found == 2){ print_r("Login erfolgreich");}
}}