@extends('layouts.app')
@section('title')Arom Egypt registry | Update {{$case->project->name}} case @endsection

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
                                    <h3 class="font-28">Add {{$case->project->name}} case</h3>
                                        <ol class="breadcrumb white mt-10">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li class=""><a href="{{url('/cases')}}"></a>My Cases</a></li>
                                            <li class="active text-theme-colored">Update {{$case->project->name}} case</li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-md-12">

                        <form id="add_case_form" style="margin: 20px auto;" action="#">
                            <input type="hidden" name="project_id" value="{{$case->project->id}}">
                            <input type="hidden" id="case_status" name="case_status" value="update">
                            <input type="hidden" name="case_id" value="{{$case->id}}">

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
                                            <input type="text" data-date="{{$case->visit}}" class="form-control" name="visit" id="visit"  placeholder="Visit Date">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="project">Project</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label>{{$case->project->name}}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="doctor_name">Doctor</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label>{{ $case->user->name }}</label>
                                        </div>
                                    </div>
                                </div>

                                @if(isset($case->user->site))
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2 d-flex align-items-center">
                                                <label for="site">Site</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <label>{{ $case->user->site->name }}</label>
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
                                            <input type="text" class="form-control" value="{{($case->patient->name)?$case->patient->name:''}}" name="patient_name" id="patient_name" required placeholder="Patient name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="birthday">Birthday</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" data-date="{{$case->patient->birthday}}" name="birthday" id="birthday"  placeholder="Birthday">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="phone" id="phone" value="{{($case->patient->phone)?$case->patient->phone:''}}"  placeholder="Phone Number">
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
                                                <input type="radio" value="male" name="gender" {{($case->patient->gender == 'male')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">Male</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="female" name="gender"  {{($case->patient->gender == 'female')?'checked':''}}>
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
                                                <input type="radio" value="single" name="marital" {{($case->patient->marital == 'single')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">Single</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="married" name="marital" {{($case->patient->marital == 'married')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">Married</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="widow" name="marital" {{($case->patient->marital == 'widow')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">Widow</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="divorced" name="marital" {{($case->patient->marital == 'divorced')?'checked':''}}>
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
                                                    <option value="{{$residency->id}}" {{($residency->id == $case->patient->patient_residency->id)?'selected':''}} >{{$residency->name}}</option>
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
                                            <input type="text" class="form-control" value="{{($case->patient->occupation)?$case->patient->occupation:''}}" name="occupation" id="occupation"  placeholder="Occupation">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="email">Email Address</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" id="email" value="{{($case->patient->email)?$case->patient->email:''}}"  placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 d-flex align-items-center">
                                            <div class="col-sm-4">
                                                <label for="weight">Weight (kg)</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="{{($case->patient->weight)?$case->patient->weight:''}}" name="weight" id="weight"  placeholder="Weight (kg)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center">
                                            <div class="col-sm-4">
                                                <label for="height">Height (CM)</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="{{($case->patient->height)?$case->patient->height:''}}" name="height" id="height"  placeholder="Height (CM)">
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
                                            <input type="text" class="form-control" value="{{($case->patient->height && $case->patient->weight)?getBMI($case->patient->height,$case->patient->weight):''}}" name="bmi" id="bmi" placeholder="BMI (Body Mass Index)">
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
                                                <input type="radio" value="yes" name="smoking" {{($case->patient->smoking == 'yes')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="no" name="smoking" {{($case->patient->smoking == 'no')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="family_history">Family history of fragile fracture</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" value="yes" name="family_history" {{($case->patient->family_history == 'yes')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" value="no" name="family_history" {{($case->patient->family_history == 'no')?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="consent">Informed Consent</label>
                                        </div>
                                        <div class="col-sm-10">

                                            <label class="checkbox">
                                                <input type="checkbox" name="informed_consent" value="1" {{($case->patient->informed_consent == 1)?'checked':''}}>
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                        </div>

                                    </div>
                                </div>

                            </step_conent>

                            @php $last_sub = 0 @endphp
                            @php $last_equation_name = ''; @endphp
                            @php $options = []; @endphp

                            @foreach($case->project->sections as $section)
                                @if($section->name_short != 'History' || $section->name != 'Personal History')
                                <h3>{{$section->name_short}}</h3>
                                <step_conent>
                                    <h2 class="text-theme-colored widget-title line-bottom">{{$section->name}}</h2>
                                    @foreach($section->question as $question)
                                        @php
                                            $question_name = strtolower($question->question).'__'.$question->id;
                                        @endphp
                                        @php $last_equation_status = ''; @endphp

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


                                        <div class="question_row">

                                            <!-- Text Box -->
                                            @if($question->type == 0 || $question->type == 5)
                                                @php $checked = ''; @endphp

                                                @if($question->options)
                                                    @php
                                                        $options = explode('|', $question->options);
                                                        $equation_name = $options[0];
                                                        $equation_status = $options[1];
                                                        if(
                                                        ($last_equation_name != $equation_name
                                                        && $equation_status != 'e_result')
                                                        && $last_equation_status != $equation_status){
                                                            $last_equation_name = $equation_name;
                                                            $last_equation_status = $equation_status;
                                                            $checked = 'checked';
                                                            $appear = '';
                                                        }
                                                    @endphp

                                                    @if(in_array('hide',$options))

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-2 d-flex align-items-center">
                                                                </div>
                                                                <div class="answer_wrapper col-sm-10">
                                                                    <label class="radio">
                                                                        <input type="radio" class="hide_option" value="{{strtolower($equation_name)}}" name="{{$equation_name}}" {{($checked)?$checked:$checked = ''}}>
                                                                        <span></span>
                                                                        <div class="d-inline">{{$question->question}}</div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif

                                            <div class="form-group group_row {{($question->options && in_array('hide',$options) && !$checked)?'hide':''}}">
                                                <div class="row">
                                                    <div class="col-sm-2 d-flex align-items-center">
                                                        <label for="{{$question_name}}">{{$question->question}}</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="{{($question->type == 5)?'number':'text'}}"
                                                               {{($question->options && in_array('e_result',$options))?$equation_status .' disabled':''}}
                                                               class="form-control {{($question->helper_class)?$question->helper_class:''}} {{($question->equation)?'calc_'.$question->equation:''}}"
                                                               name="{{$question_name}}"
                                                               id="{{$question_name}}"
                                                               value="{{($question->question_answer($case->id,$question->id) && $question->question_answer($case->id,$question->id)->answer )?$question->question_answer($case->id,$question->id)->answer:''}}"
                                                               placeholder="{{($question->place_holder)?$question->place_holder:$question->question}}">
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
                                                    <div class="col-sm-10">
                                                        @foreach($question->answers as $answer)

                                                            @if($question->type == 1)
                                                            <label class="radio">
                                                                <input type="radio" value="{{strtolower($answer->answer)}}" name="{{$question_name}}"
                                                                        {{($question->question_answer($case->id,$question->id)
                                                                        && $question->question_answer($case->id,$question->id)->answer
                                                                        && strtolower($question->question_answer($case->id,$question->id)->answer)
                                                                        == strtolower($answer->answer))?
                                                                        'checked':''
                                                                        }}>
                                                                <span></span>
                                                                <div class="d-inline">{{$answer->answer}}</div>
                                                            </label>
                                                            @elseif($question->type == 2)
                                                                <label class="checkbox">
                                                                    <input type="checkbox" value="{{strtolower($answer->answer)}}" name="{{$question_name}}"
                                                                            {{($question->question_answer($case->id,$question->id)
                                                                            && $question->question_answer($case->id,$question->id)->answer
                                                                            && strtolower($question->question_answer($case->id,$question->id)->answer)
                                                                            == strtolower($answer->answer))?'checked':''
                                                                            }}>
                                                                    <span></span>
                                                                    <div class="d-inline">{{$answer->answer}}</div>
                                                                </label>
                                                            @endif

                                                        @endforeach
                                                        @if($question->type == 4)
                                                            <select class="form-control" name="{{$question_name}}" id=""  >
                                                                @foreach($question->answers as $answer)
                                                                    <option value="{{strtolower($answer->answer)}}" {{
                                                                    ($question->question_answer($case->id,$question->id)
                                                                    && $question->question_answer($case->id,$question->id)->answer
                                                                    && strtolower($question->question_answer($case->id,$question->id)->answer)
                                                                    == strtolower($answer->answer))?'selected':''}}>{{$answer->answer}}</option>
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
                                        </div>


                                    @endforeach


                                </step_conent>
                                @endif
                            @endforeach


                            <h3>Finish</h3>
                            <step_conent>
                                <legend>Your case updated successfully</legend>
                                <a href="{{url('add-case/'.$case->project->id)}}" class="text-theme-colored"> add new case </a>
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
            var start = $('input[name="visit"]').data('date');

            $('input[name="visit"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1950,
                startDate: start,
                locale: {
                    format: 'YYYY/MM/DD'
                },
            });
        });
        $(function() {
            var start = $('input[name="birthday"]').data('date');

            if(start == ''){
                start = moment().subtract(20,'years');
            }

            $('input[name="birthday"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                startDate: start,
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


            $('.hide_option').on('click',function(){
                $('.hide_option').parents('.question_row').find('.group_row').addClass('hide');
                $('.hide_option').parents('.question_row').find('input[type="text"]').val('');
                $('.hide_option').parents('.question_row').find('input[type="number"]').val('');
                $('.das').val('');
                if($(this).is(':checked')) {
                    $(this).parents('.question_row').find('.group_row').removeClass('hide');
                }
            });





            /*
             calculate DAS-28
             */


            $(".das_tjc").attr({ "max" : 28, "min" : 0 });
            $(".das_sjc").attr({ "max" : 28, "min" : 0 });
            $(".das_pga").attr({ "max" : 28, "min" : 0 });
            $(".das_crp_mg_l").attr({ "max" : 28, "min" : 0 });
            $(".das_crp_mg_dl").attr({ "max" : 28, "min" : 0 });

            $(document).on('change','.calc_das-28',function(){

                var result = '';
                var tjc = $('.das_tjc').val();
                var sjc = $('.das_sjc').val();
                var pga = $('.das_pga').val();
                var esr = $('.das_esr').val();
                var crp_mg_l = $('.das_crp_mg_l').val();
                var crp_mg_dl = $('.das_crp_mg_dl').val();

                if(tjc != '' && sjc != '' && pga != ''){
                    if(esr != ''){
                        result = (0.56 * Math.sqrt(tjc))
                            + ( 0.28 * Math.sqrt(sjc))
                            + ( 0.7 * Math.log(esr))
                            + ( 0.14 * pga);
                        $('.das').val(Number.parseFloat(result).toFixed(2));
                    }

                    if(crp_mg_l != ''){
                        result = (0.56 * Math.sqrt(tjc))
                            + ( 0.28 * Math.sqrt(sjc))
                            + ( 0.36 * (Math.log(crp_mg_l+1)))
                            + ( 0.14 * pga) + 0.96;
                        $('.das').val(Number.parseFloat(result).toFixed(2));
                    }

                    if(crp_mg_dl != ''){
                        result = (0.56 * Math.sqrt(tjc))
                            + ( 0.28 * Math.sqrt(sjc))
                            + ( 0.36 * (Math.log(10 * crp_mg_dl+1)))
                            + ( 0.14 * pga) + 0.96;
                        $('.das').val(Number.parseFloat(result).toFixed(2));
                    }

                }

            });





            /*
             calculate ASDAS
             */


            $(".asdas_sp").attr({ "max" : 10, "min" : 0 });
            $(".asdas_pa").attr({ "max" : 10, "min" : 0 });
            $(".asdas_dms").attr({ "max" : 10, "min" : 0 });
            $(".asdas_pga").attr({ "max" : 10, "min" : 0 });
            $(".asdas_esr_mm_h").attr({ "max" : 28, "min" : 0 });
            $(".asdas_crp_mg_dl").attr({ "max" : 28, "min" : 0 });

            $(document).on('change','.calc_asdas',function(){

                var result = '';
                var sp = $('.asdas_sp').val();
                var pa = $('.asdas_pa').val();
                var dms = $('.asdas_dms').val();
                var pga = $('.asdas_pga').val();
                var esr = $('.asdas_esr_mm_h').val();
                var crp_mg_dl = $('.asdas_crp_mg_dl').val();

                if(sp != '' && pa != '' && dms != ''&& pga != ''){
                    if(esr != ''){
                        result = (0.079 * sp)
                            + ( 0.069 * dms)
                            + ( 0.113 * pga)
                            + ( 0.086 * pa)
                            + ( 0.293 * Math.sqrt(esr));
                        $('.asdas').val(Number.parseFloat(result).toFixed(2));
                    }

                    if(crp_mg_dl != ''){
                        result = (0.121 * sp)
                            + ( 0.058 * dms)
                            + ( 0.11 * pga)
                            + ( 0.073 * pa)
                            + ( 0.579 * Math.log(crp_mg_dl + 1));
                        $('.asdas').val(Number.parseFloat(result).toFixed(2));
                    }

                }

            });









            /*
             calculate DAPSA
             */


            $(".dapsa_sjc").attr({ "max" : 66, "min" : 0 });
            $(".dapsa_tjc").attr({ "max" : 68, "min" : 0 });
            $(".dapsa_pp").attr({ "max" : 10, "min" : 0 });
            $(".dapsa_ptga").attr({ "max" : 10, "min" : 0 });
//            $(".dapsa_crp").attr({ "max" : 28, "min" : 0 });

            $(document).on('change','.calc_dapsa',function(){

                var result = '';
                var sjc = $('.dapsa_sjc').val();
                var tjc = $('.dapsa_tjc').val();
                var pp = $('.dapsa_pp').val();
                var ptga = $('.dapsa_ptga').val();
                var crp = $('.dapsa_crp').val();

                if(sjc != '' && tjc != '' && pp != ''&& ptga != ''){
//                    alert('sjx : ' + sjc + ' - tjc :'+ tjc + ' - pp : ' + pp + ' - ptga : ' + ptga + ' - crp : ' + crp);
                    if(crp != ''){
                        result = Number.parseFloat(sjc)
                                + Number.parseFloat(tjc)
                                + Number.parseFloat(pp)
                                + Number.parseFloat(ptga)
                                + Number.parseFloat(crp);
                        $('.dapsa').val(Number.parseFloat(result).toFixed(2));
                    }
                }

            });











            /*
             calculate BASDAI
             */


            $(".basdai_fat").attr({ "max" : 66, "min" : 0 });
            $(".basdai_sp").attr({ "max" : 68, "min" : 0 });
            $(".basdai_pa").attr({ "max" : 10, "min" : 0 });
            $(".basdai_enth").attr({ "max" : 10, "min" : 0 });
            $(".basdai_ims").attr({ "max" : 10, "min" : 0 });
            $(".basdai_dms").attr({ "max" : 10, "min" : 0 });
//            $(".dapsa_crp").attr({ "max" : 28, "min" : 0 });

            $(document).on('change','.calc_basdai',function(){

                var result = '';
                var fat = $('.basdai_fat').val();
                var sp = $('.basdai_sp').val();
                var pa = $('.basdai_pa').val();
                var enth = $('.basdai_enth').val();
                var ims = $('.basdai_ims').val();
                var dms = $('.basdai_dms').val();

                if(fat != '' && sp != '' && pa != ''&& enth != '' && ims != '' && dms != ''){
//                    alert('fat : ' + fat + ' - sp :'+ sp + ' - pa : ' + pa + ' - enth : ' + enth + ' - ims : ' + ims + ' - dms : ' + dms);

                        result = 0.2
                            * (Number.parseFloat(fat)
                            + Number.parseFloat(sp)
                            + Number.parseFloat(pa)
                            + Number.parseFloat(enth)
                            + 0.5 * (Number.parseFloat(ims) + Number.parseFloat(dms))
                            );
                        $('.basdai').val(Number.parseFloat(result).toFixed(2));
                }

            });


        });









        var url = window.location.href;
        var url_arr = url.split('/');
        var update_step = 0;
        findItem('update-case');

        function findItem (term) {
            for (var i=0;i<url_arr.length;i++) {
                if(url_arr[i] == term){
                    update_step = 2;
                }
            }
        }

        var form = $("#add_case_form").show();

        form.steps({
            headerTag: "h3",
            bodyTag: "step_conent",
            transitionEffect: "slide",
            enableFinishButton: "true",
            enableAllSteps: true,
            preloadContent: true,
            startIndex: update_step,
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
                window.location.replace($("#RootURL").val()+"/cases");
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