<section>
    <h2 id="anlegen" class="card-header">Schule ändern</h2>
    <div class="card-body">
        <form class="newSchool-container" action="/php-business/editSchoolHandler.php" method="post">
            <div class="info-input">
                <div class="editPictures">
                    <img src="../assets/images/<?=$school->imagePath?>" alt="Bild zeigt <?=$school->name?>" width="150px">
                </div>
                <div class="text-left"> Name:</div>
                <div class="text-right"><input type="text" name="schoolname" value="<?= $school->name ?>"></div>
                <br>
                <div class="text-left"> Schulform:</div>
                <div class="text-right">
                    <select class="input schooltype" name="schooltype">
                        <?php foreach ($schoolforms as $schoolform):
                            if ($school->schoolType == $schoolform) { ?>
                                <option value="<?= $schoolform ?>" selected="selected"><?= $schoolform ?></option>
                            <? } else { ?>
                                <option value="<?= $schoolform ?>"><?= $schoolform ?></option>
                                <?php
                            } endforeach;
                        unset($schoolform); ?>
                    </select>
                </div>
                <br>
                <div class="text-left"> Stadtteil:</div>
                <div class="text-right"><select class="input district" name="district">
                        <?php foreach ($districts as $district):
                            if ($school->address->district == $district) { ?>
                                <option value="<?= $district ?>" selected="selected"><?= $district ?></option>
                            <? } else { ?>
                                <option value="<?= $district ?>"><?= $district ?></option>
                                <?php
                            } endforeach;
                        unset($district); ?>
                    </select></div>
                <br>
                <div class="text-left"> Schulleitung:</div>
                <div class="right"><input class="input" type="text" name="principal" value="<?= $school->principal ?>">
                </div>
                <br>
                <div class="text-left">Adresse:</div>
                <div class="text-right"><input class="input" type="text" name="street"
                                               value="<?= $school->street ?>">
                    <input class="input" type="number"
                           id="editHousenumber" name="number"
                           value="<?= $school->number ?>"></div>
                <br>
                <div class="text-left"> Telefon:</div>
                <div class="text-right"><input class="input" type="number" id="editPhonenumber" name="telefon"
                                               value="<?= $school->phoneNumber ?>"></div>
                <div class="text-left"><br> Email:</div>
                <div class="text-right"><input class="input" type="email" id="editEmail" name="mail"
                                               value="<?= $school->mail ?>"></div>
                <br>
                <div class="text-left">Website:</div>
                <div class="text-right"><input class="input" type="url" name="homepage"
                                               value="<?= $school->homepageURL ?>"></div>
                <br>
                <div class="text-left">Weitere Infos:</div>
                <br>
                <div class="text-right"><textarea class="textarea" name="description"
                                                  placeholder="Infos"><?= $school->description ?></textarea>
                </div>
                <button type="submit" class="default-button"> Upload</button>
        </form>
    </div>
</section>
