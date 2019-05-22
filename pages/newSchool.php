<section>
    <h2 id="anlegen" class="card-header">Schule anlegen</h2>
    <div class="card-body">
        <form class="newSchool-container" action="/php-business/newSchoolHandler.php" method="post">
            <div class="info-input">
                <div class="editPictures">
                    <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" width="150px">
                    <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" width="150px">
                    <img src="../assets/images/hgo1.jpg" alt="Picture of BBS Wechloy" width="150px">
                </div>
                <div class="text-left"> Name:</div>
                <div class="text-right"><input type="text" name="schoolname" value=""></div>
                <br>
                <div class="text-left"> Schulform:</div>
                <div class="text-right">
                    <select class="input schooltype" name="schooltype">
                        <?php foreach ($schoolforms as $schoolform): ?>
                            <option value="<?=$schoolform?>"><?=$schoolform?></option>
                        <?php endforeach;
                        unset($schoolform);?>
                    </select>
                </div>
                <br>
                <div class="text-left"> Stadtteil:</div>
                <div class="text-right"><select class="input district" name="district">
                        <?php foreach ($districts as $district): ?>
                            <option value="<?=$district?>"><?=$district?></option>
                        <?php endforeach;
                        unset($district);?>
                    </select></div>
                <br>
                <div class="text-left"> Schulleitung:</div>
                <div class="right"><input class="input" type="text" name="principal" value=""></div>
                <br>
                <div class="text-left">Adresse:</div>
                <div class="text-right"><input class="input" type="text" name="street"
                                               placeholder="Straße"> <input class="input" type="number"
                                                                            id="editHousenumber" name="number"
                                                                            placeholder="Hausnummer"></div>
                <br>
                <div class="text-left"> Telefon:</div>
                <div class="text-right"><input class="input" type="number" id="editPhonenumber" name="telefon"
                                               placeholder="phoneNumber"></div>
                <div class="text-left"><br> Email:</div>
                <div class="text-right"><input class="input" type="email" id="editEmail" name="mail"
                                               placeholder="E-Mail"></div>
                <br>
                <div class="text-left">Website:</div>
                <div class="text-right"><input class="input" type="url" name="homepage"
                                               placeholder="Website"></div>
                <br>
                <div class="text-left">Weitere Infos:</div>
                <br>
                <div class="text-right"><textarea class="textarea" name="description" placeholder="Infos"> </textarea>
                </div>
                <button type="submit" class="default-button"> Upload</button>
        </form>
    </div>
</section>