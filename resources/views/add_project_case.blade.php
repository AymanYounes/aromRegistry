@extends('layouts.app')
@section('title')Arom Egypt registry | Add {{$project->name}} case @endsection

@section('style')


    <!-- CSS | Form steps -->
    <link href="{{asset('css/jquery.steps.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <style>

        .steps ul li a{
            background: rgba(100,100,100,0.1);
        }
        .remove-checked{
            display: none;
        }
    </style>
@endsection


@section('content')

    <!-- Start main-content -->
    <div class="main-content" id="add_case">
        <section>
            <div class="container-fluid p-0">
                <!-- Section: inner-header -->
                <section class="inner-header divider layer-overlay overlay-deep" data-bg-img="{{asset('images/header-1.jpg')}}">
                    <div class="container pt-90 pb-50">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12 xs-text-center">
                                    <h3 class="font-28">Add {{$project->name}} case</h3>
                                        <ol class="breadcrumb white mt-10">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li class=""><a href="{{url('/cases')}}"></a>My Cases</a></li>
                                            <li class="active text-theme-colored">Add {{$project->name}} case</li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-md-12">

                        <form id="add_case_form" style="margin: 20px auto;" action="#">
                            <input type="hidden" name="project_id" value="{{$project->id}}">
                            <input type="hidden" id="case_status" name="case_status" value="create">
                            <input type="hidden" name="case_id" value="0">

                            @csrf
                            <h3>Basic</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Basic Information</h2>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="visit">Visit Date</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="visit" id="visit"  placeholder="Visit Date">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="project">Project</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label>{{$project->name}}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="doctor_name">Doctor</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label>{{ Auth::user()->name }}</label>
                                        </div>
                                    </div>
                                </div>

                                @if(isset($site))
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2 d-flex align-items-center">
                                                <label for="site">Site</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <label>{{ $site->name }}</label>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </step_conent>


                            <h3>History</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Personal History</h2>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="patient_name">Name</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="patient_name" id="patient_name" required placeholder="Patient name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="birthday">Birthday</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="birthday" id="birthday"  placeholder="Birthday" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="phone" id="phone"  placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="gender">Gender</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" value="male" name="gender" >
                                                <span></span>
                                                <div class="d-inline">Male</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="female" name="gender">
                                                <span></span>
                                                <div class="d-inline">Female</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="marital">Marital Status</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" value="single" name="marital">
                                                <span></span>
                                                <div class="d-inline">Single</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="married" name="marital">
                                                <span></span>
                                                <div class="d-inline">Married</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="widow" name="marital">
                                                <span></span>
                                                <div class="d-inline">Widow</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="divorced" name="marital">
                                                <span></span>
                                                <div class="d-inline">Divorced</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="residency">Residency</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="residency" id="residency">
                                                @foreach($residencies as $residency)
                                                    <option value="{{$residency->id}}">{{$residency->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="occupation">Occupation</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="occupation" id="occupation"  placeholder="Occupation">
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="email">Email Address</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" id="email"  placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12 p-0">

                                            <div class="col-sm-6 p-0 d-flex align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="weight">Weight (kg)</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="weight" id="weight"  placeholder="Weight (kg)">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 p-0 d-flex align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="height">Height (CM)</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="height" id="height"  placeholder="Height (CM)">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="bmi">BMI (Body Mass Index)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="bmi" id="bmi"  placeholder="BMI (Body Mass Index)">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="smoking">Smoking</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" value="yes" name="smoking" >
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="no" name="smoking">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                @if($project->id == 4 || $project->id == 5)
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-sm-2 d-flex align-items-center">
                                                <label for="family_history">Family history of fragile fracture</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <label class="radio">
                                                    <input type="radio" value="yes" name="family_history" >
                                                    <span></span>
                                                    <div class="d-inline">Yes</div>
                                                </label>

                                                <label class="radio">
                                                    <input type="radio" value="no" name="family_history">
                                                    <span></span>
                                                    <div class="d-inline">No</div>
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                @endif


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="consent">Informed Consent</label>
                                        </div>
                                        <div class="col-sm-10">

                                            <label class="checkbox">
                                                <input type="checkbox" name="informed_consent" value="1">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                        </div>

                                    </div>
                                </div>

                            </step_conent>

                            @php $last_sub = 0 @endphp
                            @foreach($project->sections as $section)
                                @if($section->name_short != 'History'||$section->name != 'Personal History')
                                <h3>{{$section->name_short}}</h3>
                                <step_conent>
                                    <h2 class="text-theme-colored widget-title line-bottom">{{$section->name}}</h2>
                                    @foreach($section->question as $question)
                                        @php $question_name = strtolower($question->question).'__'.$question->id; @endphp

                                        @if((isset($question->sub_section_id) && $question->sub_section_id != 0 ) && $question->sub_section_id != $last_sub)
                                            @php $last_sub = $question->sub_section_id; @endphp
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12 d-flex align-items-center">
                                                        <h2>{{$question->sub_sections->name}}</h2>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif
                                        <!-- Text Box -->
                                        @if($question->type == 0)
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2 d-flex align-items-center">
                                                        <label for="{{$question_name}}">{{$question->question}}</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="{{$question_name}}" id="{{$question_name}}"  placeholder="{{($question->place_holder)?$question->place_holder:$question->question}}">
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- Radio Button -->
                                        @elseif($question->type == 1 || $question->type == 2 || $question->type == 4)

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2 d-flex align-items-center">
                                                        <label for="{{$question_name}}">{{$question->question}}</label>
                                                    </div>
                                                    <div class="answer_wrapper col-sm-10">
                                                        @foreach($question->answers as $answer)

                                                            @if($question->type == 1)
                                                            <label class="radio">
                                                                <input type="radio" value="{{strtolower($answer->answer)}}" name="{{$question_name}}">
                                                                <span></span>
                                                                <div class="d-inline">{{$answer->answer}}</div>
                                                            </label>
                                                            @elseif($question->type == 2)
                                                                <label class="checkbox">
                                                                    <input type="checkbox" value="{{strtolower($answer->answer)}}" name="{{$question_name}}">
                                                                    <span></span>
                                                                    <div class="d-inline">{{$answer->answer}}</div>
                                                                </label>
                                                            @endif

                                                        @endforeach
                                                        @if($question->type == 4)
                                                            <select class="form-control" name="{{$question_name}}" id="">
                                                                @foreach($question->answers as $answer)
                                                                    <option value="{{strtolower($answer->answer)}}">{{$answer->answer}}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif

                                                        @if($question->type == 1)
                                                            <a href="javascript:void(0)" class="remove-checked text-theme-colored" style="font-size: 20px" title="Remove checked">
                                                                <i class="fa fa-ban"></i>
                                                            </a>
                                                        @endif
                                                </div>




                                                </div>
                                            </div>
                                        <!-- Date -->
                                        @elseif($question->type == 3)


                                        @endif


                                    @endforeach

                                </step_conent>
                                @endif
                            @endforeach


                            <h3>Finish</h3>
                            <step_conent>
                                <legend>Your case updated successfully</legend>
                                <a href="{{url('add-case/'.$project->id)}}" class="text-theme-colored"> add new case </a>
                            </step_conent>
                        </form>



                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@include('hiddens.cases')
@endsection




@section('script')
    <!-- Footer Scripts -->
    <script src="{{asset('js/jquery.steps.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
            $('input[name="visit"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1950,
                locale: {
                    format: 'YYYY/MM/DD'
                },
            });
        });
        $(function() {
            $('input[name="birthday"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                startDate: moment().subtract(20,'years'),
                locale: {
                    format: 'YYYY/MM/DD'
                },
            });
        });

        $(function() {
            $('input[type="radio"]').on('click',function(){
                if($(this).is(':checked')) {
                    $(this).parents('.answer_wrapper').find('.remove-checked').show();
                }
            });

            $('.remove-checked').on('click',function(){
                $(this).parents('.answer_wrapper').find('input[type="radio"]').prop('checked', false);
                $(this).hide();
            });

        });
    </script>





    <script>
        var form = $("#add_case_form").show();

        form.steps({
            headerTag: "h3",
            bodyTag: "step_conent",
            transitionEffect: "slideLeft",
            enableFinishButton: "true",
            enableAllSteps: true,
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex)
                {
                    return true;
                }


                var status = $('input[name=case_status]').val();
                var case_id = $('input[name=case_id]').val();


                if (newIndex !== 1)
                 {
                     var ajax_response = true;

                     $.ajax({
                         url: $("#RootURL").val()+'/'+status+'-case',
                         data: form.serializeArray(),
                         type: "POST",
                         dataType: "json",
                         async: false,
                         success: function (result) {

                             if(result.status == 'true'){
                                 $('input[name=case_status]').val('update');
                                 status = 'update';
                                 $('input[name=case_id]').val(result.case_id);
                                 case_id = result.case_id;
                             }else{
                                 if(result.message == 'name'){
                                     $('input[name=patient_name]').addClass('error');
                                     ajax_response = false;
                                 }else if(result.message == 'birthday'){
                                     $('input[name=birthday]').addClass('error');
                                     ajax_response = false;
                                 }else if(result.message == 'phone'){
                                     $('input[name=phone]').addClass('error');
                                     ajax_response = false;
                                 }else{
                                     $('input[name=patient_name]').removeClass('error');
                                     $('input[name=birthday]').removeClass('error');
                                     $('input[name=phone]').removeClass('error');
                                     ajax_response = true;
                                 }
                             }

                         }
                     });

                     return ajax_response;
                 }
                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    form.find(".body:eq(" + newIndex + ") label.error").remove();
                    form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Used to skip the "Warning" step if the user is old enough.
                // if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
                // {
                //     form.steps("next");
                // }
                // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    form.steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
//                alert("Submitted!");
            }
        }).validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password-2"
                }
            }
        });




        $(document).ready(function(){
            $('#height , #weight').on('change',function(){
                if($('#weight').val() != '' && $('#height').val() != '' ){
                    var height_squar = (($('#height').val() * $('#height').val())/100)/100;
                    var bmi_fixed_2 = Number(Number($('#weight').val()/height_squar).toFixed(2));
                    $('#bmi').val(bmi_fixed_2);
                }
            });
        })
    </script>

@endsection