var isValidPhone;
var isValidPhoneSecond;
function reportDone(id, userid) {


    $.ajax({
        type: 'GET',
        url: $("#viewProfile_requestRoot").val() + '/member/addreportuser/' + id + '/' + userid + '/' + '1'
    }).done(function (data) {
        $("#report-Modal").modal("hide");
        $("#report-sent").modal("show");
    });


}

function reportDonetext(userid) {
    var text = $("#newtext").val();
    $.ajax({
        type: 'GET',
        url: $("#viewProfile_requestRoot").val() + '/member/addreportuser/' + text + '/' + userid + '/' + '2',
        success: function (result) {

            $("#newtext").val('')
            $("#report-Modal").modal("hide");
            $("#report-sent").modal("show");

        }
    });
}


function reviewReportDone(id, reviewid) {
    $.ajax({
        type: 'GET',
        url: $("#viewProfile_requestRoot").val() + '/property/reviewreporlist/' + id + '/' + reviewid + '/' + '1'
    }).done(function (data) {

        $("#report-Modal-review-" + reviewid).modal("hide");
        $("#report-sent").modal("show");
    });
}

function reviewReportDonetext(reviewid) {
    var text = $("#reviewnewtext").val();
    $.ajax({
        type: 'GET',
        url: $("#viewProfile_requestRoot").val() + '/property/reviewreporlist/' + text + '/' + reviewid + '/' + '2'
    }).done(function (data) {
        $("#report-Modal-review-" + reviewid).modal("hide");
        $("#report-sent").modal("show");
    });
}


function replyReportDone(id, reviewid) {
    $.ajax({
        type: 'GET',
        url: $("#viewProfile_requestRoot").val() + '/property/replyreporlist/' + id + '/' + reviewid + '/' + '1'
    }).done(function (data) {

        $("#report-Modal-reply-" + reviewid).modal("hide");
        $("#report-sent").modal("show");
    });
}

function replyReportDonetext(reviewid) {
    var text = $("#replynewtext").val();
    $.ajax({
        type: 'GET',
        url: $("#viewProfile_requestRoot").val() + '/property/replyreporlist/' + text + '/' + reviewid + '/' + '2'
    }).done(function (data) {
        $("#report-Modal-reply-" + reviewid).modal("hide");
        $("#report-sent").modal("show");
    });
}


// Profile performance
$(".progress-bar").each(function () {
    each_bar_width = $(this).attr('aria-valuenow');
    $(this).width(each_bar_width + '%');
    $(this).append($(this).width(each_bar_width + '%'));
});


// edit profile info
$(".edit").click(function () {
    $(this).parent().addClass('editing');
    // $(this).parent().find(".form-control:not(.not-active)").addClass('input-test');
    $(this).parent().find("#logged_in_details").addClass('input-test');
    $(this).parent().find(".logged_in_details").show();
    $(this).parent().find("select:not(.not-active)").addClass('input-test');
    $(this).parent().find(".save, .help-block").show();
    $(this).parent().find("p").hide();
    $(this).parent().find(".save").show();
    $(this).parent().find(".active.add-another-phone-link").show();
    $(this).parent().find(".active.close-another-phone-input").show();
    $(this).parent().find(".logged_in_show_details").hide();
    $(this).parent().find(".logged_in_hide_details").show();

});


$(".save").dblclick(function () {
    $(this).parent().removeClass('editing');
    $(this).parent().find(".form-control").removeClass('input-test');
    // $(this).parent().find("#logged_in_details").removeClass('input-test');
    $(this).parent().find(".logged_in_details").hide();
    $(this).parent().find("select").removeClass('input-test');
    $(this).parent().find(".save, .help-block, .add-another-phone-link").hide();
    $(this).parent().find("p").show();
    $(this).parentsUntil().find('.close-another-phone-inpute').hide();
    $(this).parent().find(".close-another-phone-input").hide();
    $(this).parent().find(".logged_in_show_details").show();
    $(this).parent().find(".logged_in_hide_details").hide();

});

$(".logged_in_hide_details").click(function () {
    $(this).parent().removeClass('editing');
    $(this).parent().find(".form-control").removeClass('input-test');
    // $(this).parent().find("#logged_in_details").removeClass('input-test');
    $(this).parent().find(".logged_in_details").hide();
    $(this).parent().find("select").removeClass('input-test');
    $(this).parent().find(".save, .help-block, .add-another-phone-link").hide();
    $(this).parent().find("p").show();
    $(this).parentsUntil().find('.close-another-phone-inpute').hide();
    $(this).parent().find(".close-another-phone-input").hide();
    $(this).parent().find(".logged_in_show_details").show();
    $(this).parent().find(".logged_in_hide_details").hide();

});

$(".add-phone").click(function () {
    $(this).parentsUntil().find('.another-phone').find(".form-control").addClass('input-test');
    $('.close-another-phone-input').show();
    $(this).hide();
});

$(".close-another-phone-input").click(function () {
    $('#editProfileCountryCodePhoneSecond').val('');
    $('#editProfilePhoneSecond').val('');
    $(this).parentsUntil().find('.another-phone').find(".form-control").removeClass('input-test');
    $('.close-another-phone-input').hide();
    $('#showPhoneSecondDiv').hide();
    $('a.add-another-phone-link').show();
});


// upload profile picture
$(document).ready(function () {

    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".upload-button").on('click', function () {
        $(".file-upload").click();

    });

    $(".file-upload").on('dblclick', function () {
        readURL(this);
    });
    if ($("#editProfilePhone").val() != '' && $("#editProfileCountry").val() > 0) {
        isValidPhone = clearZeroFromPhone($("#editProfilePhone"), $("#editProfileCountry"));
    }

    if ($("#editProfilePhoneSecond").val() != '' && $("#editProfileCountryCodePhoneSecond").val() > 0) {
        isValidPhoneSecond = clearZeroFromPhone($("#editProfilePhoneSecond"), $("#editProfileCountryCodePhoneSecond"));
    }

});

// hide all and View all Edit buttons
function ViewAsUser(status) {
    if (status == "0") {
        //hide all btns
        $("#viewAsUserBtn").attr("onclick", "ViewAsUser('1')");
        $("#viewAsUserBtn span").html($("#viewProfile_ViewAsMyProfileToEdit").val());
        $(".changeViewProfile").hide();
    } else {
        //View all btns
        $("#viewAsUserBtn").attr("onclick", "ViewAsUser('0')")
        $("#viewAsUserBtn span").html($("#viewProfile_ViewAsUser").val());
        $(".changeViewProfile").show();

    }
}


// Date picker


/**
 *  datepicker
 * */


