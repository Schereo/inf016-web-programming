<?php session_start();
error_reporting(0);
$depth = "";
require_once 'pages/login/loginHandler.php';
require_once 'pages/register/registerHandler.php';
require_once 'pages/selectItems.php';
require_once 'pages/search/schoolView.php';
require_once 'database/CreateDatabase.php';

if (isset($_POST['type'])) {
    if ($_POST['type'] == "Login") {
        if (isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])) {
            $loginError = userLogin($_POST['emailLogin'], $_POST['passwordLogin']);
        }
    } elseif ($_POST['type'] == "Register") {
        if (isset($_POST['firstNameReg']) && isset($_POST['lastNameReg']) && isset($_POST['emailReg']) && isset($_POST['passwordReg']) && isset($_POST['password2Reg'])) {
            $registerError = registerUser($_POST['firstNameReg'], $_POST['lastNameReg'], $_POST['emailReg'], $_POST['passwordReg'], $_POST['password2Reg']);
        }
    }
}
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
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" ></script>
    <script src="js/userFunctions.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/upload.js"></script>

</head>
<body>
<?php
include 'header.php';
include 'imageslider.php';
?>

<div class="main-container">
    <?php  if(isset($loginError) && $loginError === 'loggedIn' || isset($registerError) && $registerError == 'loggedIn') {?>
        <script>alert(JSON.stringify("You have been logged in!."));</script> <?php
    }?>
    <div class="large-grid-item card">
        <?php include 'pages/search/search.php'; ?>
    </div>

   <div class="large-grid-item card"></div>

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
    <?php } else if (isset($_POST['edit']) && isset($school) && ($school['creator'] == $_SESSION['user_ID'])) { ?>
        <div class="large-grid-item card">
            <?php include 'pages/editSchool/editSchool.php'; ?>
        </div>
    <?php } else if ($_SESSION['userSessions']) { ?>
        <div class="large-grid-item card">
            <?php include 'pages/editSchool/newSchool.php'; ?>
        </div>
    <?php } ?>
</div>
<div class="stretch-grid-item" id="indexfooter">
    <?php include $depth . 'footer.php'; ?>
</div>
<script>
    $('#searchInput').keyup(function () {
        $.get("resultsAJAX.php", $(".search-container").serialize(), function (data) {
            $("#results").html(data);
        });
    });
    if ($('#passwordRegisterError').length > 0) {
        document.getElementById("registrieren").scrollIntoView();
    }
    if ($('#benutzerRegisterError').length > 0) {
        document.getElementById("registrieren").scrollIntoView();
    }
    if ($('#loginError').length > 0) {
        document.getElementById("anmelden").scrollIntoView();
    }
</script>
</body>
</html>