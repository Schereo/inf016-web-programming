<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Oscolia</title>
    <meta name="description" content="Bildungsstätten der Stadt Oldenburg">
    <meta name="keywords" content="HTML,CSS,PHP,XML,JavaScript">
    <meta name="author" content="Cedric, Nelly, Jens, Tim">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.ico"/>
    <link rel="stylesheet" href="/css/styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/css/search-styles.css"/>
</head>
<body>
<div class="main-container">
    <div class="strech-grid-item">
        <?php include 'pages/header.php'; ?>
    </div>
    <div class="large-grid-item card">
        <header>
            <img src="/assets/images/oldenburg-stadt.jpeg" alt="Picture of Oldenburg" class="responsive">
        </header>
    </div>
    <div class="large-grid-item">
        <?php include 'pages/search.php'; ?>
    </div>
    <div class="large-grid-item card">
        <?php include 'pages/detail.php'; ?>
    </div>

    <div class="large-grid-item card">
        <?php include 'pages/map.php'; ?>
    </div>
    <div class="left-grid-item card">
        <?php include 'pages/login.php';?>
    </div>
    <div class="right-grid-item card">
       <?php include 'pages/register.php'; ?>
    </div>
    <div class="large-grid-item card">
        <?php include 'pages/newSchool.php'; ?>
    </div>
    <div class="strech-grid-item">
        <?php include 'pages/footer.php'; ?>
    </div>
</div>
</body>
</html> 