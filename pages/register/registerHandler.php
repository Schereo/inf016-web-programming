<?php
require_once "pages/login/LoginHandler.php";
require_once "database/Insert.php";
require_once "database/Query.php";

    function registerUser($first_name, $last_name, $email, $password, $password_match )
    {
        if (strlen($_POST['emailReg']) == 0 || strlen($_POST['passwordReg']) == 0 || strlen($_POST['password2Reg']) == 0
            && strpos($_POST['emailReg'], "@") === false) {
            return '';
        }
        $query = (new Query((new DatabaseConnector())->connect()));
        if ($query->getUserId($email) != null) {
            $registerError = 'existiert';
        } elseif ($password !== $password_match) {
            $registerError = 'verschieden';
        } else {
            $insert = new Insert((new DatabaseConnector())->connect());
            $insert->newUser($email, $password, $first_name, $last_name);
            $user_row = $query->getUserRow($query->getUserId($email));
            $_SESSION['userSessions'] = true;
            $_SESSION['user_ID'] = $user_row['user_id'];
            $_SESSION['userName'] = $user_row->mail;
            $_SESSION['firstName'] = $user_row->vorname;
            $_SESSION['lastName'] = $user_row->nachname;
            $registerError = 'loggedIn';
        }
        return $registerError;
}