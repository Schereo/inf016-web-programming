$(document).ready(function () {
    var id;
    $('#upload').on('submit', function uploadPic(e) {
        id = document.getElementById("upload").name;
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "pages/editSchool/upload.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            multiple: true,
            allowedTypes: "jpg,jpeg,png",
            error: function () {
                $('#uploadStatus').html('<span style="color:#EA4335;">Upload fehlgeschlagen.<span>');
            },
            success: function (data) {
                var color;
                if(data === "Upload erfolgreich"){
                    color = "green";
                } else color = "red";
                $('#uploadStatus').html('<span style=color:' + color + '>' + data + '</span>');
                $('#UploadGallery').load("pages/editSchool/displayUploads.php", {id: id});
            }
        })
    });
    $('#eUpload').on('submit', function eUploadPic(e) {
        id = document.getElementById("eUpload").name;
        var data = new FormData(this);
        data.append("id", id);
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "pages/editSchool/upload.php",
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            multiple: true,
            allowedTypes: "jpg,jpeg,png",
            error: function () {
                $('#uploadStatus').html('<span style="color:#EA4335;">Upload fehlgeschlagen.<span>');
            },
            success: function (data) {
                var color;
                if(data === "Upload erfolgreich"){
                    color = "green";
                } else color = "red";
                $('#uploadStatus').html('<span style=color:' + color + '>' + data + '</span>');
                $('#UploadGallery').load("pages/editSchool/displayUploads.php", {id: id});
            }
        });
    });
});

function deletePic(img, schoolID){
    var id = schoolID;
    $.ajax({
        type: 'POST',
        url: "pages/editSchool/deleteImgHandler.php",
        data: {img: img},
        error: function () {
            $('#uploadStatus').html('<span style="color:#EA4335;">löschen fehlgeschlagen.<span>');
        },
        success: function () {
            $('#uploadStatus').html('<span style=color:#28A74B;">löschen erfolgreich. <span>');
            $('#UploadGallery').load("pages/editSchool/displayUploads.php", {id: id});
        }
    });
    return false;
}