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
    </head>
<body>
<?php include 'pages/header.php';?>
<header> 
    <h1>Wilkommen auf unserer Webseite</h1>
    <h2>Hier könnte auch Werbung für Ihre Grundschule stehen.</h2>
    <p>Lorem ipsum dolor sit amet, eu tamquam appareat deterruisset pri, sea et vivendum suavitate mediocritatem. Qui puto
        essent option ex, pro in tractatos neglegentur. Omnium apeirian expetendis vel id.</p>
    <p>Eirmod utamur vis in, nec eu ferri dicit. Eros sale libris ut ius.
        Vix cu semper vivendo propriae.</p>      
    <img src="/assets/images/oldenburg-stadt.jpeg" width="775" height="500" alt="Picture of Oldenburg">  
    <p>Scripta mediocritatem nam eu, atomorum rationibus sententiae quo in. Elitr oblique est ex, vel iuvaret eripuit ad.
        Sea magna inimicus sadipscing in, per cetero fuisset ut. Error epicuri his te, an cibo duis regione has. Ad omnis
        melius fierent qui, est quas sonet latine ei, odio scaevola iudicabit qui id. Insolens necessitatibus ut pro.</p>
</header>
<section>
    <form action=""> 
        <h2 id="#suche">Schule Suchen</h2>
        <input type="text" label="Schoolname" placeholder="Schulname">
        <select label="Schooltype">
            <option value="form1">Grundschule</option>
            <option value="form2">Gymnasium</option>
            <option value="form3">Oberschule</option>
            <option value="form4">Förderschule</option>
            <option value="form5">Integrierte Gesamtschule</option>
            <option value="form6">Berufsbildende Schule</option>  
        </select>
        <select label="district">
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
        <button label="Signin" type="submit" name="anmelden">Suchen</button>    
    </form>
    <?php include 'pages/detail.php';?>   
</section>  
<section>
    <h2 id="map">Map</h2>
    <iframe title="Map of Oldenburg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2393.0944202097276!2d8.187361315219686!3d53.14439997993721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b6dfb1330a433f%3A0xcd64e0ccd2c6150b!2sBBS+Berufsbildende+Schulen+Haarentor!5e0!3m2!1sde!2sde!4v1555402008182!5m2!1sde!2sde" width="300" height="225" frameborder="0" style="border:0" ></iframe>
    <br>
</section>
<section>
    <form action=""> 
        <h2 id="anmelden">Anmelden</h2>
        <input label="E-mail" type="text" name="mail" placeholder="E-Mail Adresse"><br>         
        <input label="Password" type= "password" name="passwort" placeholder="Passwort"><br>     
        <button label="Signin" type="submit" name="anmelden">Anmelden</button>
        <br>
    </form>
</section>
<section>
    <form> 
        <h2 id=registrieren>Registrieren</h2>
        <input label="FirstName" type= "text" name="firstName" placeholder="Vorname"><br>        
        <input label="Lastname" type="text" name="lastName" placeholder="Nachname"><br>         
        <input label="E-Mail" type="text" name="email" placeholder="Email"><br>        
        <input label="Password" type="password" name="passwort" placeholder="Passwort"><br>      
        <input label="ReEnterPassword" type= "password" name="passwort2" placeholder="Passwort wiederholen"><br>      
        <button label="Signup" type="submit" name="registrieren" > Registrieren </button>
    </form>
</section>
<section>
    <form action=""> 
        <h2 id="anlegen">Anlegen</h2>
        <input type= "text" name="schulname" placeholder="Name der Schule">
        <select label="Schooltype">
            <option value="form1">Grundschule</option>
            <option value="form2">Gymnasium</option>
            <option value="form3">Oberschule</option>
            <option value="form4">Förderschule</option>
            <option value="form5">Integrierte Gesamtschule</option>
            <option value="form6">Berufsbildende Schule</option>   
        </select>
        <select label="Disctrict"> 
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
        <textarea label="SchoolDescription" placeholder="Beschreibung"> </textarea>
        <br> 
        <input label="SchoolImage" type="file" accept="image/png, image/jpeg"> 
        <br>
        <button type="submit" name="anlegen">Schule Anlegen</button>
    </form>
</section>
<?php include 'pages/footer.php';?>  
</body>
</html> 