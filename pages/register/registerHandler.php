<?php
require_once 'db/userDao.php';
require_once 'db/userJson.php';
function registerUser($forename, $surname, $mailInput, $passwordInput, $passwordMatch)
{
    if (isset($_POST['registrieren'])) {
        if ($passwordInput == $passwordMatch && !($mailInput == User::getByMail($mailInput))) {
            $newUser = User::createUser($forename, $surname, $mailInput, $passwordInput);
            User::register($newUser);
            print_r("Registrierung erfolgreich");
        } else {
            print_r("Benutzer bereits vorhanden.");
        }
    }
}