
@if(isset($projects))

    @foreach($projects as $project)
        <div id="project_{{$project->id}}" class="project_modal">
            <div class="close_modal"><i class="pe-7s-close"></i></div>
            <div class="modal-background">
                <div class="modal">

                    <div class="modal-content pt-20 pb-20">
                        <div class="esc-heading lr-line left-heading">
                            <h4>{{$project->name}}</h4>
                            <h4>{{$project->name_full}}</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="vertical-tab">
                                    <ul class="nav nav-tabs">
                                        <li class=""><a href="#managers{{$project->id}}" data-toggle="tab" aria-expanded="false">Project Managers</a></li>
                                        <li class="active"><a href="#objectives{{$project->id}}" data-toggle="tab" aria-expanded="true">Objectives</a></li>
                                        <li class=""><a href="#study{{$project->id}}" data-toggle="tab" aria-expanded="false">Study design</a></li>
                                        <li class=""><a href="#variables{{$project->id}}" data-toggle="tab" aria-expanded="false">Outcome variables</a></li>
                                        <li class=""><a href="#analysis{{$project->id}}" data-toggle="tab" aria-expanded="false">Analysis plan</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="managers{{$project->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Section: Managers box -->
                                                <div class="section-content">

                                                    @foreach($project->managers as $manager)
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="image-box-thum">
                                                                <img src="{{$manager->image}}" alt="{{$manager->name}}">
                                                            </div>
                                                            <div class="image-box-details text-center p-10 mt-10 bg-lighter ">
                                                                <h5 class="title mt-0">{{$manager->name}}</h5>
                                                                <p class="desc mb-20">{{$manager->work_place}}</p>
                                                                <a href="{{url('doctor-details/'.$manager->id)}}" class="btn btn-colored btn-theme-colored">View profile</a>
                                                            </div>
                                                        </div>

                                                    @endforeach

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in text-left" id="objectives{{$project->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {!! $project->objectives !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="study{{$project->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {!! $project->study_design !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="variables{{$project->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {!! $project->outcome_variables !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="analysis{{$project->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {!! $project->analysis_plan !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    @endforeach

@endif






<div class="modal" id="case_view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">HFERe Case</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <div class="top-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li>Case ID:</li>
                                <li>Doctor:</li>
                                <li>Site:</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li>Date:</li>
                                <li>Project:</li>
                                <li>Patient:</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="personal-content ">
                    <div class="row">
                        <h4 class="text-theme-colored widget-title line-bottom">Personal Info</h4>
                    </div>
                    <div class="row">
                        <div class="bottom-border pb-10 mb-10">

                            <div class="col-sm-12">
                                <strong> Name:</strong> Ramy Mohamed Ibrahim
                            </div>
                            <div class="col-sm-6">
                                <strong> Birthdate:</strong> 08/12/1998
                            </div>
                            <div class="col-sm-6">
                                <strong> Age:</strong> 21
                            </div>
                            <div class="col-sm-12">
                                <strong> Gender:</strong> Male
                            </div>
                            <div class="col-sm-12">
                                <strong> Occupation:</strong> Student
                            </div>
                            <div class="col-sm-6">
                                <strong> Height:</strong> 180 CM
                            </div>
                            <div class="col-sm-6">
                                <strong>  width:</strong> 88 KG
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <strong> BMI (Body Mass Index) : </strong>  <span class="color-green">Yes </span>
                        </div>
                        <div class="col-sm-12">
                            <strong> Smoking : </strong>  <span class="color-red">Yes </span>
                        </div>
                        <div class="col-sm-12">
                            <strong> Family history of fragility fracture : </strong> <span class="color-red">Yes </span>
                        </div>
                        <div class="col-sm-12">
                            <strong> Informed Consent : </strong> <i class="fa fa-check color-green"> </i>
                        </div>
                    </div>
                </div>

                <div class="risk-content">
                    <div class="row">
                        <h4 class="text-theme-colored widget-title line-bottom">Risk Factors</h4>
                    </div>
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Factor</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Trauma</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Osteoporosis</td>
                                    <td><Span class="color-red"> NO </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Spondyloarthropathy (SPA)</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Rheumatoid Arthritis</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Diabetes</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Bronchial asthma</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Calcified large arteries</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Renal disease</td>
                                    <td><Span class="color-red"> NO </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>HCV</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>HBV</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Hyperthyrodism</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Hypothyroidism</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>HBV</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Hyperparathyrodism</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Hypogonadism</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Malabsorption syndrome</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <h4 class="text-theme-colored widget-title line-bottom">Medications</h4>
                    </div>
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Factor</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>GCs</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Thyroxine</td>
                                    <td><Span class="color-red"> NO </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cyclophsophamide</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>PPI</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>SSRIs</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>SNRIs</td>
                                    <td><Span class="color-green"> YES </Span></td>
                                    <td>Add some notes</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Other Drugs</td>
                                    <td colspan="2">Other drugs</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

