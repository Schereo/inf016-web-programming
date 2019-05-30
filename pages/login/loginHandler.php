<?php
require_once 'database/Query.php';

function userLogin($emailLogin, $passwordLogin)
{
    if (isset($_POST['anmelden'])) {
        $query = (new Query((new DatabaseConnector())->connect()));
        if (($query->getUserId($emailLogin)) !== false) {
            if (password_verify($passwordLogin, $query->getPassword($emailLogin))) {
                $user_row = $query->getUserRow($query->getUserId($emailLogin));
                $_SESSION['userSessions'] = true;
                $_SESSION['user_id'] = $user_row['id'];
                $_SESSION['userName'] = $user_row->mail;
                $_SESSION['firstName'] = $user_row->vorname;
                $_SESSION['lastName'] = $user_row->nachname;
                header("Location: index.php");
                return;

            } else {
                #Wrong password
                $_SESSION['error'] = "Wrong Email or Password.";
                header("Location: index.php");
                return;
            }
        } else {
            #User doesn't exist
            $_SESSION['error'] = "Wrong Email or Password.";
            header("Location: index.php");
            return;
        }
    }
}