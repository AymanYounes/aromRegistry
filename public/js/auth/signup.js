
(function ($) {
    "use strict";


    /*==================================================================
     [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })

    /*==================================================================
     [ Validate ]*/
    var input = $('.validate-input .input100');


    $('#signup_form').on('submit',function(e){
        // e.preventDefault();
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validateSignup(input[i]) == false ){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });

    $('#signup_form .input100').on('change',function(){
        var check = true;

        if(validateSignup(this) == false){
            showValidate(this);
            check=false;
        }

        return check;
    });

    function validateSignup (input) {

        var ajax_val = true;

        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                $(input).parent().attr('data-validate','Valid email is required: ex@abc.xyz');
                return false;
            }


            $.ajax({
                url: $("#signup_requestRootURL").val()+'/checkuseremail',
                data: {email:$(input).val(),_token: $("#signup_CSRFToken").val()},
                type: "POST",
                dataType: "json",
                async: false,
                success: function (response) {
                    if(response == false){
                        $(input).parent().attr('data-validate','This email is already registered');
                        ajax_val = false;
                    }

                    // calledFromAjaxSuccess(ajax_val);
                }
            });
            return ajax_val;
        }
        else if($(input).attr('type') == 'password' && $(input).attr('name') =='repassword' ){
            if($('input[name=password]').val() != $('input[name=repassword]').val()){
                $(input).parent().attr('data-validate','Password verify must equal password');
                return false;
            }
        }
        else if($(input).attr('type') == 'password' ){
            if($(input).val().trim().length <= 8 && $(input).val().trim().length != 0 ){
                $(input).parent().attr('data-validate','Password must be more than 8 characters')
                return false;
            }else if($(input).val().trim().length == 0){
                $(input).parent().attr('data-validate','Password is required');
                return false;
            }
        }
        else if($(input).attr('name') == 'name' ){
            if($(input).val().trim().length < 3 && $(input).val().trim().length != 0 ){
                $(input).parent().attr('data-validate','Name must be more than 2 characters')
                return false;
            }else if($(input).val().trim().length == 0){
                $(input).parent().attr('data-validate','Name is required');
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }


    $('#login_form').on('submit',function(e){
        // e.preventDefault();
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validateLogin(input[i]) == false ){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });

    $('#login_form.input100').on('change',function(){
        var check = true;

        if(validateLogin(this) == false){
            showValidate(this);
            check=false;
        }

        return check;
    });

    function validateLogin (input) {

        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                $(input).parent().attr('data-validate','Valid email is required: ex@abc.xyz');
                return false;
            }
        }
        else if($(input).attr('type') == 'password' ){
            if($(input).val().trim().length <= 8 && $(input).val().trim().length != 0 ){
                $(input).parent().attr('data-validate','Password must be more than 8 characters')
                return false;
            }else if($(input).val().trim().length == 0){
                $(input).parent().attr('data-validate','Password is required');
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
            hideValidate(this);
        });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
        $(thisAlert).addClass('error-input100');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
        $(thisAlert).removeClass('error-input100');
    }


    //========================================



})(jQuery);