
var ProfilePhoto = {
    csrfToken: "",
    requestRootUrl: "",
    upload: function (input, callback) {
        if (input[0].files.length > 0) {
            document.getElementById("loader-panel").style.display = "block";

            var formData = new FormData();

            formData.append('photo', input[0].files[0]);
            formData.append('_token', ProfilePhoto.csrfToken);
            $.ajax({
                type: 'post',
                url: ProfilePhoto.requestRootUrl + '/web/api/member/changephoto',
                contentType: false,
                processData: false,
                data: formData,
                beforeSend: function () {
                },
                success: function (response) {
                    callback(response);
                },
                complete: function (data) {
                    document.getElementById("loader-panel").style.display = "none";
                }
            });
        }
    }
    
}

$(document).on("change",".profile-image-form #imageUpload",function(e) {

    ProfilePhoto.csrfToken = $("#profile_CSRFToken").val();
    ProfilePhoto.requestRootUrl = $("#profile_requestRoot").val();

    ProfilePhoto.upload($('.profile-image-form').find('input[type=file]'), function (response) {

        if(response.state == 1) {
            var imageUrl = response.image;
            $("#bu_image").attr("src", response.image);
            $(".print-error-msg").css("display", "none");

            // change navbar profile image
            $("#navbar .nav .image-profile-user").css({backgroundImage: "url("+imageUrl.replace('medium', 'thumb')+")"});

        }else{
            printErrorMsg(response.error);
        }
    });
});

function printErrorMsg (msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
}