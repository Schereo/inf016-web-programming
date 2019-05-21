<article class>
    <h2 class="card-header"> Herbart Gymansium Oldenburg <a href="/index.php#anlegen" class="editIcon">
       <img src="/assets/edit.png">  </a> </h2>
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
        <?php if (isset($_SESSION['userSessions'])) { ?>
        <div class="detail-feedback">
            <?php include 'feedback.php'; ?>
        </div>
            <div class="text-rigt"><a href="">
                </a></div>  <?php } ?>
    </section>
</article>
