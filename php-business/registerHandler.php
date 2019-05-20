<?php
if (isset($_POST['registrieren'])) {
    $alreadysaved = false;
    $forename = strip_tags($_POST['firstName']);
    $surname = strip_tags($_POST['lastName']);
    $mailInput = strip_tags($_POST['email']);
    $passwordInput = strip_tags($_POST['passwort']);
    $passwordMatch = strip_tags($_POST['passwort2']);

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