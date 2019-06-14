<article class>
    <?php
    require_once 'pages/search/schoolView.php';
    if (isset($school) && $search && isset($_GET['ID'])):
    ?>

    <h2 class="card-header">
        <?= $school['name'] ?>
        <form method="post" class="editIcon">
            <button name="edit" class="editIcon">
            <img src="../../assets/edit.png" alt="Bearbeiten" class="editIcon">
            </button>
        </form>
    </h2>
    <form class="detailcontainer card-body" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div><?php include 'pages/detail/showPicture.php';?></div>
        <div class="detail-contact">

            <h1 class="info-container detail-headline">
                Was soll hier eigentlich stehen?!?!
            </h1>
            <h3>Kurzprofil</h3>
            <div class="info-container">
                <div class="text-left">
                    Schulleitung:
                </div>
                <div class="text-right">
                    <?= $school['principal'] ?>
                </div>
            </div>
            <div class="info-container">
                <div class="text-left">
                    Schüleranzahl:
                </div>
                <div class="text-right">
                    <?= $school['students'] ?>
                </div>
            </div>
            <div class="info-container">
                <div class="text-left"> Beschreibung: </div>
                <div class="text-right">
                    <?= $school['description'] ?>
                </div>
            </div>
            <br>
            <div class="info-container">
                <div class="text-left">
                    Adresse:
                </div>
                <div class="text-right">
                    <?= $school['street'] ; echo " " .$school['house_number'];?>
                    <br><?=$school['district'] ?><?= $school['zip'] ?>, <?= $school['city'] ?>
                </div>
            </div>
            <br>
            <h3>Kontakt</h3>
            <div class="info-container">
                <div class="text-left">
                    Telefon:
                </div>
                <div class="text-right">
                    <a href="tel:<?= $school['phone_number'] ?>"><?= $school['phone_number'] ?></a>
                </div>
            </div>
            <div class="info-container">
                <div class="text-left">
                    E-Mail:
                </div>
                <div class="text-right">
                    <a href="mailto:<?= $school['email'] ?>"><?= $school['email'] ?></a>
                </div>
            </div>
            <div class="info-container">
                <div class="text-left">
                    Homepage:
                </div>
                <div class="text-right">
                    <a href="<?= $school['homepage_url'] ?>"><?= $school['homepage_url'] ?></a>
                </div>
            </div>
            </section>
        </div>
        <?php if (isset($_SESSION['userSessions'])) { ?>
        <div class="detail-feedback">
            <?php include 'pages/feedback/feedback.php'; ?>
        </div>
    </form>
    <div class="text-right">
        <a href=""></a>
    </div> <?php } ?>
</article>
<?php endif ?>