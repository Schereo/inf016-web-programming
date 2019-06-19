<?php
require_once 'database/Query.php';

function userLogin($emailLogin, $passwordLogin)
{
    $loginError = '';
    if (strlen($_POST['emailLogin']) == 0 || strlen($_POST['passwordLogin']) == 0) {
        return '';
    }
    if (isset($_POST['type']) && isset($_POST['anmelden'])) {
        $query = (new Query((new DatabaseConnector())->connect()));
        if (($query->getUserId($emailLogin)) != null && password_verify($passwordLogin, $query->getPassword($emailLogin))) {
            $user_row = $query->getUserRow($query->getUserId($emailLogin));
            $_SESSION['userSessions'] = true;
            $_SESSION['user_ID'] = $user_row['user_id'];
            $_SESSION['userName'] = $user_row->mail;
            $_SESSION['firstName'] = $user_row->vorname;
            $_SESSION['lastName'] = $user_row->nachname;
            $loginError = 'loggedIn';
        } else {
            $loginError = 'loginFehler';

        }
    }
    return $loginError;
}