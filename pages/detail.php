<article class>
    <h2 class="card-header"> Herbart Gymansium Oldenburg</h2>
    <section class="detailcontainer card-body">
        <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" class="responsive detail-picture">
        <div class="detail-contact">
            <section>
                <h1 class="info-container detail-headline">
                    Berufsbildungszentrum für Wirtschaft, Informatik und Gesundheit
                </h1>
                <div class="info-container">
                    <div class="text-left">
                        Schulleitung:
                    </div>
                    <div class="text-right">
                        Diedrich Ahlfeld
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        Adresse:
                    </div>
                    <div class="text-right">
                        Ammerländer Heerstraße 33/39<br> 26129 Oldenburg
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        Telefon:
                    </div>
                    <div class="text-right">
                        <a href="tel:044177915-0">0441 77915-0</a>
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        E-Mail:
                    </div>
                    <div class="text-right">
                        <a href="mailto:mail@bbs-haarentor.de">mail@bbs-haarentor.de</a>
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        Internet:
                    </div>
                    <div class="text-right">
                        <a href="https://www.bbs-haarentor.de">www.bbs-haarentor.de</a>
                    </div>
                </div>
                <div class="detail-info">
                    <h5 class="detail-headline">Weitere Infos</h5>
                    <div>
                        Schülerinnen/Schüler
                        circa 2.300
                        Mitarbeiterinnen/Mitarbeiter
                        circa 110
                    </div>
                </div>
            </section>
        </div>
        <div class="info-open-hours">
            <div class="text-right open-hours">
                <div class="info-container">
                    <div class="text-left">
                        Montag
                    </div>
                    <div class="text-right">
                        7:30 - 12:00 Uhr und 12:30 - 15:00 Uhr
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        Dienstag
                    </div>
                    <div class="text-right">
                        7:30 - 12:00 Uhr und 12:30 - 15:00 Uhr
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        Mittwoch
                    </div>
                    <div class="text-right">
                        7:30 - 12:00 Uhr und 12:30 - 15:00 Uhr
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        Donnerstag
                    </div>
                    <div class="text-right">
                        7:30 - 12:00 Uhr und 12:30 - 15:00 Uhr
                    </div>
                </div>
                <div class="info-container">
                    <div class="text-left">
                        Freitag
                    </div>
                    <div class="text-right">
                        7:30 - 13:15 Uhr
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['userSessions'])) { ?>
        <div class="detail-feedback">
            <?php include 'feedback.php'; ?>
        </div>
            <div class="text-rigt"><a href="">
                    <button type="submit" class="default-button">Schule bearbeiten</button>
                </a></div>  <?php } ?>
    </section>
</article>
