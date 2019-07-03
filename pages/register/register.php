<link rel="stylesheet" href="pages/register/register.css"/>
<section id="registrierenSection">
    <h2 id="registrieren" class="card-header">Registrieren</h2>
    <form class="register-body" method="post">
        <input type="hidden" name="type" value="Register">
        <input class="input" type="text" name="firstNameReg" placeholder="Vorname" maxlength="20" required>
        <input class="input" type="text" name="lastNameReg" placeholder="Nachname" maxlength="20" required>
        <input class="input" type="email" name="emailReg" placeholder="Email" maxlength="50" required>
        <?php
        if (isset($registerError) && $registerError === 'existiert') { ?>
            <div class="errorLabel" style="color: red; font-size: 15px">
                Benutzer bereits vorhanden
            </div>
            <div id="benutzerRegisterError" style="display: none"></div>
        <?php } ?>

        <input class="input"  id="regPassword" type="password" name="passwordReg" placeholder="Passwort" minlength="5" maxlength="20" required>
        <meter max="4" id="password-strength-meter"></meter>
        <p id="password-strength-text"></p>
        <!-- Enable the CheckPasswordStrength + Bar and Info when Scripts are enabled, default CSS property : display:hidden-->
        <script onload="checkPasswordStrength()">
        document.getElementById('password-strength-meter').style.display='block';
        document.getElementById('password-strength-text').style.display='block';
        </script>

        <input class="input" type="password" name="password2Reg" placeholder="Passwort wiederholen"minlength="5" maxlength="20" required>
        <?php
        if (isset($registerError) && $registerError === 'verschieden') { ?>
            <div class="errorLabel" style="color: red; font-size: 15px">
                Passwörter stimmen nicht überein
            </div>
            <div id="passwordRegisterError" style="display: none"></div>
        <?php } ?>
        <button class="default-button button-size" type="submit" name="registrieren"> Registrieren</button>
    </form>
</section>