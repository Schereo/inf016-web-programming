<section>
    <h2 id="anlegen" class="card-header">Schule anlegen</h2>
    <div class="card-body">
        <div class="UploadInterface">
            <div class="uploadedPictures"> <?php include 'php-business/displayUploads.php' ?> </div>
            <form action="/php-business/uploadHandler.php" class="file-upload-field"
                  enctype="multipart/form-data" method="post">
                <input class="file-upload" type="file" name="upload" multiple>
                <input class="input" type="submit" value="Upload Image" name="submit">
            </form>
        </div>
        <form class="newSchool-container" action="/php-business/newSchoolHandler.php" method="post">
            <div class="info-input">
                Name:<input class="input" type="text" name="schoolname" value="">
                <br>
                Schulform:
                <select class="input" name="schooltype">
                    <option value="Grundschule">Grundschule</option>
                    <option value="Gymnasium">Gymnasium</option>
                    <option value="Oberschule">Oberschule</option>
                    <option value="Förderschule">Förderschule</option>
                    <option value="Integrierte Gesamtschule">Integrierte Gesamtschule</option>
                    <option value="Berufsbildende Schule">Berufsbildende Schule</option>
                </select>
                <br>
                Stadtteil:
                <select class="input district" name="district">
                    <option value="Alexandersfeld">Alexandersfeld</option>
                    <option value="Bloherfelde">Bloherfelde</option>
                    <option value="Bürgerfelde">Bürgerfelde</option>
                    <option value="Donnerschwee">Donnerschwee</option>
                    <option value="Etzhorn">Etzhorn</option>
                    <option value="Eversten">Eversten</option>
                    <option value="Gemeinde Bad Zwischenahn">Gemeinde Bad Zwischenahn</option>
                    <option value="Innenstadt">Innenstadt</option>
                    <option value="Kreyenbrück">Kreyenbrück</option>
                    <option value="Krusenbusch">Krusenbusch</option>
                    <option value="Nadorst">Nadorst</option>
                    <option value="Neuenwege">Neuenwege</option>
                    <option value="Ofenerdiek">Ofenerdiek</option>
                    <option value="Ohmstede">Ohmstede</option>
                    <option value="Osternburg">Osternburg</option>
                    <option value="Tweelbäke">Tweelbäke</option>
                    <option value="Wechloy">Wechloy</option>
                </select>
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
                <button type="submit" class="default-button"> Upload</button>
        </form>
    </div>
</section>