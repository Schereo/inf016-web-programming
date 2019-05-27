<?php session_start();
$depth = "";
require_once 'pages/login/loginHandler.php';
require_once 'pages/register/registerHandler.php';
require_once 'pages/selectItems.php';
require_once 'pages/search/schoolView.php';

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
?>

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
    <link rel="stylesheet" href="./css/desktop/styles.css"/>
    <link rel="stylesheet" media="only screen and (max-width: 768px)" href="./css/mobile/styles-mobile.css"/>
    <link rel="stylesheet" media="only screen and (max-width: 992px)" href="./css/tablet/styles-tablet.css"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
<?php
include 'header.php';
include 'imageslider.php';
?>

<div class="main-container">
    <div class="large-grid-item card">
        <?php include 'pages/search/search.php'; ?>
    </div>
    <div class="large-grid-item card">
        <?php include 'pages/detail/detail.php'; ?>
    </div>
    <div class="large-grid-item card">
        <?php include 'pages/map/map.php'; ?>
    </div>
    <?php if (!($_SESSION['userSessions'])) { ?>
        <div class="left-grid-item card">
            <?php include 'pages/login/login.php'; ?>
        </div>
        <div class="right-grid-item card">
            <?php include 'pages/register/register.php'; ?>
        </div>
    <?php } else if (isset($_POST['edit']) && isset($schoolio) && ($schoolio->userID == $_SESSION['userID'])) { ?>
        <div class="large-grid-item card">
            <?php include 'pages/editSchool/editSchool.php'; ?>
        </div>
    <?} else if ($_SESSION['userSessions']) {?>
        <div class="large-grid-item card">
            <?php include 'pages/editSchool/newSchool.php'; ?>
        </div>
    <? } ?>
</div>
    <div class="stretch-grid-item" id="indexfooter">
        <?php include $depth.'footer.php'; ?>
    </div>
</body>
</html>