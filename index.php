<?php session_start();

require_once 'php-business/loginHandler.php';
require_once 'php-business/registerHandler.php';
require_once 'php-business/schoolHandler.php';
require_once 'php-business/editSchoolHandler.php';
//TODO: Hier fehlerhafte Eingaben abfangen um unnötige Server Kommunikation zu verhindern
//Login falls durchgeführt
$emailLogin = strip_tags($_POST['emailLogin']);
$passwordLogin = strip_tags($_POST['passwordLogin']);
userLogin($emailLogin, $passwordLogin);

//Register falls durchgeführt
$forename = strip_tags($_POST['firstNameReg']);
$surname = strip_tags($_POST['lastNameReg']);
$mailInput = strip_tags($_POST['emailReg']);
$passwordInput = strip_tags($_POST['passwortReg']);
$passwordMatch = strip_tags($_POST['passwort2Reg']);
registerUser($forename, $surname, $mailInput, $passwordInput, $passwordMatch);

//EditSchool falls erwünscht
$editButtonClicked = true;
if (isset($_POST['edit'])) {
    editSchool();
} ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Oscolia</title>
    <meta name="description" content="Bildungsstätten der Stadt Oldenburg">
    <meta name="keywords" content="HTML,CSS,PHP,XML,JavaScript">
    <meta name="author" content="Cedric, Nelly, Jens, Tim">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.ico"/>
    <link rel="stylesheet" href="/css/desktop/styles.css"/>
    <link rel="stylesheet" media="only screen and (max-width: 768px)" href="./css/mobile/styles-mobile.css"/>
    <link rel="stylesheet" media="only screen and (max-width: 992px)" href="./css/tablet/styles-tablet.css"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
<?php
include 'pages/header.php';
include 'pages/imageslider.php';
?>

<div class="main-container">
    <div class="large-grid-item card">
        <?php include 'pages/search.php'; ?>
    </div>
    <div class="large-grid-item card">
        <?php include 'pages/detail.php'; ?>
    </div>
    <div class="large-grid-item card">
        <?php include 'pages/map.php'; ?>
    </div>
    <?php if (!($_SESSION['userSessions'])) { ?>
        <div class="left-grid-item card">
            <?php include 'pages/login.php'; ?>
        </div>
        <div class="right-grid-item card">
            <?php include 'pages/register.php'; ?>
        </div>
    <? } ?>
    <?php
    if (!($editButtonClicked)) { ?>
        <div class="large-grid-item card">
            <?php include 'pages/newSchool.php'; ?>
        </div>
    <? } else { ?>
    <div class="large-grid-item card">
        <?php include 'pages/editSchool.php'; ?>
        <? } ?>
    </div>
    <div class="stretch-grid-item" id="indexfooter">
        <?php include 'pages/footer.php'; ?>
    </div>
</body>
</html> 