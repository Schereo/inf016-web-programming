<?php
/*
    session_start();
*/
require_once "../../database/Delete.php";

    $delete = new Delete((new DatabaseConnector())->connect());
    $delete->school($_POST['deleteID']);
    header("Location: ../../index.php");
