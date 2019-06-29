var map;


function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 53.141259, lng: 8.211299}
    });
    var geocoder = new google.maps.Geocoder();
    $(document).ready(geocodeAddressLoadDefault(geocoder, map, allSchools));
}

$(function () {
    var wantedSchoolType;
    document.getElementById('oberschulen').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        console.log(wantedSchoolType);
    });
    document.getElementById('gymnasien').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        console.log(wantedSchoolType);
    });
    document.getElementById('bbs').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        console.log(wantedSchoolType);
    });
    document.getElementById('gesamtschulen').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        console.log(wantedSchoolType);
    });
    document.getElementById('grundschulen').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        console.log(wantedSchoolType);
    });
    $(document).on("submit", "#schoolTypeFilter", function (e) {
        e.preventDefault();
    });
    $(document).on("click", "#addMarks", function (e) {
        e.preventDefault();
        var geocoder = new google.maps.Geocoder();
        var district = jQuery("#districtFilter").val();
        console.log(district + " "+wantedSchoolType);
        $.ajax({
            type: 'POST',
            url: "pages/map/filterHandler.php",
            dataType: 'json',
            data: {
                district: district,
                schoolType: wantedSchoolType
            },
            error: function (data) {
                alert(data);
            },
            success: function (specificSchools) {
                console.log(specificSchools);
            geocodeAddressOnlyShow(geocoder, map, specificSchools);
            }
        });
    });
});

function geocodeAddressOnlyShow(geocoder, resultsMap, specificSchools) {
    alert(specificSchools);

    function forEachSchool(item, index) {
        var address = item.street + " oldenburg "+item.house_number+" "+item.zip_code;
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
}
//Map every existing school to a marker in the google maps on Load of website
function geocodeAddressLoadDefault(geocoder, resultsMap, allSchools) {

        allSchools.forEach(forEachSchool);

        function forEachSchool(item, index) {
            var address = item.street + " oldenburg "+item.house_number+" "+item.zip_code;
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
}