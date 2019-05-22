<article class>
    <?php
    require_once 'php-business/schoolDao.php';
    require_once 'php-business/schoolJson.php';
    require_once 'php-business/schoolView.php';
    if (isset($schoolio)):
    ?>

    <h2 class="card-header"> <?= $schoolio->name ?>
        <form method="post">
            <button name="edit">
            <img src="/assets/edit.png" alt="Bearbeiten">
            </button>
        </form>
    </h2>
    <form class="detailcontainer card-body" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" class="responsive detail-picture">
        <div class="detail-contact">

            <h1 class="info-container detail-headline">
                Berufsbildungszentrum für Wirtschaft, Informatik und Gesundheit
            </h1>
            <div class="info-container">
                <div class="text-left">
                    Schulleitung:
                </div>
                <div class="text-right">
                    <?= $schoolio->principal ?>
                </div>
            </div>
            <div class="info-container">
                <div class="text-left">
                    Adresse:
                </div>
                <div class="text-right">
                    <?= $schoolio->address->street ?>
                    <br> <?= $schoolio->address->zipCode ?> <?= $schoolio->address->city ?>                    </div>
            </div>
            <div class="info-container">
                <div class="text-left">
                    Telefon:
                </div>
                <div class="text-right">
                    <a href="tel:<?= $schoolio->phoneNumber ?>"><?= $schoolio->phoneNumber ?></a>
                </div>
            </div>
            <div class="info-container">
                <div class="text-left">
                    E-Mail:
                </div>
                <div class="text-right">
                    <a href="mailto:<?= $schoolio->mail ?>"><?= $schoolio->mail ?></a>
                </div>
            </div>
            <div class="info-container">
                <div class="text-left">
                    Internet:
                </div>
                <div class="text-right">
                    <a href="<?= $schoolio->homepageUrl ?>"><?= $schoolio->homepageUrl ?></a>
                </div>
            </div>
            <div class="detail-info">
                <h5 class="detail-headline">Weitere Infos</h5>
                <div>
                    <?= $schoolio->description ?>
                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['userSessions'])) { ?>
        <div class="detail-feedback">
            <?php include 'feedback.php'; ?>
        </div>
    </form>
    <div class="text-right">
        <a href=""></a>
    </div> <?php } ?>
</article>
<?php endif ?>