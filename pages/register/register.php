<link rel="stylesheet" href="pages/register/register.css"/>
<section>
    <h2 id=registrieren class="card-header">Registrieren</h2>
    <form class="register-body" method="post">
        <input type="hidden" name="type" value="Register">
        <input class="input" type="text" name="firstNameReg" placeholder="Vorname">
        <input class="input" type="text" name="lastNameReg" placeholder="Nachname">
        <input class="input" type="email" name="emailReg" placeholder="Email">
        <input class="input"  id="regPassword" type="password" name="passwordReg" placeholder="Passwort">

        <meter max="4" id="password-strength-meter"></meter>
        <p id="password-strength-text"></p>
        <!-- Enable the CheckPasswordStrength + Bar and Info when Scripts are enabled, default CSS property : display:hidden-->
        <script onload="checkPasswordStrength()">
        document.getElementById('password-strength-meter').style.display='block';
        document.getElementById('password-strength-text').style.display='block';
        </script>

        <input class="input" type="password" name="password2Reg" placeholder="Passwort wiederholen">
        <button class="default-button button-size" type="submit" name="registrieren"> Registrieren</button>
    </form>
</section>