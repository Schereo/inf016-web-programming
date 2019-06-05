<?php
require_once "pages/login/LoginHandler.php";
require_once "database/Insert.php";
require_once "database/Query.php";

    function registerUser($first_name, $last_name, $email, $password, $password_match )
    {
        if (strlen($_POST['emailReg']) == 0 || strlen($_POST['passwordReg']) == 0 || strlen($_POST['password2Reg']) == 0) {
            $_SESSION['error'] = "Email, Passwort und Passwordbestätigung müssen gesetzt sein";
        }
        if (strpos($_POST['emailReg'], "@") === false) {
            $_SESSION['error'] = "Email muss ein @-Zeichen enthalten.";
        }
        $query = (new Query((new DatabaseConnector())->connect()));
        if ($query->getUserId($email) != null) {
            $_SESSION['error'] = "Benutzer bereits vorhanden";
        } elseif ($password !== $password_match) {
            $_SESSION['error'] = "Passwörter stimmen nicht überein";
            header("Location: index.php");
            return;
        } else {
            $insert = new Insert((new DatabaseConnector())->connect());
            $insert->newUser($email, $password, $first_name, $last_name);
            userLogin($email, $password);
        }
}