$(function () {
   // check for hash if exist, then focus the element
    if (window.location.hash) {

        var ele_id = window.location.hash.substring(1);

        $("#" + ele_id).focus();
    }

// liveIn Code
    var liveIn = document.getElementById('liveIn');
    var liveInBox = new google.maps.places.SearchBox(liveIn);

    liveInBox.addListener('places_changed', function () {
        var places = liveInBox.getPlaces();
        if (places.length == 0) {
            $("#liveIn").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
            $(".liveIn_error").html($("#addListing_required").val());
            return;
        } else {
            if (places[0].address_components) {
                var length = places[0].address_components.length;
                var liveIn = places[0].address_components[0].long_name + "," + places[0].address_components[length - 1].long_name;
                $("#liveIn").val(liveIn);

            } else {
                console.log("bbbb")
                $("#liveIn").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
                $(".liveIn_error").html($("#addListing_required").val());
                return;
            }
        }

        if (!places[0].geometry) {
            console.log("Returned place contains no geometry");
            return;
        }
    });

// homeTown Code
    var homeTown = document.getElementById('homeTown');
    var homeTownBox = new google.maps.places.SearchBox(homeTown);

    homeTownBox.addListener('places_changed', function () {
        var places = homeTownBox.getPlaces();
        if (places.length == 0) {
            $("#homeTown").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
            $(".homeTown_error").html($("#addListing_required").val());
            return;
        } else {
            if (places[0].address_components) {
                var length = places[0].address_components.length;
                var liveIn = places[0].address_components[0].long_name + "," + places[0].address_components[length - 1].long_name;
                $("#homeTown").val(liveIn);

            } else {
                console.log("bbbb")
                $("#homeTown").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
                $(".homeTown_error").html($("#addListing_required").val());
                return;
            }
        }

        if (!places[0].geometry) {
            console.log("Returned place contains no geometry");
            return;
        }
    });

    $('#validateForm input[name=phone]').trigger('change');

});

var isExistsPhone = false;
var isValidPhone = {};
// isValidPhone = clearZeroFromPhone($("input[name='phone']"), $("select[name='country_code']"));
$("#validateForm input[name='phone']").on('change', function () {
    isValidPhone = clearZeroFromPhone($("#validateForm input[name='phone']"), $("#validateForm select[name='country_code']"));
    if (isValidPhone.status == 'success') {
        $("#validateForm input[name='phone']").val(isValidPhone.msg);
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').hide();
        $("#validateForm input[name='phone']").parent().removeClass('has-error');

    }
    else {
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').html(isValidPhone.msg);
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').show();
        $("#validateForm input[name='phone']").parent(".form-group").addClass('has-error');
        return false;
    }

    if (!$(this).val()) {
        isExistsPhone = false;
    } else {
        $.ajax({
            url: $("#editProfile_checkPhoneUrl").val(),
            type: "POST",
            async: false,
            data: {
                _token: $("#editProfile_checkUniquePhoneCSRFToken").val(),
                phone: $(this).val()
            },
            dataType: "json",
            success: function (response) {
                if ( response['stat'] == 0) {
                    isExistsPhone = true;
                    $("#validateForm input[name='phone']").parent().find('.edit_profile_errors').show();
                    $("#validateForm input[name='phone']").parent().find('.edit_profile_errors').html(response['msg']);
                    $("#validateForm input[name='phone']").parent(".form-group").addClass('has-error');
                }
                else{
                    $("#validateForm input[name='phone']").parent().find('.edit_profile_errors').hide();
                    $("#validateForm input[name='phone']").parent().removeClass('has-error');
                    isExistsPhone = false;
                }

            }
        });
    }
})

var isExistsEmail = false;
$("input[name='secondary_email']").on('change', function () {

    if (!$(this).val()) {
        isExistsEmail = false;
    } else {
        $.ajax({
            url: $("#editProfile_checkUniqueEmail").val(),
            type: "POST",
            async: false,
            data: {
                _token: $("#editProfile_checkUniqueEmailCSRFToken").val(),
                secondary_email: $(this).val()
            },
            dataType: "json",
            success: function (response) {
                if (response == true) {
                    $("input[name='secondary_email']").parent().find('.edit_profile_errors').hide();
                    $("input[name='secondary_email']").parent().removeClass('has-error');
                    isExistsEmail = false;
                }
                else {
                    isExistsEmail = true;
                    $("input[name='secondary_email']").parent().find('.edit_profile_errors').show();
                    $("input[name='secondary_email']").parent(".form-group").addClass('has-error');
                }
            }
        });
    }
});

