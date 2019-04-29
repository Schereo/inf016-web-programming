<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Oscolia</title>
        <meta name="description" content="Bildungsstätten der Stadt Oldenburg">
        <meta name="keywords" content="HTML,CSS,PHP,XML,JavaScript">
        <meta name="author" content="Cedric, Nelly, Jens, Tim">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.ico" />
        <link rel="stylesheet" href="/css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    </head>
<body>
    <div class="main-container">
        <div class="strech-grid-item">
            <?php include 'pages/header.php';?>
        </div>
        <div class="large-grid-item card">
            <header >
                <img src="/assets/images/oldenburg-stadt.jpeg" alt="Picture of Oldenburg" class="responsive">
            </header>
        </div>
        <div class="large-grid-item">
            <section class="card">
                <h2 id="#suche" class="card-header">Schule Suchen</h2>
                <div class="card-body">
                <form>
                    <input type="text" placeholder="Schulname">
                    <select>
                        <option value="form1">Grundschule</option>
                        <option value="form2">Gymnasium</option>
                        <option value="form3">Oberschule</option>
                        <option value="form4">Förderschule</option>
                        <option value="form5">Integrierte Gesamtschule</option>
                        <option value="form6">Berufsbildende Schule</option>  
                    </select>
                    <select>
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
                    <button type="submit" name="anmelden">Suchen</button>
                </form>
                <?php include 'pages/detail.php';?>
                </div>
            </section>
        </div>
        <div class="large-grid-item">
            <section class="card">
                <h2 id="map" class="card-header">Map</h2>
                <div class="card-body">
                <iframe title="Map of Oldenburg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2393.0944202097276!2d8.187361315219686!3d53.14439997993721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b6dfb1330a433f%3A0xcd64e0ccd2c6150b!2sBBS+Berufsbildende+Schulen+Haarentor!5e0!3m2!1sde!2sde!4v1555402008182!5m2!1sde!2sde" width="300" height="225" style="border:0" ></iframe>
                <br>
                </div>
            </section>

        </div>
        <div class="left-grid-item">
            <section class="card">
                <h2 id="anmelden" class="card-header">Anmelden</h2>
                <form>
                    <div class="card-body">
                        <input type="text" name="mail" placeholder="E-Mail Adresse"><br>
                        <input type= "password" name="passwort" placeholder="Passwort"><br>
                    </div>
                    <div class="card-footer">
                    <button type="submit" name="anmelden">Anmelden</button>
                    <a>Passwort vergessen</a>
                    </div>
                </form>
            </section>
        </div>
        <div class="right-grid-item">
            <section class="card">
                <h2 id=registrieren class="card-header">Registrieren</h2>

                <form>
                    <div class="card-body">
                        <input type= "text" name="firstName" placeholder="Vorname"><br>
                        <input type="text" name="lastName" placeholder="Nachname"><br>
                        <input type="email" name="email" placeholder="Email"><br>
                        <input type="password" name="passwort" placeholder="Passwort"><br>
                        <input type= "password" name="passwort2" placeholder="Passwort wiederholen"><br>
                    </div>
                    <div class = "registerbutton">
                    <button type="submit" name="registrieren" > Registrieren </button>
                    </div>
                </form>
            </section>
        </div>
        <div class="large-grid-item">
            <section class="card">
                <h2 id="anlegen" class="card-header">Anlegen</h2>
                <div class="card-body">
                <form>
                    <input type= "text" name="schulname" placeholder="Name der Schule">
                    <select>
                        <option value="form1">Grundschule</option>
                        <option value="form2">Gymnasium</option>
                        <option value="form3">Oberschule</option>
                        <option value="form4">Förderschule</option>
                        <option value="form5">Integrierte Gesamtschule</option>
                        <option value="form6">Berufsbildende Schule</option>   
                    </select>
                    <select>
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
                    </select><br>
                    <textarea placeholder="Beschreibung"> </textarea>
                    <br>
                    <div class="card-footer">
                    <input type="file" accept="image/png, image/jpeg">
                    <button type="submit" name="anlegen">Schule Anlegen</button>
                    </div>
                </form>
                </div>
            </section>
        </div>
        <div class="strech-grid-item">
            <?php include 'pages/footer.php';?>
        </div>
    </div>  
</body>
</html> 