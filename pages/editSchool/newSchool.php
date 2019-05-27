<section>
    <h2 id="anlegen" class="card-header">Schule anlegen</h2>
    <div class="card-body">
        <div class="UploadInterface">
            <div class="uploadedPictures"> <?php include 'displayUploads.php' ?> </div>
            <form action="pages/editSchool/uploadHandler.php" class="file-upload-field"
                  enctype="multipart/form-data" method="post">
                <input class="file-upload" type="file" name="upload" multiple>
                <input class="input" type="submit" value="Upload Image" name="submit">
            </form>
        </div>
        <form class="newSchool-container"  action="pages/editSchool/newSchoolHandler.php" method="post">
            <div class="info-input">
                Name:<input class="input" type="text" name="schoolname" value="">
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
                Schulleitung:
                <input class="input" type="text" name="principal" value="">
                <br>
                Adresse:
                <input class="input" type="text" name="street" placeholder="Straße">
                <br>
                <input class="input" type="number" id="editHousenumber" name="number" placeholder="Hausnummer">
                <br>
                Telefon:
                <input class="input" type="number" id="editPhonenumber" name="telefon"
                       placeholder="phoneNumber">
                <br> Email:
                <input class="input" type="email" id="editEmail" name="mail"
                       placeholder="E-Mail">
                <br>
                Website:
                <input class="input" type="url" name="homepage" placeholder="Website">
                <br>
                Weitere Infos:
                <br>
                <textarea class="textarea" name="description" placeholder="Infos"> </textarea>
                <br>
                <button type="submit" class="default-button" > Upload</button>
        </form>
    </div>
</section>