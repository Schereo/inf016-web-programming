<?php
$schools = [];

if (isset($_GET["schoolName"])) {
    $schoolName = htmlentities($_GET["schoolName"]);
    $schools = School::getByName($schoolName);
}