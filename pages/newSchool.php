<section>
    <h2 id="anlegen" class="card-header">Neue Schule anlegen</h2>
    <div class="card-body">
        <form class="newSchool-container">
            <div class="infoHeader-newSchool">
                <input class="input schoolname" type="text" id="schoolname" name="schulname"
                       placeholder="Name der Schule">
                <select class="input schooltype">
                    <option value="form1">Grundschule</option>
                    <option value="form2">Gymnasium</option>
                    <option value="form3">Oberschule</option>
                    <option value="form4">Förderschule</option>
                    <option value="form5">Integrierte Gesamtschule</option>
                    <option value="form6">Berufsbildende Schule</option>
                </select>
                <select class="input district">
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
                </select>
            </div>
            <textarea class="textarea" placeholder="Beschreibung"> </textarea>
            <div class="uploadInterface">
                <form class="file-upload-field">
                    <input class="file-upload" type="file" multiple>
                    <p class="uploadText"> Klicken/ Bilder ablegen</p>
                </form>
                <button class="default-button uploadButton" type="submit">Upload</button>
                <div class="uploadedPictures">
                    <h2>test</h2>
                </div>
            </div>
        </form>
    </div>
</section>