$(function () {

    var current_date = new Date;
    current_date.setFullYear(current_date.getFullYear() - 6);
    $('#blockOneBirthDay ').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-80:-6",
        maxDate: current_date,
        autoclose: true
    });
//// liveIn Code
    var liveIn = document.getElementById('blockOneLiveIn');
    var liveInBox = new google.maps.places.SearchBox(liveIn);


    liveInBox.addListener('places_changed', function () {
        var places = liveInBox.getPlaces();
        if (places.length == 0) {
            $("#blockOneLiveIn").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
            // $(".liveIn_error").html($("#addListing_required").val());
            return;
        } else {
            if (places[0].address_components) {
                var length = places[0].address_components.length;
                var liveIn = places[0].address_components[0].long_name + "," + places[0].address_components[length - 1].long_name;
                $("#blockOneLiveIn").val(liveIn);

            } else {
                console.log("bbbb")
                $("#blockOneLiveIn").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
                // $(".liveIn_error").html($("#addListing_required").val());
                return;
            }
        }

        if (!places[0].geometry) {
            console.log("Returned place contains no geometry");
            return;
        }
    });

// homeTown Code
    var homeTown = document.getElementById('blockOneHomeTown');
    var homeTownBox = new google.maps.places.SearchBox(homeTown);

    homeTownBox.addListener('places_changed', function () {
        var places = homeTownBox.getPlaces();
        if (places.length == 0) {
            $("#homeTown").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
            return;
        } else {
            if (places[0].address_components) {
                var length = places[0].address_components.length;
                var liveIn = places[0].address_components[0].long_name + "," + places[0].address_components[length - 1].long_name;
                $("#blockOneHomeTown").val(liveIn);

            } else {
                $("#blockOneHomeTown").attr('style', 'background:#fff9fb;border:solid 1px #e6075d;color:#e6075d');
                return;
            }
        }

        if (!places[0].geometry) {
            console.log("Returned place contains no geometry");
            return;
        }
    });
});
var phoneRegExpression = /^[0-9\s]*$/;

//first block Functions

function saveJobMailDate() {
    // var email = $("#editProfileEmail").val();
    var birthDate = $("#blockOneBirthDay").val();
    var gender = $("#blockOneGender").val();
    var gender_text = $("#blockOneGender option:selected").text();

    var can_save = 1;

    // if (email != '') {
    //     if (validateEmail(email)) {
    //         $('#editProfileEmail').attr('style', '');
    //         $(".editProfileEmail_error").html('')
    //     } else {
    //         $('#editProfileEmail').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
    //         $(".editProfileEmail_error").html($("#viewProfile_invalidEmail").val());
    //         can_save = 0;
    //     }
    // } else {
    //     $('#editProfileEmail').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
    //     $(".editProfileEmail_error").html($("#viewProfile_requiredField").val());
    //     can_save = 0;
    // }


    if (birthDate != '') {
        $('#blockOneBirthDay').attr('style', '');
        $(".blockOneBirthDay_error").html('');
    } else {
        $('#blockOneBirthDay').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".blockOneBirthDay_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }
    
    if (can_save == "1") {
        var fd = new FormData();
        fd.append('_token', $("#viewProfile_CSRFToken").val());
        // fd.append('email', email);
        fd.append('birthDate', birthDate);
        fd.append('gender', gender);

        $.ajax({
            url: $("#viewProfile_requestRoot").val() + '/web/api/member/editjobmaildate',
            type: "POST",
            contentType: false,
            data: fd,
            processData: false,
            beforeSend: function () {
                document.getElementById("loader-panel").style.display = "block";
            },
            success: function (data) {
                document.getElementById("loader-panel").style.display = "none";
                if (data['error'] == "1") {
                    ViewAsUser("0")
                    $(".save").trigger('dblclick');
                } else if (data['error'] == "3") {
                    $('#blockOneBirthDay').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".blockOneBirthDay_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "4") {
                    $('#blockOneGender').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".blockOneGender_error").html($("#viewProfile_requiredField").val());
                } else {


                    $('#blockOneBirthDay').attr('style', '');
                    $(".blockOneBirthDay_error").html('');


                    $('#blockOneGender').attr('style', '');
                    $(".blockOneGender_error").html('');

                    $('#blockOneBirthDayLabel').html(birthDate.replace(/(<([^>]+)>)/ig, ""))
                    $('#blockOneGenderLabel').html(gender_text.replace(/(<([^>]+)>)/ig, ""))
                    $(".save").trigger('dblclick');
                }

            },
            error: function () {
            }
        });
    }
    // $(".save").trigger('dblclick');
}


