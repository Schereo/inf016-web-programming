var map;
var markers = [];

//Initialize the Map with Oldenburg in Center. Zoom may be adjusted. By Default load all Schools.
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 53.141259, lng: 8.211299}
    });
    var geocoder = new google.maps.Geocoder();
    $(document).ready(geocodeAddressLoadDefault(geocoder, map, allSchools));
}
//Append EventListeners to the Filter Buttons that save their Value in a local variable for later use
$(function () {
    var wantedSchoolType;
    document.getElementById('oberschulen').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        filter()
    });
    document.getElementById('gymnasien').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        filter()
    });
    document.getElementById('bbs').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        filter()
    });
    document.getElementById('gesamtschulen').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        filter()
    });
    document.getElementById('grundschulen').addEventListener('click', function () {
        wantedSchoolType = $(this).val();
        filter()
    });
    document.getElementById('resetMarkers').addEventListener('click', function (e) {
        wantedSchoolType = $(this).val();
        filter( )
    });
    $(document).on("submit", "#schoolTypeFilter", function (e) {
        e.preventDefault();
    });
   function filter(){
        var geocoder = new google.maps.Geocoder();
        //get the chosen district
        var district = jQuery("#districtFilter").val();
        //if button "Alle Schulen" has been pressed instead display all schools again
        if(wantedSchoolType === "resetMarkers"){
            DeleteMarkers();
            geocodeAddressLoadDefault(geocoder, map, allSchools);
        }else{
            //get all schools for this district & schooltype
        $.ajax({
            type: 'POST',
            url: "pages/map/filterHandler.php",
            dataType: 'json',
            data: {
                district: district,
                schoolType: wantedSchoolType
            },
            error: function (data) {
                alert("Konnte keine Schulen finden! Sie sehen weiterhin alle Schulen.");
            },
            success: function (data) {
                //reset all Markers and add the found schools.
                    DeleteMarkers();
                    geocodeAddressOnlyShow(geocoder, map, data)
            }
        });
    }}
});

// Only show selected amount of Schools
function geocodeAddressOnlyShow(geocoder, resultsMap, specificSchools) {

    //iterate through all found schools and place a marker.
    specificSchools.forEach(forEachSchoolReplace);

    function forEachSchoolReplace(item, index) {
        var address = item.street + " oldenburg " + item.house_number + " " + item.zip_code+" "+item.name;;
        geocoder.geocode({'address': address}, function (results, status) {
            if (status === 'OK') {
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location,
                    title: item.name + "\nSchultyp: "+ item.school_type+"\n"+item.street+" "+item.house_number+"\n"+item.zip_code+" "+item.city,
                });
                markers.push(marker);
                if(markers[0] == null){
                    alert("Konnte keine Schulen finden! Sie sehen weiterhin alle Schulen.");
                }
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
        var address = item.street + " oldenburg " + item.house_number + " " + item.zip_code+" "+item.name;
        geocoder.geocode({'address': address}, function (results, status) {
            if (status === 'OK') {
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location,
                    title: item.name + "\nSchultyp: "+ item.school_type+"\n"+item.street+" "+item.house_number+"\n"+item.zip_code+" "+item.city,
                });
                markers.push(marker);
                if(markers[0] == null){
                    alert("Konnte keine Schulen finden! Sie sehen weiterhin alle Schulen.");
                }
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
}

function DeleteMarkers() {
    //Loop through all the markers and remove them
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers = [];
};
