function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 53.141259, lng: 8.211299}
    });
    var geocoder = new google.maps.Geocoder();

    document.onload(geocodeAddressLoadDefault(geocoder, map,));

    document.getElementById('oberschulen').addEventListener('click', function () {
        geocodeAddress(geocoder, map, 'oberschulen');
    });
    document.getElementById('gymnasien').addEventListener('click', function () {
        geocodeAddress(geocoder, map, 'gymnasien');
    });
    document.getElementById('bbs').addEventListener('click', function () {
        geocodeAddress(geocoder, map, 'bbs');
    });
    document.getElementById('gesamtschulen').addEventListener('click', function () {
        geocodeAddress(geocoder, map, 'gesamtschulen');
    });
    document.getElementById('grundschulen').addEventListener('click', function () {
        geocodeAddress(geocoder, map, 'grundschulen');
    });


}

$(function () {
    $(document).on("submit", "#schoolTypeFilter", function (e) {
        e.preventDefault();
    });
    $(document).on("click", "#addMarks", function (e) {
        e.preventDefault();

        var district = jQuery("#districtFilter").val();
        var school_type = jQuery("#addedSchoolTypeHidden").val();

        $.ajax({
            type: 'POST',
            url: "pages/map/filterHandler.php",
            data: {
                district: district,
                schoolType: school_type
            },
            error: function () {
                $('#feedbackStatus').html('<span style="color:#EA4335;">Bewertung fehlgeschlagen.<span>');
            },
            success: function () {
                $("#feedbackDiv").load(location.href + " #feedbackDiv");
                $('#feedbackStatus').html('<span style=color:#28A74B;">Bewertung hinzugefügt. <span>');
            }
        });
    });
});

function geocodeAddress(geocoder, resultsMap, elementID) {
    var address = document.getElementById(elementID).value;
    geocoder.geocode({'address': address}, function (results, status) {
        if (status === 'OK') {
            var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}
function geocodeAddressLoadDefault(geocoder, resultsMap, schools) {
    var address;
    schools.forEach(function(element){
        alert(element);
    });
}