
<link rel="stylesheet" href="/css/desktop/styles.css" />
<div class="main-container">
    <div class="stretch-grid-item" id="indexheader">
    </div>
    <div class="card large-grid-item">
        <section>
            <h2 id="anlegen" class="card-header">Schule bearbeiten</h2>
            <div class="card-body">
                <form class="editSchool-container">
                    <div class="editPictures">
                        <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" width="150px">
                        <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" width="150px">
                        <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" width="150px">
                    </div>
                    <div class="editInfos">
                        <div class="info-input">
                            <?php ?>
                            <div class="text-left"> Name: </div>
                            <div class="text-right"><input type="text" name="name" value=""> </div> <br>
                            <div class="text-left"> Schulform: </div>
                            <div class="text-right"><select class="input schooltype" name="schooltype">
                                    <option value="form1">Grundschule</option>
                                    <option value="form2">Gymnasium</option>
                                    <option value="form3">Oberschule</option>
                                    <option value="form4">Förderschule</option>
                                    <option value="form5">Integrierte Gesamtschule</option>
                                    <option value="form6">Berufsbildende Schule</option>
                                </select> </div> <br>
                            <div class="text-left"> Stadtteil: </div>
                            <div class="text-right"> <select class="input district" name="district">
                                    <option value="st1">Alexandersfeld</option>
                                    <option value="st2">Bloherfelde</option>
                                    <option value="st3">Bürgerfelde</option>
                                    <option value="st4">Donnerschwee</option>
                                    <option value="st5">Etzhorn</option>
                                    <option value="st6">Eversten</option>
                                    <option value="st7">Gemeinde Bad Zwischenahn</option>
                                    <option value="st8">Innenstadt</option>
                                    <option value="st9">Kreyenbrück</option>
                                    <option value="st10">Krusenbusch</option>
                                    <option value="st11">Nadorst</option>
                                    <option value="st12">Neuenwege</option>
                                    <option value="st13">Ofenerdiek</option>
                                    <option value="st14">Ohmstede</option>
                                    <option value="st15">Osternburg</option>
                                    <option value="st16">Tweelbäke</option>
                                    <option value="st17">Wechloy</option>
                                </select> </div> <br>
                            <div class="text-left"> Schulleitung: </div>
                            <div class="right"> <input class="input" type="text" name="princ" value=""> </div> <br>
                            <div class="text-left">Adresse: </div>
                            <div class="text-right"><input class="input" type="text" id="editStreet" name="straße" placeholder="Straße"> <input class="input" type="number" id="editHousenumber" name="hausnummer" placeholder="Hausnummer"> </div> <br>
                            <div class="text-left"> Telefon: </div>
                            <div class="text-right"><input class="input" type="number" id="editPhonenumber" name="telefon" placeholder="Telefonnummer"> </div>
                            <div class="text-left"><br> Email: </div>
                            <div class="text-right"><input class="input" type="email" id="editEmail" name="email" placeholder="E-Mail"> </div> <br>
                            <div class="text-left">Website: </div>
                            <div class="text-right"><input class="input" type="url" id="editE-Mail" name="email" placeholder="Website"> </div> <br>
                            <div class="text-left">Weitere Infos: </div> <br>
                            <div class="text-right"><textarea class="textarea" placeholder="Infos"> </textarea> </div>
                        </div>
                        <div class="opening-hours">
                            Öffnungszeiten: <br>
                            <div class="text-left">Montag</div>
                            <div class="text-right"> von: <input class="input" type="time" id="monday_start" name="monday"> bis: <input class="input" type="time" id="monday_end" name="monday"> </div>
                            <div class="text-left"> Dienstag </div>
                            <div class="text-right">von: <input class="input" type="time" id="tuesday_start" name="tuesday"> bis: <input class="input" type="time" id="tuesday_end" name="monday"> </div>
                            <div class="text-left"> Mittwoch </div>
                            <div class="text-right">von: <input class="input" type="time" id="wednesday_start" name="wednesday"> bis: <input class="input" type="time" id="wednesday_end" name="wednesday"> </div>
                            <div class="text-left"> Donnerstag </div>
                            <div class="text-right"> von: <input class="input" type="time" id="thuersday_start" name="thuersday"> bis: <input class="input" type="time" id="thuersday_end" name="thuersday"> </div>
                            <div class="text-left"> Freitag </div>
                            <div class="text-right"> von: <input class="input" type="time" id="friday_start" name="friday"> bis: <input class="input" type="time" id="friday_end" name="friday"> </div>
                            <div class="text-left"> Samstag </div>
                            <div class="text-right"> von: <input class="input" type="time" id="saturday_start" name="saturday"> bis: <input class="input" type="time" id="saturday_end" name="saturday"> </div>
                            <div class="text-left"> Sonntag </div>
                            <div class="text-right"> von: <input class="input" type="time" id="sunday_start" name="sunday"> bis: <input class="input" type="time" id="sunday_end" name="sunday"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="stretch-grid-item" id="indexfooter">
    <?php include 'footer.php'; ?>
</div>
