<?php
require_once 'pages/search/schoolView.php';
if (isset($schoolio)):
?>
<section>
    <h2 id="anlegen" class="card-header">Schule ändern</h2>
    <div class="card-body">
        <form class="newSchool-container" action="pages/editSchool/editSchoolHandler.php" method="post">
            <div class="info-input">
                <div class="editPictures">
                    <img src="../assets/images/<?=$schoolio->imagePath?>" alt="Bild zeigt <?=$schoolio->name?>" width="150px">
                </div>
                <div class="text-left"> Name:</div>
                <div class="text-right" ><input class="input" type="text" name="schoolname" value="<?= $schoolio->name ?>"></div>
                <br>
                <div class="text-left"> Schulform:</div>
                <div class="text-right">
                    <select class="input schooltype" name="schooltype">
                        <?php foreach ($schoolforms as $schoolform):
                            if ($schoolio->schoolType == $schoolform) { ?>
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
                            if ($schoolio->address->district == $district) { ?>
                                <option value="<?= $district ?>" selected="selected"><?= $district ?></option>
                            <? } else { ?>
                                <option value="<?= $district ?>"><?= $district ?></option>
                                <?php
                            } endforeach;
                        unset($district); ?>
                    </select></div>
                <br>
                <div class="text-left"> Schulleitung:</div>
                <div class="right"><input class="input" type="text" name="principal" value="<?= $schoolio->principal ?>">
                </div>
                <br>
                <div class="text-left">Adresse:</div>
                <div class="text-right"><input class="input" type="text" name="street"
                                               value="<?= $schoolio->address->street ?>">
                    <input class="input" type="number"
                           id="editHousenumber" name="number"
                           value="<?= $schoolio->address->number ?>"></div>
                <br>
                <div class="text-left"> Telefon:</div>
                <div class="text-right"><input class="input" type="number" id="editPhonenumber" name="telefon"
                                               value="<?= $schoolio->phoneNumber ?>"></div>
                <div class="text-left"><br> Email:</div>
                <div class="text-right"><input class="input" type="email" id="editEmail" name="mail"
                                               value="<?= $schoolio->mail ?>"></div>
                <br>
                <div class="text-left">Website:</div>
                <div class="text-right"><input class="input" type="url" name="homepage"
                                               value="<?= $schoolio->homepageUrl ?>"></div>
                <br>
                <div class="text-left">Weitere Infos:</div>
                <br>
                <div class="text-right"><textarea class="textarea" name="description"
                                                  placeholder="Infos"><?= $schoolio->description ?></textarea>
                </div>
                <button type="submit" class="default-button"> Upload</button>
                <button type="submit" class="default-button" name="delete"> Delete</button>
                <?php if(isset($_POST['delete'])) {
                   School::delete($schoolio->id);
                } ?>
        </form>
    </div>
</section>
<?php endif ?>