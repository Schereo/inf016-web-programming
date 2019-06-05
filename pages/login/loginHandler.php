<?php
require_once 'database/Query.php';

function userLogin($emailLogin, $passwordLogin)
{
    if (isset($_POST['type'])) {
        if (isset($_POST['anmelden'])) {
            $query = (new Query((new DatabaseConnector())->connect()));
            if (($query->getUserId($emailLogin)) != null) {
                if (password_verify($passwordLogin,$query->getPassword($emailLogin))){
                    $user_row = $query->getUserRow($query->getUserId($emailLogin));
                    $_SESSION['userSessions'] = true;
                    $_SESSION['user_ID'] = $user_row['user_id'];
                    $_SESSION['userName'] = $user_row->mail;
                    $_SESSION['firstName'] = $user_row->vorname;
                    $_SESSION['lastName'] = $user_row->nachname;
                    $_SESSION['error'] = "Login erfolgreich";
                    header("Location: index.php");
                    return;
                } else {
                    #Wrong password
                    $_SESSION['error'] ="Falsches Passwort";
                    header("Location: index.php");
                    return;
                }
            } else {
                #User doesn't exist
                $_SESSION['error'] = "Benutzer nicht vorhanden";
                header("Location: index.php");
                return;
            }
        }
    }
}