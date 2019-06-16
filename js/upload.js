$(document).ready(function () {
    $('#upload').on('submit', function uploadPictures (e) {
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
                $('#UploadGallery').load("pages/editSchool/displayUploads.php");
            }
        })
    });
});
