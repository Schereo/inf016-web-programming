$(document).ready(function () {
    $('#upload').on('submit', function (e) {
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
                $('#uploadStatus').html('<span style=color:#28A74B;">Upload erfolgreich.<span>');
                $('.UploadGallery').html(data);
            }
        })
    });
});
