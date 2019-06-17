<section>
    <h2 id="anlegen" class="card-header">Schule ändern</h2>
    <div class="card-body">
        <form class="newSchool-container" action="pages/editSchool/editSchoolHandler.php" method="post">
            <div class="info-input">
                <div class="uploadedPictures">
                    <?php include 'pages/editSchool/showPicture.php' ?>
                </div>
                <p>Kurzprofil</p>
                <input class="input" type="text" name="schoolname" value="<?= $school['name'] ?>">
                <br>
                <select class="input schooltype" name="schooltype">
                    <?php foreach ($schoolforms as $schoolform):
                        if ($school['schoolType'] == $schoolform) { ?>
                            <option value="<?= $schoolform ?>" selected="selected"><?= $schoolform ?></option>
                        <? } else { ?>
                            <option value="<?= $schoolform ?>"><?= $schoolform ?></option>
                            <?php
                        } endforeach;
                    unset($schoolform); ?>
                </select>
                <br>
                <input class="input" type="text" name="principal" value="<?= $school['principal']; ?>">
                <br>
                <input class="input" type="text" name="numberOfStudents" value="<?= $school['students'] ?>">
                <br>
                <p> Beschreibung</p>
                <textarea class="textarea" name="description"
                          placeholder="Infos"><?= $school['description'] ?></textarea>
                <p> Adresse</p>
                <input class="input" type="text" name="street" value="<?= $school['street'] ?>">
                <br>
                <input class="input" type="number" id="editHousenumber" name="number"
                       value="<?= $school['house_number'] ?>">
                <br>
                <select class="input" name="district">
                    <?php foreach ($districts as $district):
                        if ($school['district'] == $district) { ?>
                            <option value="<?= $district ?>" selected="selected"><?= $district ?></option>
                        <? } else { ?>
                            <option value="<?= $district ?>"><?= $district ?></option>
                            <?php
                        } endforeach;
                    unset($district); ?>
                </select>
                <br>
                <p>Kontakt </p>
                <input class="input" type="number" id="editPhonenumber" name="phonenumber"
                       value="<?= $school['phone_number'] ?>">
                <br>
                <input class="input" type="email" id="editEmail" name="mail" value="<?= $school['email'] ?>">
                <br>
                <input class="input" type="url" name="homepage" value="<?= $school['homepage_url'] ?>">
                <br>
                <button type="submit" class="default-button" value="<?= $school['school_id'] ?>" name="editID">
                    Upload
                </button>
                <form action="pages/editSchool/deleteSchoolHandler.php" method="post" class="deleteForm">
                    <button type="submit" class="default-button" value="<?= $school['school_id'] ?>" name="deleteID"
                            formmethod="post">
                        Delete
                    </button>
                </form>
        </form>
    </div>
</section>