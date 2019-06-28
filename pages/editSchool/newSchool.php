<Script>
    var userID = ''
</Script>
<section>
    <h2 id="anlegen" class="card-header">Schule anlegen</h2>
    <div class="card-body">


        <div class="UploadInterface">
            <div id="UploadGallery" >  </div>
            <form name="<?= $_SESSION['user_ID']+1000 ?>" id ="upload" class="file-upload-field" enctype="multipart/form-data" method="post"><br>
                <input class="file-upload" type="file" name="upload" multiple>
                <input id="ubutton" class="input" type="submit" value="Upload" name="uploadButton">
            </form>
            <div id="uploadStatus"> </div>
        </div>
        <form class="newSchool-container" action="pages/editSchool/newSchoolHandler.php" method="post">
            <div class="info-input">
                <p>Kurzprofil</p>
                <input class="input" type="text" name="schoolname" value="" placeholder="Schulname">
                <br>
                <select class="input schooltype" name="schooltype">
                    <option value="sto" disabled selected>Schulform</option>
                    <?php foreach ($schoolforms as $schoolform): ?>
                        <option value="<?= $schoolform ?>"><?= $schoolform ?></option>
                    <?php endforeach;
                    unset($schoolform); ?>
                </select>
                <br>
                <input class="input" type="text" name="principal" value="" placeholder="Schulleitung">
                <br>
                <input class="input" type="text" name="numberOfStudents" value=""
                       placeholder="Schüleranzahl">
                <p> Beschreibung</p>
                <textarea class="textarea" name="description" placeholder="Beschreibung"> </textarea>
                <p>Adresse</p>
                <input class="input" type="text" name="street" placeholder="Straße">
                <br>
                <input class="input" type="number" id="editHousenumber" name="number" placeholder="Hausnummer">
                <br>
                <select class="input district" name="district">
                    <option value="sto" disabled selected>Stadtteil</option>
                    <?php foreach ($districts as $district): ?>
                        <option value="<?= $district ?>"><?= $district ?></option>
                    <?php endforeach;
                    unset($district); ?>
                </select>
                <p>Kontakt </p>
                <input class="input" type="number" id="editPhonenumber" name="phonenumber" placeholder="Telefonnummer">
                <br>
                <input class="input" type="email" id="editEmail" name="mail" placeholder="Email">
                <br>
                <input class="input" type="url" name="homepage" placeholder="Homepage">
                <br>
                <button type="submit" class="default-button"> Upload</button>
            </div>
        </form>
    </div>
</section>