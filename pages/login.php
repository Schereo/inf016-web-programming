<?php
if (file_exists("cred.txt") &&
is_readable("cred.txt")) {
    echo("test");
    $myfile = file_get_contents("cred.txt") or die("Unable to open file!");
    $credentials = explode("\n", $myfile);
}
if(isset($_POST['anmelden'])){
    $found = false;
    $iterator = 0;
    settype($iterator, "integer");
    $username = strip_tags($_POST['mail']);
    $password = strip_tags($_POST['passwort']);
  //  while($credentials[iteratori+1] != null || $found = true) {
        if ($username == $credentials[iterator] && $password == $credentials[iterator+1]) {
            echo("du eingeloggt");
            $found = true;
        }
        if($found == true){
            $_SESSION['user'] = array(
                'name' => $username,
                'login' => 'login');
        }
 //   }
}
?>

<section>
    <h2 id="anmelden" class="card-header">Anmelden</h2>
    <form class="login-body" method="post">
        <input class="input" id="login-e-mail" type="text" name="mail" placeholder="E-Mail Adresse">
        <input class="input" id="login-password" type="password" name="passwort" placeholder="Passwort">
        <button class="default-button card-footer button-size" type="submit" name="anmelden">Anmelden</button>
        <a href="#">Passwort vergessen</a>
    </form>
</section>