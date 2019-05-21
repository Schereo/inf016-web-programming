<section>
    <h2 id="anlegen" class="card-header">Neue Schule anlegen</h2>
    <div class="card-body">
        <form class="newSchool-container" action="/php-business/newSchoolHandler.php" method="post">
            <div class="infoHeader-newSchool">
                <input class="input schoolname" type="text" id="schoolname" name="schoolname"
                       placeholder="Name der Schule">
                <select class="input schooltype" name="schooltype">
                    <option >Grundschule</option>
                    <option >Gymnasium</option>
                    <option >Oberschule</option>
                    <option >Förderschule</option>
                    <option >Integrierte Gesamtschule</option>
                    <option >Berufsbildende Schule</option>
                </select>
                <select class="input district" name="district">
                    <option>Alexandersfeld</option>
                    <option>Bloherfelde</option>
                    <option >Bürgerfelde</option>
                    <option >Donnerschwee</option>
                    <option >Etzhorn</option>
                    <option >Eversten</option>
                    <option >Gemeinde Bad Zwischenahn</option>
                    <option >Innenstadt</option>
                    <option >Kreyenbrück</option>
                    <option >Krusenbusch</option>
                    <option >Nadorst</option>
                    <option >Neuenwege</option>
                    <option >Ofenerdiek</option>
                    <option >Ohmstede</option>
                    <option >Osternburg</option>
                    <option >Tweelbäke</option>
                    <option >Wechloy</option>S
                </select>
            </div>
            <textarea class="textarea" placeholder="Beschreibung" name="description"> </textarea>
            <div class="uploadInterface">
                <form class="file-upload-field">
                    <input class="file-upload" type="file" multiple>
                    <p class="uploadText"> Klicken/ Bilder ablegen</p>
                </form>
                <button class="default-button uploadButton" type="submit"" >Upload</button>
                <div class="uploadedPictures">
                    <h2>test</h2>
                </div>
            </div>
        </form>
    </div>
</section>