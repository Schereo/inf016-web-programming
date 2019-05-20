<?php
require_once 'php-business/userDao.php';
require_once 'php-business/userJson.php';
function registerUser($forename, $surname, $mailInput, $passwordInput, $passwordMatch)
{
    if (isset($_POST['registrieren'])) {
        $alreadysaved = false;
        if (is_array(User::getAll())) {
            foreach (User::getAll() as $users) {
                if ($mailInput == User::getByMail($mailInput)) {
                    $alreadysaved = true;
                    break;
                }
            }
        }

        if ($passwordInput == $passwordMatch && $alreadysaved == false) {
            $newUser = User::createUser($forename, $surname, $mailInput, $passwordInput);
            User::register($newUser);
            print_r("Registrierung erfolgreich");
        }

        if ($alreadysaved) {
            print_r("Benutzer bereits vorhanden.");
        }
    }
}