<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '486010828897938',
            cookie: true,
            xfbml: true,
            version: 'v2.8'
        });
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/de_DE/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            console.log('Logged in and authenticated');
            FB.api('/me', function(response) {
                var id = response.id;
                alert(response.id);
               jQuery.ajax({
                   type: 'post',
                   url: 'pages/login/loginHandler.php',
                   data: {id : id},
                   success:function (result) {
                       console.log(result);
                   }
               })
            });
        } else {
            console.log('Not authenticated');
        }
    }

    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    }

    function logout() {
        FB.logout(function (response) {
        });
    }
</script>
<script async defer src="https://connect.facebook.net/de_DE/sdk.js"></script>
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
        <div class="fb-login-button" data-width="" data-size="medium" data-button-type="continue_with"
             data-auto-logout-link="false" data-use-continue-as="false"></div>

    </form>
</section>