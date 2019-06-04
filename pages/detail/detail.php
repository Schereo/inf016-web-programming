<article class>
    <?php
    require_once 'db/schoolDao.php';
    require_once 'db/schoolJson.php';
    require_once 'pages/search/schoolView.php';
    if (isset($school)):
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
        <img src="../../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" class="responsive detail-picture">
        <div class="detail-contact">

            <h1 class="info-container detail-headline">
                Berufsbildungszentrum für Wirtschaft, Informatik und Gesundheit
            </h1>
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
                    Adresse:
                </div>
                <div class="text-right">
                    <?= $school['street'] ; echo " " .$school['house_number'];?>
                    <br> <?= $school['zip'] ?> <?= $school['city'] ?>
                </div>
            </div>
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
                    Internet:
                </div>
                <div class="text-right">
                    <a href="<?= $school['homepage_url'] ?>"><?= $school['homepage_url'] ?></a>
                </div>
            </div>
            <div class="detail-info">
                <h5 class="detail-headline">Weitere Infos</h5>
                <div>
                    <?= $school['description'] ?>
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