$("#validateForm select[name='country_code']").on('change', function () {
    isValidPhone = clearZeroFromPhone($("#validateForm input[name='phone']"), $("#validateForm select[name='country_code']"));
    if (isValidPhone.status == 'success') {
        $("#validateForm input[name='phone']").val(isValidPhone.msg);
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').hide();
        $("#validateForm input[name='phone']").parent().removeClass('has-error');

    }
    else {
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').html(isValidPhone.msg);
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').show();
        $("#validateForm input[name='phone']").parent(".form-group").addClass('has-error');
    }

});

$("input[name='address'],input[name='job'],input[name='school']").on('change', function () {
    if (!$(this).val()) {
        $(this).parent().find('.edit_profile_errors').hide();
        $(this).parent().removeClass('has-error');
    } else {

        var websiteRegex = /^(?=.*[A-Za-zا-ى]+)/;
        var websiteNumRegex = /^(?=.*[A-Za-zا-ى])(?=.*[0-9])/;
        if ($(this).val().match(websiteRegex) || $(this).val().match(websiteNumRegex)) {
            $(this).parent().find('.edit_profile_errors').hide();
            $(this).parent().removeClass('has-error');
        }
        else {
        }
    }
})

$("input[name='website']").on('change', function () {
    if (!$(this).val()) {
        $(this).parent().find('.edit_profile_errors').hide();
        $(this).parent().removeClass('has-error');
    } else {
        var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
        var websiteRegex = new RegExp(expression);
        if ($(this).val().match(websiteRegex)) {
            $(this).parent().find('.edit_profile_errors').hide();
            $(this).parent().removeClass('has-error');
        }
        else {
            $(this).parent().find('.edit_profile_errors').show();
            $(this).parent().addClass('has-error');
        }
    }
})