function saveSpeaksCurrencySchool() {
    var speaks = $("#editProfileSpeaks").val();
    var prefered_currency = $("#editProfilePreferedCurrency").val();
    var school = $("#editProfileSchool").val();
    var can_save = 1;

    if (speaks != "") {
        $('#editProfileSpeaks').attr('style', '');
        $(".editProfileSpeaks_error").html('');
    } else {
        $('#editProfileSpeaks').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfileSpeaks_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (prefered_currency > 0) {
        $('#editProfilePreferedCurrency').attr('style', '');
        $(".editProfilePreferedCurrency_error").html('');
    } else {
        $('#editProfilePreferedCurrency').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePreferedCurrency_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }


    if (can_save == "1") {
        var fd = new FormData();
        fd.append('_token', $("#viewProfile_CSRFToken").val());
        fd.append('speaks', speaks);
        fd.append('prefered_currency', prefered_currency);

        $.ajax({
            url: $("#viewProfile_requestRoot").val() + '/web/api/member/editspeakscurrencyschool',
            type: "POST",
            contentType: false,
            data: fd,
            processData: false,
            beforeSend: function () {
                document.getElementById("loader-panel").style.display = "block";
            },
            success: function (data) {
                document.getElementById("loader-panel").style.display = "none";
                if (data['error'] == "1") {
                    ViewAsUser("0")
                    $(".save").trigger('dblclick');
                } else if (data['error'] == "2") {
                    $('#editProfileSpeaks').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileSpeaks_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "3") {
                    $('#editProfileSchool').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileSchool_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "4") {
                    $('#editProfilePreferedCurrency').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfilePreferedCurrency_error").html($("#viewProfile_requiredField").val());
                } else {
                    $('#editProfileSpeaksLabel').html(data['speaks'])
                    $('#editProfilePreferedCurrencyLabel').html(data['currency'])
                    $(".save").trigger('dblclick');
                }

            },
            error: function () {
            }
        });
    }
}

function saveHometownLivesinStatus() {
    var homeTown = $("#blockOneHomeTown").val()
    var livesIn = $("#blockOneLiveIn").val()
    var maritalStatus = $("#editProfileMaritalStatus").val()
    var can_save = 1;

    if (homeTown != "") {
        $('#blockOneHomeTown').attr('style', '');
        $(".blockOneHomeTown_error").html('');
    } else {
        $('#blockOneHomeTown').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".blockOneHomeTown_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (livesIn != "") {
        $('#blockOneLiveIn').attr('style', '');
        $(".blockOneLiveIn_error").html('');
    } else {
        $('#blockOneLiveIn').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".blockOneLiveIn_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (maritalStatus > 0) {
        $('#editProfileMaritalStatus').attr('style', '');
        $(".editProfileMaritalStatus_error").html('');
    } else {
        $('#editProfileMaritalStatus').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfileMaritalStatus_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (can_save == "1") {
        var fd = new FormData();
        fd.append('_token', $("#viewProfile_CSRFToken").val());
        fd.append('homeTown', homeTown);
        fd.append('livesIn', livesIn);
        fd.append('maritalStatus', maritalStatus);

        $.ajax({
            url: $("#viewProfile_requestRoot").val() + '/web/api/member/edithometownlivesinstatus',
            type: "POST",
            contentType: false,
            data: fd,
            processData: false,
            beforeSend: function () {
                document.getElementById("loader-panel").style.display = "block";
            },
            success: function (data) {
                document.getElementById("loader-panel").style.display = "none";
                if (data['error'] == "1") {
                    ViewAsUser("0")
                    $(".save").trigger('dblclick');
                } else if (data['error'] == "2") {
                    $('#blockOneHomeTown').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".blockOneHomeTown_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "3") {
                    $('#blockOneLiveIn').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".blockOneLiveIn_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "4") {
                    $('#editProfileMaritalStatus').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileMaritalStatus_error").html($("#viewProfile_requiredField").val());
                } else {
                    $('#blockOneHomeTownLabel').html(homeTown.replace(/(<([^>]+)>)/ig, ""))
                    $('#blockOneLiveInLabel').html(livesIn.replace(/(<([^>]+)>)/ig, ""))
                    $('#editProfileMaritalStatusLabel').html(data['statusName'].replace(/(<([^>]+)>)/ig, ""))
                    $(".save").trigger('dblclick');
                }

            },
            error: function () {
            }
        });
    }
    // $(".save").trigger('dblclick');
}

function saveMailPhoneCurrencySpeaks() {
    // var email = $("#editProfileEmail1").val();
    var currency = $("#editProfilePreferedCurrency1").val();
    var speaks = $("#editProfileSpeaks1").val();
    var phone = $("#editProfilePhone").val();
    var secondary_email = $("#editProfileSecondaryEmail").val();
    var country_code = $("#editProfileCountry").val();
    var phone_second = $("#editProfilePhoneSecond").val();
    var country_code_second = $("#editProfileCountryCodePhoneSecond").val();
    var numeric_country_code = $("#editProfileCountry :selected").attr("data-code");
    var numeric_country_code_second = $("#editProfileCountryCodePhoneSecond :selected").attr("data-code");
    var can_save = 1;

    // if (email != '') {
    //     if (validateEmail(email)) {
    //         $('#editProfileEmail1').attr('style', '');
    //         $(".editProfileEmail1_error").html('')
    //     } else {
    //         $('#editProfileEmail1').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
    //         $(".editProfileEmail1_error").html($("#viewProfile_invalidEmail").val());
    //         can_save = 0;
    //     }
    // } else {
    //     $('#editProfileEmail1').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
    //     $(".editProfileEmail1_error").html($("#viewProfile_requiredField").val());
    //     can_save = 0;
    // }

    if (country_code > 0) {
        $('#editProfileCountry').attr('style', '');
        $(".editProfileCountry_error").html('')
    } else {
        $('#editProfileCountry').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfileCountry_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }


    if (phone != '') {
        if (phoneRegExpression.test(phone)) {
            $('#editProfilePhone').attr('style', '');
            $(".editProfilePhone_error").html('');
            $.ajax({
                url: $("#viewProfile_checkPhoneUrl").val(),
                type: "POST",
                data: {
                    _token: $("#viewProfile_checkUniquePhoneCSRFToken").val(),
                    phone: phone,
                    phone_second: phone_second
                },
                dataType: "json",
                success: function (response) {
                    if ( response['stat'] == 0) {
                        if(response['phone'] == 0){
                            $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            $(".editProfilePhone_error").html(response['msg']);


                            $('#editProfilePhoneSecond').attr('style', '');
                            $(".editProfilePhoneSecond_error").html('');

                            // $("#editProfilePhoneSecond").parent().find('.edit_profile_errors').hide();
                            // $("#editProfilePhoneSecond").parent().removeClass('has-error');
                        }
                        else{
                            $('#editProfilePhone').attr('style', '');
                            $(".editProfilePhone_error").html('');


                            $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            $(".editProfilePhoneSecond_error").html(response['msg']);
                            // $("#editProfilePhoneSecond").parent().find('.edit_profile_errors').show();
                            // $("#editProfilePhoneSecond").parent().find('.edit_profile_errors').html(response['msg']);
                            // $("#editProfilePhoneSecond").parent().addClass('has-error');
                        }
                        can_save = 0;
                    }
                }
            });
        }
        else {
            $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfilePhone_error").html($("#viewProfile_requiredField").val());
            can_save = 0;
        }
    } else {
        $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePhone_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }
    $('#mobile-Modal #phone_number').val($("#editProfilePhone").val());
    $('#mobile-Modal #calling_code').val($("#editProfileCountry").val());

    if (secondary_email != '') {
        if (validateEmail(secondary_email)) {
            $.ajax({
                url: $("#viewProfile_checkUniqueEmail").val(),
                type: "POST",
                async: false,
                data: {
                    _token: $("#viewProfile_checkUniqueEmailCSRFToken").val(),
                    secondary_email: secondary_email
                },
                dataType: "json",
                success: function (response) {
                    if (response != true) {
                        $('#editProfileSecondaryEmail').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                        $(".editProfileSecondaryEmail_error").html($("#editProfile_secondaryEmailError").val());
                        can_save = 0;
                    } else {
                        $('#editProfileSecondaryEmail').attr('style', '');
                        $(".editProfileSecondaryEmail_error").html('');
                    }
                }
            });
        }
        else {
            $('#editProfileSecondaryEmail').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfileSecondaryEmail_error").html($("#viewProfile_invalidEmail").val());
        }
    }

    if (isValidPhone.status != 'success') {
        $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePhone_error").html(isValidPhone.msg);
        can_save = 0;
    }
    if (phone_second != '' || country_code_second > 0) {

        if (country_code_second > 0) {
            $('#editProfileCountryCodePhoneSecond').attr('style', '');
            $(".editProfileCountryCodePhoneSecond_error").html('')
        } else {
            $('#editProfileCountryCodePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfileCountryCodePhoneSecond_error").html($("#viewProfile_requiredField").val());
            can_save = 0;
        }
        if (phone_second != '') {
            if (phoneRegExpression.test(phone_second)) {
                $('#editProfilePhoneSecond').attr('style', '');
                $(".editProfilePhoneSecond_error").html('');
                $.ajax({
                    url: $("#viewProfile_checkPhoneUrl").val(),
                    type: "POST",
                    async: false,
                    data: {
                        _token: $("#viewProfile_checkUniquePhoneCSRFToken").val(),
                        phone: phone,
                        phone_second: phone_second
                    },
                    dataType: "json",
                    success: function (response) {
                        if ( response['stat'] == 0) {
                            if(response['phone'] == 0){
                                $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                                $(".editProfilePhone_error").html(response['msg']);


                                $('#editProfilePhoneSecond').attr('style', '');
                                $(".editProfilePhoneSecond_error").html('');
                            }
                            else{
                                $('#editProfilePhone').attr('style', '');
                                $(".editProfilePhone_error").html('');


                                $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                                $(".editProfilePhoneSecond_error").html(response['msg']);
                            }
                            can_save = 0;
                        }
                    }
                });
            } else {
                $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                $(".editProfilePhoneSecond_error").html($("#viewProfile_requiredField").val());
                can_save = 0;
            }
        } else {
            $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfilePhoneSecond_error").html($("#viewProfile_requiredField").val());
            can_save = 0;
        }
        if (isValidPhoneSecond.status != 'success') {
            $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfilePhoneSecond_error").html(isValidPhoneSecond.msg);
            can_save = 0;
        }
        $('#mobile-second-Modal #phone_second_number').val($("#editProfilePhoneSecond").val());
        $('#mobile-second-Modal #calling_second_code').val($("#editProfileCountryCodePhoneSecond").val());

    }

    if (speaks != "") {
        $('#editProfileSpeaks').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfileSpeaks1_error").html('');
    } else {
        $('#editProfileSpeaks1').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfileSpeaks1_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (currency > 0) {
        $('#editProfilePreferedCurrency1').attr('style', '');
        $(".editProfilePreferedCurrency1_error").html('');
    } else {
        $('#editProfilePreferedCurrency1').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePreferedCurrency1_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (can_save == "1") {
        var fd = new FormData();
        fd.append('_token', $("#viewProfile_CSRFToken").val());
        // fd.append('email', email);
        fd.append('secondary_email', secondary_email);
        fd.append('currency', currency);
        fd.append('speaks', speaks);
        fd.append('phone', phone);
        fd.append('country_code', country_code);
        fd.append('phone_second', phone_second);
        fd.append('country_code_phone_second', country_code_second);

        $.ajax({
            url: $("#viewProfile_requestRoot").val() + '/web/api/member/editemailphonecurrencyspeaks',
            type: "POST",
            contentType: false,
            data: fd,
            processData: false,
            beforeSend: function () {
                document.getElementById("loader-panel").style.display = "block";
            },
            success: function (data) {
                document.getElementById("loader-panel").style.display = "none";
                if (data['error'] == "1") {
                    ViewAsUser("0")
                    $(".save").trigger('dblclick');
                } else if (data['error'] == "2") {
                    $('#editProfileSpeaks1').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileSpeaks1_error").html(data['msg']);
                } else if (data['error'] == "3") {
                    $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfilePhone_error").html(data['msg']);
                } else if (data['error'] == "4") {
                    $('#editProfilePreferedCurrency1').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfilePreferedCurrency1_error").html(data['msg']);
                } else if (data['error'] == "5") {
                    $('#editProfileCountry').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileCountry_error").html(data['msg']);
                } else if (data['error'] == "6") {
                    $('#editProfileEmail1').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileEmail1_error").html(data['msg']);
                } else if (data['error'] == "7") {
                    $('#editProfileCountryCodePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileCountryCodePhoneSecond_error").html(data['msg']);
                } else if (data['error'] == "8") {
                    $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfilePhoneSecond_error").html(data['msg']);
                    // }else if (data['error'] == "9") {
                    //     $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    //     $(".editProfilePhoneSecond_error").html(data['msg']);
                } else if (data['error'] == "10") {

                    $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfilePhone_error").html(data['msg']);
                } else if (data['error'] == "11") {

                    $('#editProfileSecondaryEmail').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfileSecondaryEmail_error").html(data['msg']);
                }
                else {
                    $('#editProfileSpeaks1Label').html(data['speaks']);
                    $('#editProfilePreferedCurrency1Label').html(data['currency'].replace(/(<([^>]+)>)/ig, ""));
                    // $('#editProfileEmail1Label').html(email.replace(/(<([^>]+)>)/ig, ""));
                    // $('#editProfileEmailLabel').html(email.replace(/(<([^>]+)>)/ig, ""));
                    // $('#editProfileEmail').val(email.replace(/(<([^>]+)>)/ig, ""));
                    if (secondary_email == '') {
                        $('#editProfileSecondaryEmail1Label').html($('#viewProfile_secondaryEmailNotFound').val().replace(/(<([^>]+)>)/ig, ""));
                    } else {
                        $('#editProfileSecondaryEmail1Label').html(secondary_email.replace(/(<([^>]+)>)/ig, ""));
                    }
                    $('#editProfileSecondaryEmail').val(secondary_email.replace(/(<([^>]+)>)/ig, ""));
                    $('#editProfilePhoneLabel').html("+" + numeric_country_code + phone.replace(/(<([^>]+)>)/ig, ""));
                    if ((typeof data['phoneNeedVerify']['primary_phone'] !== "undefined" && data['phoneNeedVerify']['primary_phone'] == 1)
                        || (typeof data['phoneNeedVerify']['second_phone'] !== "undefined" && data['phoneNeedVerify']['second_phone'] == 1)) {
                        if ((typeof data['phoneNeedVerify']['primary_phone'] !== "undefined" && data['phoneNeedVerify']['primary_phone'] == 1)) {
                            PhoneVerificationHandler.phonePrimaryNeedVerify = true;
                        } else {
                            PhoneVerificationHandler.phonePrimaryNeedVerify = false;
                        }
                        if ((typeof data['phoneNeedVerify']['second_phone'] !== "undefined" && data['phoneNeedVerify']['second_phone'] == 1)) {
                            PhoneVerificationHandler.phoneSecondNeedVerify = true;
                        } else {
                            PhoneVerificationHandler.phoneSecondNeedVerify = false;
                        }

                        PhoneVerificationHandler.showAskPhoneVerifyModal();
                    }
                    if (phone_second != '') {
                        $('#showPhoneSecondDiv').show();
                        $('#showPhoneSecondDiv i.mobile').show();
                        $('#editProfilePhoneSecondLabel').html("+" + numeric_country_code_second + phone_second.replace(/(<([^>]+)>)/ig, ""));
                        $('#editProfileCountryCodePhoneSecond').removeClass('not-active');
                        $('#editProfilePhoneSecond').removeClass('not-active');
                        $('.add-another-phone-link').removeClass('active');
                        if (!$(".close-another-phone-input").hasClass("active")) {
                            $('.close-another-phone-input').addClass('active');
                        }
                    }
                    else {
                        $('#editProfileCountryCodePhoneSecond').addClass('not-active');
                        $('#editProfilePhoneSecond').addClass('not-active');
                        $(this).parent().find(".active.close-another-phone-input").show();
                        if (!$(".add-another-phone-link").hasClass("active")) {
                            $('.add-another-phone-link').addClass('active');
                        }

                        $(".close-another-phone-input").removeClass('active');

                    }
                    $(".save").trigger('dblclick');
                }

            },
            error: function () {
            }
        });
    }


}


function saveAboutMe() {
    var aboutme = $("#aboutme").val();
    var fd = new FormData();
    fd.append('_token', $("#viewProfile_CSRFToken").val());
    fd.append('aboutme', aboutme);
    $.ajax({
        url: $("#viewProfile_requestRoot").val() + '/web/api/member/editaboutme',
        type: "POST",
        contentType: false,
        data: fd,
        processData: false,
        beforeSend: function () {
            document.getElementById("loader-panel").style.display = "block";
        },
        success: function (data) {
            document.getElementById("loader-panel").style.display = "none";
            if (data['error'] == "1") {
                ViewAsUser("0")
                $(".save").trigger('dblclick');
            } else {
                $('#aboutmeLabel').html(data['msg']);
                $(".save").trigger('dblclick');
            }

        },
        error: function () {
        }
    });
}




function saveChangePassword() {

    var current_password = $("#current_password").val();
    var new_password = $("#new_password").val();
    var confirm_password = $("#confirm_password").val();

    var can_save = 1;



    if (current_password != '') {
        $('#current_password').attr('style', '');
        $(".current_password_error").html('');
    } else {
        $('#current_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".currentPassword_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (new_password != '') {
        $('#new_password').attr('style', '');
        $(".newPassword_error").html('');
    } else {
        $('#new_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".newPassword_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (confirm_password != '') {
        $('#confirm_password').attr('style', '');
        $(".confirmPassword_error").html('');
    } else {
        $('#confirm_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".confirmPassword_error").html($("#viewProfile_requiredField").val());
        can_save = 0;
    }

    if (can_save == "1") {
        $("#saveDone").hide();

        var fd = new FormData();
        fd.append('_token', $("#viewProfile_CSRFToken").val());

        fd.append('current_password', current_password);
        fd.append('new_password', new_password);
        fd.append('confirm_password', confirm_password);

        $.ajax({
            url: $("#viewProfile_requestRoot").val() + '/web/api/member/changepassword',
            type: "POST",
            contentType: false,
            data: fd,
            processData: false,
            beforeSend: function () {
                document.getElementById("loader-panel").style.display = "block";
                $(".currentPassword_error").html('');
                $(".newPassword_error").html('');
                $(".confirmPassword_error").html('');
            },
            success: function (data) {

                document.getElementById("loader-panel").style.display = "none";
                if (data['error'] == "3") {
                    $('#current_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".currentPassword_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "4") {
                    $('#new_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".newPassword_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "5") {
                    $('#confirm_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".confirmPassword_error").html($("#viewProfile_requiredField").val());
                } else if (data['error'] == "6") {
                    $('#confirm_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".confirmPassword_error").html($("#viewProfile_PasswordNotMatch").val());
                } else if (data['error'] == "7") {
                    $('#current_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".currentPassword_error").html($("#viewProfile_PasswordIncorrect").val());
                } else if (data['error'] == "8") {
                    $('#new_password').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".newPassword_error").html($("#viewProfile_PasswordLessThan8").val());
                } else {
                    $('#current_password').val('');
                    $('#new_password').val('');
                    $('#confirm_password').val('');
                    $("#saveDone").show();
                    // $(".save").trigger('dblclick');
                }

            },
            error: function () {
            }
        });
    }
    // $(".save").trigger('dblclick');
}




// global functions

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


$("#editProfilecurrentJob,#editProfileSchool").on('change', function () {
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

            $(this).parent().find('.edit_profile_errors').show();
            $(this).parent().addClass('has-error');
        }
    }
})
$("#editProfileCountry").on('change', function () {
    isValidPhone = clearZeroFromPhone($("#editProfilePhone"), $("#editProfileCountry"));
    if (isValidPhone.status == 'success') {
        $('#editProfilePhone').val(isValidPhone.msg);
        $('#editProfilePhone').attr('style', '');
        $(".editProfilePhone_error").html('');
    } else {
        $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePhone_error").html(isValidPhone.msg);
        return;
    }

});

$("#editProfilePhone").on('change', function () {
    isValidPhone = clearZeroFromPhone($("#editProfilePhone"), $("#editProfileCountry"));
    if (isValidPhone.status == 'success') {
        $('#editProfilePhone').val(isValidPhone.msg);
        $('#editProfilePhone').attr('style', '');
        $(".editProfilePhone_error").html('');
    } else {
        $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePhone_error").html(isValidPhone.msg);
        return;
    }

    $.ajax({
        url: $("#viewProfile_checkPhoneUrl").val(),
        type: "POST",
        data: {
            _token: $("#viewProfile_checkUniquePhoneCSRFToken").val(),
            phone: $('#editProfilePhone').val(),
            phone_second: $('#editProfilePhoneSecond').val()
        },
        dataType: "json",
        success: function (response) {
            if ($("#editProfilePhone").val() && response['stat'] == 0) {
                if(response['phone'] == 0 || response['phone'] == 2){
                        $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                        $(".editProfilePhone_error").html(response['msg']);


                        $('#editProfilePhoneSecond').attr('style', '');
                        $(".editProfilePhoneSecond_error").html('');
                    }
                    else{
                        $('#editProfilePhone').attr('style', '');
                        $(".editProfilePhone_error").html('');


                        $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                        $(".editProfilePhoneSecond_error").html(response['msg']);
                    }

            }
            else {
                $('#editProfilePhone').attr('style', '');
                $(".editProfilePhone_error").html('');

                $("#editProfilePhoneSecond").parent().find('.edit_profile_errors').hide();
                $("#editProfilePhoneSecond").parent().removeClass('has-error');
            }

        }
    });
});

$("#editProfileSecondaryEmail").on('change', function () {
    $.ajax({
        url: $("#viewProfile_checkUniqueEmail").val(),
        type: "POST",
        data: {
            _token: $("#viewProfile_checkUniqueEmailCSRFToken").val(),
            secondary_email: $(this).val()
        },
        dataType: "json",
        success: function (response) {
            if ($("#editProfileSecondaryEmail").val() && response != true) {

                $('#editProfileSecondaryEmail').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                $(".editProfileSecondaryEmail_error").html($("#viewProfile_uniqueSecondaryEmail").val());
            }
            else {

                $('#editProfileSecondaryEmail').attr('style', '');
                $(".editProfileSecondaryEmail_error").html('');
            }

        }
    });


})
$("#editProfileCountryCodePhoneSecond").on('change', function () {
    isValidPhoneSecond = clearZeroFromPhone($("#editProfilePhoneSecond"), $("#editProfileCountryCodePhoneSecond"));
    if (isValidPhoneSecond.status == 'success') {
        $('#editProfilePhoneSecond').val(isValidPhoneSecond.msg);
        $('#editProfilePhoneSecond').attr('style', '');
        $(".editProfilePhoneSecond_error").html('');
    } else {
        $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePhoneSecond_error").html(isValidPhoneSecond.msg);
        return;
    }
});

$("#editProfilePhoneSecond").on('change', function () {
    isValidPhoneSecond = clearZeroFromPhone($("#editProfilePhoneSecond"), $("#editProfileCountryCodePhoneSecond"));
    if (isValidPhoneSecond.status == 'success') {
        $('#editProfilePhoneSecond').attr('style', '');
        $(".editProfilePhoneSecond_error").html('');
    } else {
        $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
        $(".editProfilePhoneSecond_error").html(isValidPhoneSecond.msg);
        return;
    }

    $.ajax({
        url: $("#viewProfile_checkPhoneUrl").val(),
        type: "POST",
        data: {
            _token: $("#viewProfile_checkUniquePhoneCSRFToken").val(),
            phone: $('#editProfilePhone').val(),
            phone_second: $('#editProfilePhoneSecond').val()
        },
        dataType: "json",
        success: function (response) {
            if ($("#editProfilePhoneSecond").val() && response['stat'] == 0) {
                if(response['phone'] == 0){
                    $('#editProfilePhone').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfilePhone_error").html(response['msg']);


                    $('#editProfilePhoneSecond').attr('style', '');
                    $(".editProfilePhoneSecond_error").html('');
                }
                else{
                    $('#editProfilePhone').attr('style', '');
                    $(".editProfilePhone_error").html('');


                    $('#editProfilePhoneSecond').attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                    $(".editProfilePhoneSecond_error").html(response['msg']);
                }

            }
            else {
                $('#editProfilePhone').attr('style', '');
                $(".editProfilePhone_error").html('');

                $("#editProfilePhoneSecond").parent().find('.edit_profile_errors').hide();
                $("#editProfilePhoneSecond").parent().removeClass('has-error');
            }

        }
    });


})


function haveLetter(input) {

    var websiteRegex = /^(?=.*[A-Za-zا-ى]+)/;
    var websiteNumRegex = /^(?=.*[A-Za-zا-ى])(?=.*[0-9])/;

    if (websiteRegex.test(input) == true || websiteNumRegex.test(input) == true) {
        return true;
    }

    return false;
}


$(window).on('load', function () {
    if ($('#isReview').val() == '1') {
        $('.nav-tabs a[href="#reviews"]').tab('show')
    }

    var offset = -80;

    $('html, body').animate({
        scrollTop: $('#myTabContent').offset().top + offset
    }, 2000);

    $('.input-comment-profile-view').focus();

});

function getMemberSchool() {
    $.ajax({
        url: $("#viewProfile_getMemberSchool").val(),
        type: "GET",
        data: {
            id: $('#viewProfile_profileUserId').val()
        },
        dataType: "json",
        success: function (response) {
            if (response.state == 'success') {
                $('div.memberSchoolContainer').html(response.html);

            }
        }


    });

}
function showAndHideIsPresentWork() {
    if ($('#checkCurrentlyWork').prop('checked')) {
        $("#presentWorkCurrently").removeClass("hidden");
        $("#secoundYearWork").addClass("hidden");
    } else {
        $("#presentWorkCurrently").addClass("hidden");
        $("#secoundYearWork").removeClass("hidden");
    }
}
function getMemberWorkExperience() {
    $.ajax({
        url: $("#viewProfile_getMemberWorkExperience").val(),
        type: "GET",
        data: {
            id: $('#viewProfile_profileUserId').val()
        },
        dataType: "json",
        success: function (response) {
            if (response.state == 'success') {
                $('div.memberWorkExperienceContainer').html(response.html);
            }
        }


    });

}
$(document).ready(function () {

    $("#addReviewForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $('#viewProfile_addReview').val(),
            data: {
                _token: $('#viewProfile_addReviewCSRF').val(),
                booking_id: $('#booking_id').val(),
                review: $('#review_text').val(),
            },
            async: false,
            dataType: "json",
            success: function (response) {
                if (response['state'] == 1) {
                    $('#addReviewForm').remove();
                    $('#review_response').append('<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button>	<strong>' + response['message'] + '</strong></div>');
                } else {
                    $('#addReviewForm').remove();
                    $('#review_response').append('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' + response['message'] + '</strong></div>');
                }
            }
        });

    });
    getMemberSchool();
    getMemberWorkExperience();
    $('.save-change-education').on('click', function () {
        var schoolInput = $("#eduction-school-form input[name='memberSchool[school_name]']");
        var school = schoolInput.val();
        var yearFromInput = $("#eduction-school-form select[name='memberSchool[year_from]']");
        var yearFrom = yearFromInput.val();
        var yearToInput = $("#eduction-school-form select[name='memberSchool[year_to]']");
        var yearTo = yearToInput.val();
        var can_save = 1;


        if (school != '') {
            if (haveLetter(school)) {
                schoolInput.attr('style', '');
                $(".editProfileSchool_error").html('');
            } else {
                schoolInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                $(".editProfileSchool_error").html($("#viewProfile_schoolValidation").val());
                can_save = 0;
            }
        } else {
            schoolInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfileSchool_error").html($("#viewProfile_requiredField").val());
            can_save = 0;
        }


        if (yearFrom == '' && yearTo == '') {
            yearFromInput.attr('style', '');
            yearToInput.attr('style', '');
            $(".editProfileSchoolDuration_error").html('');
        }
        else if (yearFrom == '' || yearTo == '' || yearFrom > yearTo) {
            yearFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            yearToInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfileSchoolDuration_error").html($("#viewProfile_invaildDate").val());
            can_save = 0;
        } else {
            yearFromInput.attr('style', '');
            yearToInput.attr('style', '');
            $(".editProfileSchoolDuration_error").html('');
        }


        if (can_save == "1") {

            $.ajax({
                url: $("#viewProfile_saveMemberScool").val(),
                type: "POST",
                dataType: "json",
                data: $('#eduction-school-form').serializeArray(),
                success: function (response) {
                    switch (response.error) {
                        case 0:
                            $("#eduction-school-form").addClass("hidden");
                            getMemberSchool();
                            break;
                        case 1:
                            schoolInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            $(".editProfileSchool_error").html(response.msg);
                            break;
                        case 2:
                            yearFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            yearToInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            $(".editProfileSchoolDuration_error").html(response.msg);
                            break;
                        default:
                            $("#eduction-school-form").addClass("hidden");
                            break;
                    }
                }


            });
        }
    });
    $('.save-change-work').on('click', function () {
        var companyInput = $("#work-experience-form input[name='memberWorkExperience[company]']");
        var company = companyInput.val();
        var positionInput = $("#work-experience-form input[name='memberWorkExperience[position]']");
        var position = positionInput.val();
        var yearFromInput = $("#work-experience-form select[name='memberWorkExperience[year_from]']");
        var yearFrom = yearFromInput.val();
        var MonthFromInput = $("#work-experience-form select[name='memberWorkExperience[month_from]']");
        var MonthFrom = MonthFromInput.val();
        var yearToInput = $("#work-experience-form select[name='memberWorkExperience[year_to]']");
        var yearTo = yearToInput.val();
        var MonthToInput = $("#work-experience-form select[name='memberWorkExperience[month_to]']");
        var MonthTo = MonthToInput.val();
        var isPresentInput = $("#work-experience-form input[name='memberWorkExperience[is_present]']");
        var isPresent = isPresentInput.prop('checked');
        var can_save = 1;

        if (company != '') {
            if (haveLetter(company)) {
                companyInput.attr('style', '');
                $(".editProfileCompany_error").html('');
            } else {
                companyInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                $(".editProfileCompany_error").html($("#viewProfile_comapnyValidation").val());
                can_save = 0;
            }
        } else {
            companyInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfileCompany_error").html($("#viewProfile_requiredField").val());
            can_save = 0;
        }


        if (position != '') {
            if (haveLetter(position)) {
                positionInput.attr('style', '');
                $(".editProfilePosition_error").html('');
            } else {
                positionInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                $(".editProfilePosition_error").html($("#viewProfile_comapnyValidation").val());
                can_save = 0;
            }
        } else {
            positionInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
            $(".editProfilePosition_error").html($("#viewProfile_requiredField").val());
            can_save = 0;
        }


        if (yearFrom == '' && MonthFrom == '' && yearTo == '' && MonthTo == '' && !isPresent) {
            yearFromInput.attr('style', '');
            yearToInput.attr('style', '');
            MonthFromInput.attr('style', '');
            MonthToInput.attr('style', '');
            $(".editProfileWorkExperienceDuration_error").html('');
        }
        else {
            fromDate = new Date(yearFrom + '-' + MonthFrom + '-01');
            toDate = new Date(yearTo + '-' + MonthTo + '-01');
            if (!isPresent && (yearFrom == '' || yearTo == '' || MonthFrom == '' || MonthTo == '' || fromDate > toDate )) {
                yearFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                yearToInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                MonthFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                MonthToInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                $(".editProfileWorkExperienceDuration_error").html($("#viewProfile_invaildDate").val());
                can_save = 0;
            } else if (isPresent && (yearFrom == '' || MonthFrom == '')) {
                yearFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                MonthFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                $(".editProfileWorkExperienceDuration_error").html($("#viewProfile_invaildDate").val());
                can_save = 0;
            } else {
                yearFromInput.attr('style', '');
                yearToInput.attr('style', '');
                MonthFromInput.attr('style', '');
                MonthToInput.attr('style', '');
                $(".editProfileWorkExperienceDuration_error").html('');
            }

        }


        if (can_save == "1") {

            $.ajax({
                url: $("#viewProfile_saveMemberWorkExperience").val(),
                type: "POST",
                dataType: "json",
                data: $('#work-experience-form').serializeArray(),
                success: function (response) {
                    switch (response.error) {
                        case 0:
                            $("#work-experience-form").addClass("hidden");
                            getMemberWorkExperience();
                            break;
                        case 1:
                            companyInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            $(".editProfileCompany_error").html(response.msg);
                            break;
                        case 2:
                            positionInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            $(".editProfilePosition_error").html(response.msg);
                            break;
                        case 3:
                            yearFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            yearToInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            MonthFromInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            MonthToInput.attr('style', 'background:#fff9fb;border:solid 1px #e6075d;');
                            $(".editProfileWorkExperienceDuration_error").html(response.msg);
                            break;
                        default:
                            $("#work-experience-form").addClass("hidden");
                            break;
                    }
                }


            });
        }
    });

    $("#addNewEducation").click(function (e) {
        e.preventDefault();
        $('input[name="memberSchool[id]"]').val(0);
        $('input[name="memberSchool[school_name]"]').val('');
        $('select[name="memberSchool[year_from]"]').val('');
        $('select[name="memberSchool[year_to]"]').val('');
        $("#eduction-school-form").removeClass("hidden");
    });

    $("#checkCurrentlyWork").click(function () {
        showAndHideIsPresentWork();
    });

    $(".edit-change-education").click(function () {
        $('input[name="memberSchool[id]"]').val(0);
        $('input[name="memberSchool[school_name]"]').val('');
        $('select[name="memberSchool[year_from]"]').val('');
        $('select[name="memberSchool[year_to]"]').val('');
        $("#eduction-school-form").addClass("hidden");
    });
    $(".edit-change-work").click(function () {
        $('input[name="memberWorkExperience[id]"]').val(0);
        $('input[name="memberWorkExperience[company]"]').val('');
        $('input[name="memberWorkExperience[position]"]').val('');
        $('input[name="memberWorkExperience[is_present]"]').prop('checked', false);
        $('select[name="memberWorkExperience[year_from]"]').val('');
        $('select[name="memberWorkExperience[month_from]"]').val('');
        $('select[name="memberWorkExperience[year_to]"]').val('');
        $('select[name="memberWorkExperience[month_to]"]').val('');
        $("#work-experience-form").addClass("hidden");
    });
    $("#eduction-school-form input[name='memberSchool[school_name]']").autocomplete({
        source: function (request, response) {
            $.ajax({
                type: "GET",
                url: $('#viewProfile_autoCompleteMemberSchool').val(),
                data: {
                    school_name: request.term,
                },
                dataType: "json",
                success: function (result) {
                    response(result.data);

                }
            });
        },
        minLength: 2,

    });
    $("#work-experience-form input[name='memberWorkExperience[company]']").autocomplete({
        source: function (request, response) {
            $.ajax({
                type: "GET",
                url: $('#viewProfile_autoCompleteMemberWorkExperience').val(),
                data: {
                    company: request.term,
                },
                dataType: "json",
                success: function (result) {
                    response(result.data);

                }
            });
        },
        minLength: 2,

    });

    $("#editProfilecurrentJobLabel").click(function (e) {
        e.preventDefault();
        $('input[name="memberWorkExperience[id]"]').val(0);
        $('input[name="memberWorkExperience[company]"]').val('');
        $('input[name="memberWorkExperience[position]"]').val('');
        $('input[name="memberWorkExperience[is_present]"]').prop('checked', false);
        $('select[name="memberWorkExperience[year_from]"]').val('');
        $('select[name="memberWorkExperience[month_from]"]').val('');
        $('select[name="memberWorkExperience[year_to]"]').val('');
        $('select[name="memberWorkExperience[month_to]"]').val('');
        showAndHideIsPresentWork();
        $("#work-experience-form").removeClass("hidden");
    });
});
$(document).on("click", "div.edit-member-school", function (e) {
    e.preventDefault();
    var obj = this;
    $.ajax({
        type: "GET",
        url: $('#viewProfile_editMemberSchool').val(),
        data: {
            id: $(this).attr('data-id'),
        },
        dataType: "json",
        success: function (response) {
            if (response.status == 'success') {
                $("#eduction-school-form input[name='memberSchool[school_name]']").val(response.data.school_name);
                $("#eduction-school-form select[name='memberSchool[year_from]']").val(response.data.year_from);
                $("#eduction-school-form select[name='memberSchool[year_to]']").val(response.data.year_to);
                $("#eduction-school-form input[name='memberSchool[id]']").val(response.data.id);
                $("#eduction-school-form").removeClass("hidden");
            } else {

            }
        }
    });
});
$(document).on("click", "div.edit-member-work-experience", function (e) {
    e.preventDefault();
    var obj = this;
    $.ajax({
        type: "GET",
        url: $('#viewProfile_editMemberWorkExperience').val(),
        data: {
            id: $(this).attr('data-id'),
        },
        dataType: "json",
        success: function (response) {
            if (response.status == 'success') {
                $("#work-experience-form input[name='memberWorkExperience[company]']").val(response.data.company);
                $("#work-experience-form input[name='memberWorkExperience[position]']").val(response.data.position);
                if (response.data.date_from) {
                    $("#work-experience-form select[name='memberWorkExperience[year_from]']").val(response.data.date_from.substr(0, 4));
                    $("#work-experience-form select[name='memberWorkExperience[month_from]']").val(response.data.date_from.substr(5, 2));
                }
                if (response.data.date_to) {
                    $("#work-experience-form select[name='memberWorkExperience[year_to]']").val(response.data.date_to.substr(0, 4));
                    $("#work-experience-form select[name='memberWorkExperience[month_to]']").val(response.data.date_to.substr(5, 2));
                }

                if (response.data.is_present == 1) {
                    $("#work-experience-form input[name='memberWorkExperience[is_present]']").prop('checked', 'checked');
                } else {
                    $("#work-experience-form input[name='memberWorkExperience[is_present]']").prop('checked', false);
                }
                showAndHideIsPresentWork();
                $("#work-experience-form input[name='memberWorkExperience[id]']").val(response.data.id);
                $("#work-experience-form").removeClass("hidden");
            } else {

            }
        }
    });
});
$(document).on("click", "div.editProfileSchoolLabel .delete-row", function (e) {
    e.preventDefault();
    var obj = this;
    $.ajax({
        type: "POST",
        url: $('#viewProfile_deleteMemberSchool').val(),
        data: {
            _token: $('#viewProfile_deleteSchoolCSRFToken').val(),
            id: $(this).attr('data-id'),
        },
        dataType: "json",
        success: function (response) {
            if (response.status == 'success') {
                $(obj).parent().remove();
            } else {

            }
        }
    });
});
$(document).on("click", "div.editProfileWorkExperienceLabel .delete-row", function (e) {
    e.preventDefault();
    var obj = this;
    $.ajax({
        type: "POST",
        url: $('#viewProfile_deleteMemberWorkExperience').val(),
        data: {
            _token: $('#viewProfile_deleteWorkExperienceCSRFToken').val(),
            id: $(this).attr('data-id'),
        },
        dataType: "json",
        success: function (response) {
            if (response.status == 'success') {
                $(obj).parent().remove();
            } else {

            }
        }
    });
});

var getQueryStringParams = function (url) {
    var params = {};
    var parser = document.createElement('a');
    parser.href = url;
    var query = parser.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
};

$(function () {

    var params = getQueryStringParams(window.location.href);

    if (params.section != undefined && params.field != undefined) {

        $("#myTab li.active").removeClass("active");

        $("#myTab li.active a").removeClass("active");

        $("#myTabContent div.in.active").removeClass("in").removeClass("active");

        $("#myTab li a[href='#" + params.section + "']").addClass("active");

        $("#myTab li a[href='#" + params.section + "']").parent().addClass("active");

        $("#myTabContent div#" + params.section).addClass("in").addClass("active");

        $("#myTabContent div#" + params.section + " #" + params.field).parents("li").find("span.edit").trigger("click");

        $('html, body').animate({
            scrollTop: $("#" + params.field).offset().top
        }, 500, function () {
            if (params.field == "eduction-school-form") {
                $("#addNewEducation").trigger("click");
            } else if (params.field == "work-experience-form") {
                $("#editProfilecurrentJobLabel").trigger("click");
            } else {
                $("#" + params.field).focus();
            }
        });

    }

    // check for changePassword hash part then open that section
    // if(window.location.hash != "" && window.location.hash == "#changePassword") {
    if(params.section == "changePassword") {
        $("a[href='#"+params.section+"']").trigger("click");
    }

});