<section>
    <h2 id="anmelden" class="card-header">Anmelden</h2>
    <form class="login-body" method="post">
        <input type="hidden" name="type" value="Login">
        <input class="input" id="login-e-mail" type="email" name="emailLogin" placeholder="E-Mail Adresse" required>
        <input class="input" id="login-password" type="password" name="passwordLogin" placeholder="Passwort" required>
        <div>
            Mit dem Login bin ich damit einverstanden, dass die Seite Cookies speichert.
        <input type="checkbox" name="checkbox" class="checkbox" value="check" id="agree" />
        </div>
        <?php
        if (isset($loginError) && $loginError === 'loginFehler') { ?>
            <div class="errorLabel" style="color: red; font-size: 15px">
                Logindaten falsch
            </div>
            <div id="loginError" style="display: none"></div>
        <?php } ?>
        <button class="default-button card-footer button-size" type="submit" name="anmelden">Anmelden</button>
        <a href="#">Passwort vergessen</a>
    </form>
</section>