<?php

if(isset($_POST['id'])){
    facebookLogin($_POST['id']);
}
function userLogin($emailLogin, $passwordLogin)
{
    require_once 'database/Query.php';
    $loginError = '';
    if (strlen($_POST['emailLogin']) == 0 || strlen($_POST['passwordLogin']) == 0) {
        return '';
    }
    if (isset($_POST['type']) && isset($_POST['anmelden'])) {
        $query = (new Query((new DatabaseConnector())->connect()));
        if (($query->getUserId($emailLogin)) != null && password_verify($passwordLogin, $query->getPassword($emailLogin))) {
            session_start();
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

function facebookLogin($id){
    session_start();
    $_SESSION['userSessions'] = true;
    $_SESSION['user_ID'] = $id;
}