var i = 0;
$("#validateForm").on("submit", function (e) {
    var first_name = document.forms["editProfile"]["first_name"].value;
    first_name = first_name.trim();
    var last_name = document.forms["editProfile"]["last_name"].value;
    last_name = last_name.trim();
    var phone = document.forms["editProfile"]["phone"].value;
    phone = phone.trim();
    var email = document.forms["editProfile"]["email"].value;
    email = email.trim();
    var secondary_email = document.forms["editProfile"]["secondary_email"].value;
    secondary_email = secondary_email.trim();
    var address = document.forms["editProfile"]["address"].value;
    address = address.trim();
    var job = document.forms["editProfile"]["job"].value;
    job = job.trim();
    var school = document.forms["editProfile"]["school"].value;
    school = school.trim();
    var website = document.forms["editProfile"]["website"].value;
    website = website.trim();


    var liveInInput = document.forms["editProfile"]["liveIn"].value;
    liveInInput = liveInInput.trim();

    var homeTownInput = document.forms["editProfile"]["homeTown"].value;
    homeTownInput = homeTownInput.trim();

    var countryCode = document.forms["editProfile"]["country_code"].value;
    countryCode = countryCode.trim();


    //city
    // var city = document.forms["editProfile"]["city"].value;
    // city = city.trim();

    if (!validateName(first_name)) {
        i++;
        $("#error_first_name").html($("#editProfile_firstNameError").val());
        $("#error_first_name").parent(".form-group").addClass("has-error");
    } else {
        $("#error_first_name").html("");
        $("#error_first_name").parent(".form-group").removeClass("has-error");

    }
    if (liveInInput == "") {
        i++;
        $("#error_liveIn").html($("#editProfile_liveIn").val());
        $("#error_liveIn").parent(".form-group").addClass("has-error");
    } else {
        $("#error_liveIn").html("");
        $("#error_liveIn").parent(".form-group").removeClass("has-error");

    }
    if ((homeTownInput) == "") {
        i++;
        $("#error_homeTown").html($("#editProfile_homeTown").val());
        $("#error_homeTown").parent(".form-group").addClass("has-error");
    } else {
        $("#error_homeTown").html("");
        $("#error_homeTown").parent(".form-group").removeClass("has-error");

    }
    if ((countryCode) == "") {
        i++;
        $("#error_countryCode").html($("#editProfile_countryCode").val());
        $("#error_countryCode").parent(".form-group").addClass("has-error");
    } else {
        $("#error_countryCode").html("");
        $("#error_countryCode").parent(".form-group").removeClass("has-error");

    }

    if (!validateName(last_name)) {

        i++;
        $("#error_last_name").html($("#editProfile_lastNameError").val());

        $("#error_last_name").parent(".form-group").addClass("has-error");
    } else {
        $("#error_last_name").html("");
        $("#error_last_name").parent(".form-group").removeClass("has-error");


    }

    if (!validateEmail(email)) {

        i++;
        $("#error_email").html($("#editProfile_emailError").val());

        $("#error_email").parent(".form-group").addClass("has-error");

    } else {
        $("#error_email").html("");

        $("#error_email").parent(".form-group").removeClass("has-error");


    }


    $('input[name=secondary_email]').trigger('change');

    if (isExistsEmail == true && $('input[name=secondary_email]').val() != '') {
        i++;
        $("input[name='secondary_email']").parent().find('.edit_profile_errors').show();
        $("input[name='secondary_email']").parent(".form-group").addClass('has-error');

    } else if (!validateEmail(secondary_email) && isExistsEmail == false && $("input[name='secondary_email']").val() != '') {
        i++;
        $("input[name='secondary_email']").parent().find('.edit_profile_errors').hide();
        $("#error_secondary_email").html($("#editProfile_secondaryEmailError").val());
        $("#error_secondary_email").parent(".form-group").addClass("has-error");
    } else {
        $("input[name='secondary_email']").parent().find('.edit_profile_errors').hide();
        $("#error_secondary_email").html("");
        $("#error_secondary_email").parent(".form-group").removeClass("has-error");
    }


    // $('input[name=phone]').trigger('change');
    if (isExistsPhone == true) {
        i++;
        $("#validateForm input[name='phone']").parent().find('.edit_profile_errors').show();
        $("#validateForm input[name='phone']").parent().addClass('has-error');

    } else {
        $("#validateForm input[name='phone']").parent().find('.edit_profile_errors').hide();
        $("#validateForm input[name='phone']").parent().removeClass('has-error');
    }

    if (!validatePhone(phone) && isExistsPhone == false) {

        i++;

        $("#error_phone").html($("#editProfile_phoneError").val());

        $("#error_phone").parent(".form-group").addClass("has-error");

    } else if (isValidPhone.status == 'error') {
        i++;
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').html(isValidPhone.msg);
        $("#validateForm input[name='phone']").parent().find('.edit_profile_verify_phone_errors').show();
        $("#validateForm input[name='phone']").parent(".form-group").addClass('has-error');
    }
    else if (isExistsPhone == false) {
        $("#error_phone").html("");

        $("#error_phone").parent(".form-group").removeClass("has-error");


    }
    if (haveLetter(address) != true && $("input[name='address']").val()) {
        i++;
        $("input[name='address']").parent().find('.edit_profile_errors').show();

        $("input[name='address']").parent(".form-group").addClass('has-error');

    } else {
        $("input[name='address']").parent().find('.edit_profile_errors').hide();

        $("input[name='address']").parent(".form-group").removeClass('has-error');

    }

    if (haveLetter(job) != true && $("input[name='job']").val()) {
        i++;
        $("input[name='job']").parent().find('.edit_profile_errors').show();

        $("input[name='job']").parent(".form-group").addClass('has-error');

    } else {
        $("input[name='job']").parent().find('.edit_profile_errors').hide();

        $("input[name='job']").parent(".form-group").removeClass('has-error');

    }

    if (haveLetter(school) != true && $("input[name='school']").val()) {
        i++;
        $("input[name='school']").parent().find('.edit_profile_errors').show();

        $("input[name='school']").parent(".form-group").addClass('has-error');

    } else {
        $("input[name='school']").parent().find('.edit_profile_errors').hide();

        $("input[name='school']").parent(".form-group").removeClass('has-error');

    }

    if (isUrl(website) != true && $("input[name='website']").val()) {
        i++;
        $("input[name='website']").parent().find('.edit_profile_errors').show();

        $("input[name='website']").parent(".form-group").addClass('has-error');

    } else {
        $("input[name='website']").parent().find('.edit_profile_errors').hide();

        $("input[name='website']").parent(".form-group").removeClass('has-error');


    }

    /*
     update city
     */

    // if(!validateName(city)){
    //     i++ ;
    //     $("#city").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
    //
    // }else{
    //     $("#city").attr('style', '');
    //
    // }


    if (i > 0) {
        scrollToElement($("div.has-error:first"));
        return false;
    }
    else {
        return true;
    }

});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateName(name) {
    var re = /^(?=^.{1,30}$)^([A-Za-zا-ى][\s]?)+$/;
    return re.test(name);
}

function validatePhone(phone) {
    var re = /^[0-9\s]*$/;

    return re.test(phone);
}


function haveLetter(input) {

    var websiteRegex = /^(?=.*[A-Za-zا-ى]+)/;
    var websiteNumRegex = /^(?=.*[A-Za-zا-ى])(?=.*[0-9])/;

    if (websiteRegex.test(input) == true || websiteNumRegex.test(input) == true) {
        return true;
    }


}

function isUrl(input) {

    var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
    var websiteRegex = new RegExp(expression);

    if (websiteRegex.test(input) == true) {
        return true;
    }


}

function scrollToElement(element) {

    $('html, body').animate({
        scrollTop: element.offset().top
    }, 2000, function () {
        element.find("input").focus();
    });
}

var current_date = new Date;
current_date.setFullYear(current_date.getFullYear() - 6);

$("#dateOfBirth").datepicker({maxDate: current_date, minDate: new Date(2007, 6, 12)});
