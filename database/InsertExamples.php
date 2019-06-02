<?php
/**
 * Created by PhpStorm.
 * User: timsi
 * Date: 01.06.2019
 * Time: 16:13
 */

require_once "DatabaseConnector.php";

function insertUser() {
    $sql = "INSERT INTO Users ('first_name', 'last_name', 'email', 'password') VALUES ('Admin', 'Web', 'admin@support.com', 'test1234')";
    $pdo = new DatabaseConnector();
    $pdo->connect()->exec($sql);
}