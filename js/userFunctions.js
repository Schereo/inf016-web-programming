window.onload=checkPasswordStrength;

function checkPasswordStrength() {
    $.getScript("pages/register/passwordDictionary.js", function () {
    });
    var strength = {
        0: "Sehr schwach ☹", 1: "Schwach ☹", 2: "Mittel ☹", 3: "Stark", 4: "Sehr stark"}
    var password = document.getElementById('regPassword');
    var meter = document.getElementById('password-strength-meter');
    var text = document.getElementById('password-strength-text');
    password.addEventListener('input', function () {
        var val = password.value;
        var result = zxcvbn(val);
        // Update the password strength meter
        meter.value = result.score;
        // Update the text indicator
        if (val !== "") {
            text.innerHTML = "Passwortstärke: " + "<strong>" + strength[result.score] + "</strong>" + "<span class='feedback'>: " + result.feedback.warning + " " + result.feedback.suggestions + "</span";
        } else {
            text.innerHTML = "";
        }
    })
};
