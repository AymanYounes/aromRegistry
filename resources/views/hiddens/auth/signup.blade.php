{{--<input type="hidden" value='{{trans('passwords.password')}}' id="signup_password" name="signup_password" >--}}
{{--<input type="hidden" value='{{trans('validation.uservalid')}}'  id="signup_uservalid" name="signup_uservalid" >--}}
{{--<input type="hidden" value='{{trans('validation.usernameinvalid')}}'  id="usernameinvalid" name="usernameinvalid" >--}}
{{--<input type="hidden" value='{{trans('validation.required')}}'  id="signup_required" name="signup_required" >--}}
{{--<input type="hidden" value='{{trans('validation.nowhitespace')}}'  id="signup_noWhiteSpace" name="signup_noWhiteSpace" >--}}
{{--<input type="hidden" value='{{trans('validation.emailexist')}}'  id="signup_emailexist" name="signup_emailexist" >--}}
{{--<input type="hidden" value='{{trans('validation.email')}}'  id="signup_email" name="signup_email" >--}}
{{--<input type="hidden" value='{{urlPath('login')}}'  id="signup_loginURL" name="signup_loginURL" >--}}
{{--<input type="hidden" value='{{trans('validation.login')}}'  id="signup_loginValidation" name="signup_loginValidation" >--}}
{{--<input type="hidden" value='{{trans('validation.lettersignup_emailexistsonly')}}'  id="signup_lettersOnly" name="signup_lettersOnly" >--}}


<input type="hidden" value='{{Request::root()}}'  id="signup_requestRootURL" name="signup_requestRootURL" >
<input type="hidden" value="{{ csrf_token() }}"  id="signup_CSRFToken" name="signup_CSRFToken" >
