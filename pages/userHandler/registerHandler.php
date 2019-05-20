<?php
$credentialFile = "creds.json";
if (file_exists($credentialFile) &&
    is_readable($credentialFile)) {
    $myfile = file_get_contents("creds.json") or die("Unable to open file!");
    $credentials = json_decode($myfile);

}
if (isset($_POST['registrieren'])) {
    $alreadysaved = false;
    $forename = strip_tags($_POST['firstName']);
    $surname = strip_tags($_POST['lastName']);
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
        $newUserArray = array('vorname' => $forename, 'nachname' => $surname, 'mail' => $mailInput, 'password' => $passwordInput);
        $credentials->users[] = $newUserArray;
        file_put_contents($credentialFile, json_encode($credentials));
        print_r("Registrierung erfolgreich");
    }

    if ($alreadysaved) {
        print_r("Benutzer bereits vorhanden.");
    }
}