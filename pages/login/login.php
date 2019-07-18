<section id="anmeldenSection">
    <h2 id="anmelden" class="card-header">Anmelden</h2>
    <form class="login-body" method="post">
        <input type="hidden" name="type" value="Login">
        <input class="input" id="login-e-mail" type="email" name="emailLogin" placeholder="E-Mail Adresse" required>
        <input class="input" id="login-password" type="password" name="passwordLogin" placeholder="Passwort" required>
        <?php
        if (isset($loginError) && $loginError === 'loginFehler') { ?>
            <div class="errorLabel" style="color: red; font-size: 15px">
                Logindaten falsch
            </div>
            <div id="loginError" style="display: none"></div>
        <?php } ?>
        <div>
            <button class="default-button card-footer button-size" type="submit" name="anmelden">Anmelden</button>
            <a href="#">Passwort vergessen</a></div>
    </form>
</section>