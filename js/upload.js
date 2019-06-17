$(document).ready(function () {
    var id;
    $('#upload').on('submit', function uploadPic(e) {
        //id = "<?php echo $_SESSION['user_ID'] ?>";
        id=4;
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
            success: function () {
                $('#uploadStatus').html('<span style=color:#28A74B;">Upload erfolgreich.<span>');
                $('#UploadGallery').load("pages/editSchool/displayUploads.php", {id: id});
            }
        })
    });
    $('#eUpload').on('submit', function eUploadPic(e) {
        //id = "<?php echo $school['school_id'] ?>";
        id = 57;
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
            success: function () {
                $('#uploadStatus').html('<span style=color:#28A74B;">Upload erfolgreich.<span>');
                $('#UploadGallery').load("pages/editSchool/displayUploads.php", {id: id});
            }
        })
    });

});

function deletePic(img) {
    $.ajax({
        type: 'POST',
        url: "pages/editSchool/deleteImgHandler.php",
        data: {img: img},
        error: function () {
            $('#uploadStatus').html('<span style="color:#EA4335;">löschen fehlgeschlagen.<span>');
        },
        success: function () {
            $('#uploadStatus').html('<span style=color:#28A74B;">löschen erfolgreich.<span>');
        }
    })
}

function showPicture() {
    var id = "<?php echo $school['school_id'] ?>";
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'pages/editSchool/displayUploads.php',
        data: {id : id},
        success: function () {
            $('#uploadStatus').html('<span style=color:#28A74B;">löschen erfolgreich.<span>');
            $('#UploadGallery').load("pages/editSchool/displayUploads.php", {id: id});
        }
    })
}