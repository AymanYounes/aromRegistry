
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Case Report
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <div class="top-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li>
                                    Case ID:
                                    <span class="text-theme-colored">{{$view_case->id}}</span>
                                </li>
                                <li>
                                    Doctor:
                                    <span class="text-theme-colored">{{$view_case->user->name}}</span>
                                </li>
                                @if($view_case->user->site->name)
                                    <li>
                                        Site:
                                        <span class="text-theme-colored">{{$view_case->user->site->name}}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                @if($view_case->visit)
                                <li>
                                    Date:
                                    <span class="text-theme-colored">{{$view_case->visit}}</span>
                                </li>
                                @endif

                                @if($view_case->project->name)
                                <li>
                                    Project:
                                    <span class="text-theme-colored">{{$view_case->project->name}}</span>
                                </li>
                                @endif

                                @if($view_case->patient->name)
                                <li>
                                    Patient:
                                    <span class="text-theme-colored">{{$view_case->patient->name}}</span>
                                </li>
                                @endif
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

                            @if($view_case->patient->name)
                            <div class="col-sm-12">
                                <strong> Name:</strong> {{$view_case->patient->name}}
                            </div>
                            @endif

                            @if($view_case->patient->email)
                                <div class="col-sm-12">
                                    <strong> Email:</strong> {{$view_case->patient->email}}
                                </div>
                            @endif

                            @if($view_case->patient->phone)
                                <div class="col-sm-12">
                                    <strong> Phone:</strong> {{$view_case->patient->phone}}
                                </div>
                            @endif

                            @if($view_case->patient->birthday)
                            <div class="col-sm-6">
                                <strong> Birthdate:</strong> {{$view_case->patient->birthday}}
                            </div>

                            <div class="col-sm-6">
                                <strong> Age:</strong> {{getAge($view_case->patient->birthday)}}
                            </div>
                            @endif

                            @if($view_case->patient->gender)
                            <div class="col-sm-12">
                                <strong> Gender:</strong> {{$view_case->patient->gender}}
                            </div>
                            @endif

                            @if($view_case->patient->marital)
                                <div class="col-sm-12">
                                    <strong> Marital:</strong> {{$view_case->patient->marital}}
                                </div>
                            @endif

                            @if($view_case->patient->occupation)
                            <div class="col-sm-12">
                                <strong> Occupation:</strong> {{$view_case->patient->occupation}}
                            </div>
                            @endif

                            @if($view_case->patient->patient_residency)
                            <div class="col-sm-12">
                                <strong> Residency:</strong> {{$view_case->patient->patient_residency->name}}
                            </div>
                            @endif

                            @if($view_case->patient->veil)
                                <div class="col-sm-12">
                                    <strong> Veil : </strong>
                                    {{$view_case->patient->veil}}
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 p-0 ">
                            @if($view_case->patient->height)
                                <div class="col-sm-6">
                                    <strong> Height:</strong> {{$view_case->patient->height}} CM
                                </div>
                            @endif

                            @if($view_case->patient->weight)
                                <div class="col-sm-6">
                                    <strong> Weight:</strong> {{$view_case->patient->weight}} KG
                                </div>
                            @endif
                        </div>


                        @if($view_case->patient->weight && $view_case->patient->height)
                        <div class="col-sm-12">
                            <strong> BMI (Body Mass Index) : </strong>
                            <span class="color-green">
                                {{getBMI($view_case->patient->height,$view_case->patient->weight)}}
                            </span>
                        </div>
                        @endif

                        @if($view_case->patient->smoking)
                        <div class="col-sm-12">
                            <strong> Smoking : </strong>
                            <span class="color-{{($view_case->patient->smoking == 'no')?'red':'green'}}">
                                {{$view_case->patient->smoking}}
                            </span>
                        </div>
                        @endif

                        @if($view_case->patient->family_history)
                        <div class="col-sm-12">
                            <strong> Family history of fragility fracture : </strong>

                            <span class="color-{{($view_case->patient->family_history == 'no')?'red':'green'}}">
                                {{$view_case->patient->family_history}}
                            </span>
                        </div>
                        @endif

                        @if($view_case->patient->informed_consent)
                        <div class="col-sm-12">
                            <strong> Informed Consent : </strong>
                            @if($view_case->patient->informed_consent == 1)
                                <i class="fa fa-check color-green"> </i>
                            @else
                                <i class="fa fa-times color-red"> </i>
                            @endif
                        @endif
                        </div>
                    </div>
                </div>
                @foreach($view_case->project->sections as $section)

                    @if($section->name_short != 'History')
                    <div class="report-content">
                        <div class="row">
                            <h4 class="text-theme-colored widget-title line-bottom">{{$section->name}}</h4>
                        </div>
                        <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Factor</th>
                                        <th>Status</th>
                                        {{--<th>Note</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $counter = 0 @endphp
                                    @foreach($section->question as $question)
                                        @if(isset($question->question_answer($view_case->id,$question->id)->answer))
                                            @php $q_answer = $question->question_answer($view_case->id,$question->id)->answer @endphp

                                            <tr>
                                                <th scope="row">{{$counter++}}</th>
                                                <td>{{$question->question}}</td>
                                                <td>
                                                <Span class="{{($q_answer == 'Yes')?'color-green':(($q_answer == 'No')?'color-red':'')}}">
                                                    {{$q_answer}}
                                                </Span>
                                                </td>
                                            </tr>

                                        @else
                                            <tr>
                                                <th scope="row">{{$counter++}}</th>
                                                <td>{{$question->question}}</td>
                                                <td>

                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>

                    </div>
                    @endif
                @endforeach

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a target="_blank" href="{{url('print-case/'.$view_case->id)}}" class="btn btn-primary" >
                    <i class="fa fa-print"></i> Print
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

