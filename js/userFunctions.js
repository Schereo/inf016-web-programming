window.onload = checkPasswordStrength;

function checkPasswordStrength() {
    $.getScript("pages/register/passwordDictionary.js", function () {
    });
    var strength = {
        0: "Sehr schwach ☹", 1: "Schwach ☹", 2: "Mittel ☹", 3: "Stark", 4: "Sehr stark"
    }
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


function addRating(schoolID, userID) {
    var schoolID = schoolID;

    var Kantine = $("input[name='ratingK']:checked").val();
    var Lernumgebung = $("input[name='ratingLU']:checked").val();
    var Lehrer = $("input[name='ratingL']:checked").val();
    var Aktivitaeten = $("input[name='ratingA']:checked").val();

    $.ajax({
        type: 'POST',
        url: "pages/feedback/feedbackHandler.php",
        data: {
            canteen: Kantine,
            teacher: Lehrer,
            learnenvironment: Lernumgebung,
            activity: Aktivitaeten,
            school_id: schoolID
        },
        error: function () {
            $('#feedbackStatus').html('<span style="color:#EA4335;">Bewertung fehlgeschlagen.<span>');
        },
        success: function () {
            $("#feedbackDiv").load(location.href + " #feedbackDiv");
            $('#feedbackStatus').html('<span style=color:#28A74B;">Bewertung hinzugefügt. <span>');
        }
    });
    return false;

}

