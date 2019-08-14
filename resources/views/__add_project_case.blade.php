@extends('layouts.app')
@section('title')Arom Egypt registry | Add {{$project->name}} case @endsection

@section('style')


    <!-- CSS | Form steps -->
    <link href="{{asset('css/jquery.steps.css')}}" rel="stylesheet" type="text/css">
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
                                    <h3 class="font-28">Add new Case</h3>
                                        <ol class="breadcrumb white mt-10">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li class="d"><a href="{{url('/cases')}}"></a>My Cases</a></li>
                                            <li class="active text-theme-colored">Add new Case</li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-md-12">

                        <form id="add_case_form" style="margin: 20px auto;" action="#">

                            <h3>Basic</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Basic Information</h2>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="visit">Visit Date</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="visit" id="visit" oninput="this.className = ''" placeholder="Visit Date">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="project">Project</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="project" id="Project">
                                                <option>HFERe</option>
                                                <option>ESKOA</option>
                                                <option>HFERe</option>
                                                <option>ESKOA</option>
                                                <option>HFERe</option>
                                                <option>ESKOA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="doctor_name">Doctor</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="doctor_name" id="doctor_name">
                                                <option>Prof. Hesham Hamoud</option>
                                                <option>Dr. Mahmoud Risha</option>
                                                <option>Prof. Hesham Hamoud</option>
                                                <option>Dr. Mahmoud Risha</option>
                                                <option>Prof. Hesham Hamoud</option>
                                                <option>Dr. Mahmoud Risha</option>
                                                <option>Prof. Hesham Hamoud</option>
                                                <option>Dr. Mahmoud Risha</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="site">Site</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="site" id="site">
                                                <option>Ain Shams University Hospital</option>
                                                <option>Al Azhar University Hospitals BOYS (CAIRO)</option>
                                                <option>Al Azhar University Hospital (ASSUIT)</option>
                                                <option>Ain Shams University Hospital</option>
                                                <option>Al Azhar University Hospitals BOYS (CAIRO)</option>
                                                <option>Al Azhar University Hospital (ASSUIT)</option>
                                                <option>Ain Shams University Hospital</option>
                                                <option>Al Azhar University Hospitals BOYS (CAIRO)</option>
                                                <option>Al Azhar University Hospital (ASSUIT)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

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
                                            <input type="text" class="form-control" name="patient_name" id="patient_name"  placeholder="Patient name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="birthday">Birthday</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="birthday" id="birthday"  placeholder="Birthday">
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
                                                <input type="radio" name="gender" checked>
                                                <span></span>
                                                <div class="d-inline">Male</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="gender">
                                                <span></span>
                                                <div class="d-inline">Female</div>
                                            </label>
                                            <!-- <div class="radio">
                                              <input id="radio-1" name="gender" type="radio" checked>
                                              <label for="radio-1" class="radio-label">Male</label>
                                            </div>

                                            <div class="radio">
                                              <input id="radio-2" name="gender" type="radio">
                                              <label  for="radio-2" class="radio-label">Female</label>
                                            </div> -->
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="birthday">Birthday</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Birthday">
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
                                                <option>Cairo</option>
                                                <option>Alexandria</option>
                                                <option>Sharkia</option>
                                                <option>Cairo</option>
                                                <option>Alexandria</option>
                                                <option>Sharkia</option>
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
                                        <div class="col-sm-6 d-flex align-items-center">
                                            <div class="col-sm-4">
                                                <label for="weight">Weight (kg)</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="weight" id="weight"  placeholder="Weight (kg)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center">
                                            <div class="col-sm-4">
                                                <label for="height">Height (CM)</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="height" id="height"  placeholder="Height (CM)">
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
                                                <input type="radio" name="smoking" checked>
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="smoking">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>

                                            <!-- <div class="radio">
                                              <input id="smoking-1" name="smoking" type="radio">
                                              <label for="smoking-1" class="radio-label">Yes</label>
                                            </div>

                                            <div class="radio">
                                              <input id="smoking-2" name="smoking" type="radio" checked>
                                              <label  for="smoking-2" class="radio-label">No</label>
                                            </div> -->
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
                                                <input type="checkbox">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <!-- <label class="checkbox">
                                              <input type="checkbox">
                                              <span></span>
                                              <div class="d-inline">Check me</div>
                                            </label> -->


                                            <div class="radio">
                                                <input class="checkbox" id="consent-1" name="consent" type="checkbox">
                                                <span class="label">Yes</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </step_conent>


                            <h3>Clinical</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Clinical Picture</h2>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="age_at_onest">Age at onset</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="age_at_onest" id="age_at_onest"  placeholder="Age at onset">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="age_at_diagnosis">Age at diagnosis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="age_at_diagnosis" id="age_at_diagnosis"  placeholder="Age at diagnosis">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="disease_duration">Disease duration</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="disease_duration" id="disease_duration"  placeholder="Disease duration">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="sacroilitis">Sacroilitis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="sacroilitis">
                                                <span></span>
                                                <div class="d-inline">Unilateral</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="sacroilitis">
                                                <span></span>
                                                <div class="d-inline">Bilateral</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="other_axial_affection">Other axial affection</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="other_axial_affection">
                                                <span></span>
                                                <div class="d-inline">Cervical</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="other_axial_affection">
                                                <span></span>
                                                <div class="d-inline">Thoracic</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="other_axial_affection">
                                                <span></span>
                                                <div class="d-inline">Lumbar</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="hip_arthritis">Hip arthritis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="hip_arthritis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="hip_arthritis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="shoulder_arthritis">Shoulder arthritis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="shoulder_arthritis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="shoulder_arthritis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="ohter_peripheral_effection">Other peripheral affection</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ohter_peripheral_effection" id="ohter_peripheral_effection" placeholder="Other peripheral affection">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="enthesitis">Enthesitis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="enthesitis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="enthesitis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="uveitis">Uveitis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="uveitis" checked>
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="uveitis">
                                                <span></span>
                                                <div class="d-inline">Anterior uveitis</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="uveitis">
                                                <span></span>
                                                <div class="d-inline">Posterior uveitis</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="uveitis">
                                                <span></span>
                                                <div class="d-inline">Panuveitis</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="psoriasis">Psoriasis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="psoriasis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="psoriasis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="infalmmatory_bowel_disease">Infalmmatory Bowel Disease</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="infalmmatory_bowel_disease">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="infalmmatory_bowel_disease">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="dactylitis">Dactylitis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="dactylitis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dactylitis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="fatigue">Fatigue</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="fatigue">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="fatigue">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="morning_stiffness">Morning stiffness</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="morning_stiffness">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="morning_stiffness">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="alternating_buttock_pain">Alternating Buttock pain</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="alternating_buttock_pain">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="alternating_buttock_pain">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="night_pain">Night pain</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="night_pain">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="night_pain">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="kyphosis">Kyphosis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="kyphosis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="kyphosis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                            </step_conent>



                            <h3>Complications</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Complications</h2>



                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="ascending_aortitis">Ascending aortitis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="ascending_aortitis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="ascending_aortitis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="cauda_equina_syndrome">Cauda equina syndrome</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="cauda_equina_syndrome">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="cauda_equina_syndrome">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="apical_lung_fibrosis">Apical lung fibrosis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="apical_lung_fibrosis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="apical_lung_fibrosis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="amyloidosis">Amyloidosis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="amyloidosis">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="amyloidosis">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="spinal_fracture">Spinal fracture</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="spinal_fracture">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="spinal_fracture">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                            </step_conent>



                            <h3>Laboratory</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Laboratory investigations</h2>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="calcium">Calcium (Ionized)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="calcium" id="calcium"  placeholder="Calcium (Ionized)">
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="esr">ESR (mm/hr)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="esr" id="esr"  placeholder="ESR (mm/hr)">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="crp">CRP (mg/dl)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="crp" id="crp"  placeholder="CRP (mg/dl)">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="hla">HLA B27</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="hla">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="hla">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                            </step_conent>


                            <h3>Radiological</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Radiological Investigations</h2>


                                <hr>
                                <h3 class="widget-title">Plain X-ray of Sacroiliac joint</h3>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="grades_of_rt_sij">Grades of RT SIJ</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="grades_of_rt_sij" id="grades_of_rt_sij">
                                                <option>Grade 0</option>
                                                <option>Grade I</option>
                                                <option>Grade II</option>
                                                <option>Grade III</option>
                                                <option>Grade IV</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="grades_of_lt_sij">Grades of LT SIJ</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="grades_of_lt_sij" id="grades_of_lt_sij">
                                                <option>Grade 0</option>
                                                <option>Grade I</option>
                                                <option>Grade II</option>
                                                <option>Grade III</option>
                                                <option>Grade IV</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="mri_of_sacroiliac_joint">MRI of Sacroiliac joint</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="mri_of_sacroiliac_joint">
                                                <span></span>
                                                <div class="d-inline">Unilateral Sacroiliitis</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="mri_of_sacroiliac_joint">
                                                <span></span>
                                                <div class="d-inline">Bilateral Sacroiliitis</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <hr>
                                <h3 class="widget-title line-bottom">Plain X-ray of spinal vertebrae</h3>



                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="shiny_corners">Shiny corners</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="shiny_corners">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="shiny_corners">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="vertebral_squarring">Vertebral Squarring</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="vertebral_squarring">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="vertebral_squarring">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="syndesmophytes">Syndesmophytes</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="syndesmophytes">
                                                <span></span>
                                                <div class="d-inline">Cervical</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="syndesmophytes">
                                                <span></span>
                                                <div class="d-inline">Thoracic</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="syndesmophytes">
                                                <span></span>
                                                <div class="d-inline">Lumbar</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="bambo_spine">Bambo spine</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="bambo_spine">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="bambo_spine">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="dagger_sign">Dagger sign</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="dagger_sign">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dagger_sign">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>



                                <hr>
                                <h3 class="widget-title line-bottom">Plain X-ray of peripheral joints</h3>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="hip_joint">Hip joint</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="hip_joint" id="hip_joint"  placeholder="Hip joint">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="other_peripheral_joints">Other peripheral joints</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="other_peripheral_joints" id="other_peripheral_joints"  placeholder="Other peripheral joints">
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="us_enthesitis">US enthesitis</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="us_enthesitis" id="us_enthesitis"  placeholder="US enthesitis">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="dexa">DEXA</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="dexa">
                                                <span></span>
                                                <div class="d-inline">Normal</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dexa">
                                                <span></span>
                                                <div class="d-inline">Osteopenia</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dexa">
                                                <span></span>
                                                <div class="d-inline">Osteoporosis</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dexa">
                                                <span></span>
                                                <div class="d-inline">Severe Osteoporosis</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="echo">ECHO</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="echo" id="echo"  placeholder="ECHO">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="hrct_chest">HRCT Chest</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="hrct_chest" id="hrct_chest"  placeholder="HRCT Chest">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="pulmonary_function_tests_spirometry">Pulmonary Function Tests (Spirometry)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pulmonary_function_tests_spirometry" id="pulmonary_function_tests_spirometry"  placeholder="Pulmonary Function Tests (Spirometry)">
                                        </div>
                                    </div>
                                </div>
                            </step_conent>


                            <h3>Examination</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Clinical examination</h2>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="occiput_to_wall_cm">Occiput to wall (cm)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="occiput_to_wall_cm" id="occiput_to_wall_cm"  placeholder="Occiput to wall (cm)">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="tragus_to_wall_cm">Tragus to wall (cm)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tragus_to_wall_cm" id="tragus_to_wall_cm"  placeholder="Tragus to wall (cm)">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="chest_exapansion_test_cm">Chest exapansion test (cm)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="chest_exapansion_test_cm" id="chest_exapansion_test_cm"  placeholder="Chest exapansion test (cm)">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="modified_schober_test_cm">Modified schober test (cm)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="modified_schober_test_cm" id="modified_schober_test_cm"  placeholder="Modified schober test (cm)">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="faber_test">FABER test</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="faber_test">
                                                <span></span>
                                                <div class="d-inline">Positive</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="faber_test">
                                                <span></span>
                                                <div class="d-inline">Negative</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="ganslens_test">Ganslen's test</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="ganslens_test">
                                                <span></span>
                                                <div class="d-inline">Positive</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="ganslens_test">
                                                <span></span>
                                                <div class="d-inline">Negative</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                            </step_conent>



                            <h3>Activity</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Disease activity</h2>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="basdai">BASDAI</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="basdai" id="basdai"  placeholder="BASDAI">
                                        </div>
                                    </div>
                                </div>


                                <hr>
                                <h3 class="widget-title">ASDAS</h3>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="spinal_pain_010">Spinal pain (0-10)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="spinal_pain_010" id="spinal_pain_010"  placeholder="Spinal pain (0-10)">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="peripheral_arthritis_010">Peripheral arthritis (0-10)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="peripheral_arthritis_010" id="peripheral_arthritis_010"  placeholder="Peripheral arthritis (0-10)">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="duration_of_morning_stiffness_010">Duration of morning stiffness (0-10)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="duration_of_morning_stiffness_010" id="duration_of_morning_stiffness_010"  placeholder="Duration of morning stiffness (0-10)">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="pga_010">PGA (0-10)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pga_010" id="pga_010"  placeholder="PGA (0-10)">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="crp_mgdl">CRP (mg/dl)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="crp_mgdl" id="crp_mgdl"  placeholder="CRP (mg/dl)">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="asdas">ASDAS</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="asdas" id="asdas"  placeholder="ASDAS">
                                        </div>
                                    </div>
                                </div>

                            </step_conent>





                            <h3>Treatment</h3>
                            <step_conent>
                                <h2 class="text-theme-colored widget-title line-bottom">Treatment</h2>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="nsaids">NSAIDs</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nsaids" id="nsaids"  placeholder="NSAIDs">
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="dmards">DMARDS</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="dmards">
                                                <span></span>
                                                <div class="d-inline">Methotrexate</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dmards">
                                                <span></span>
                                                <div class="d-inline">Leflunomide</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dmards">
                                                <span></span>
                                                <div class="d-inline">Sulphasalazine</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="dmards">
                                                <span></span>
                                                <div class="d-inline">Hydroxychloroquine</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="anti_tnf_drugs">Anti-TNF drugs</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="anti_tnf_drugs">
                                                <span></span>
                                                <div class="d-inline">Humira</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="anti_tnf_drugs">
                                                <span></span>
                                                <div class="d-inline">Enbrel</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="anti_tnf_drugs">
                                                <span></span>
                                                <div class="d-inline">Remicade</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="anti_tnf_drugs">
                                                <span></span>
                                                <div class="d-inline">Simponi</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="anti_tnf_drugs">
                                                <span></span>
                                                <div class="d-inline">Cimzia</div>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="il_17_inhibitor_cosentyx">IL-17 inhibitor (Cosentyx)</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="il_17_inhibitor_cosentyx">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="il_17_inhibitor_cosentyx">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>

                                        </div>

                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="intra_articular_gc_injection">Intra-articular GC injection</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <label class="radio">
                                                <input type="radio" name="intra_articular_gc_injection">
                                                <span></span>
                                                <div class="d-inline">Yes</div>
                                            </label>

                                            <label class="radio">
                                                <input type="radio" name="intra_articular_gc_injection">
                                                <span></span>
                                                <div class="d-inline">No</div>
                                            </label>

                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <label for="other_drugs">Other drugs</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="other_drugs" id="other_drugs"  placeholder="Other drugs">
                                        </div>
                                    </div>
                                </div>



                            </step_conent>

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


@endsection




@section('script')
    <!-- Footer Scripts -->
    <script src="{{asset('js/jquery.steps.min.js')}}"></script>
    <script>
        var form = $("#add_case_form").show();

        form.steps({
            headerTag: "h3",
            bodyTag: "step_conent",
            transitionEffect: "slideLeft",
            enableFinishButton: "true",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex)
                {
                    return true;
                }
                // Forbid next action on "Warning" step if the user is to young
                // if (newIndex === 3 && Number($("#age-2").val()) < 18)
                // {
                //     return false;
                // }
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
                alert("Submitted!");
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
            $('#height').on('change',function(){
                if($('#weight').val() != '' && $('#height').val() != '' ){
                    var height_squar = (($('#height').val() * $('#height').val())/100)/100;
                    var bmi_fixed_2 = Number(Number($('#weight').val()/height_squar).toFixed(2));
                    $('#bmi').val(bmi_fixed_2);
                }
            });
        })
    </script>

@endsection