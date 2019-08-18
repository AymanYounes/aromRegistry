@extends('layouts.app')
@section('title')Arom Egypt registry | Projects @endsection

@section('style')


    <!-- CSS | Form steps -->
    {{--<link href="{{asset('css/jquery.steps.css')}}" rel="stylesheet" type="text/css">--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@endsection


@section('content')

    <!-- Start main-content -->
    <div class="main-content" id="add_case">
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
                                    <li class=""><a href="{{url('/cases')}}"></a>My Cases</a></li>
                                    <li class="active text-theme-colored">Add new Case</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row mt-50 ml-30">

                <h3>Please choose the project you want to proceed with</h3>
            </div>


            <div class="row">
                <div class="col-md-6 col-md-offset-2">


                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2 d-flex align-items-center">
                                <label for="project">Project</label>
                            </div>
                            <div class="col-sm-10">
                                <select class="form-control" name="project" id="project">
                                    @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-md-offset-2 mt-30 mb-30">
                    <a id="start_case" class="btn btn-primary form-control" href="javascript:void(0)"> Go </a>
                </div>
            </div>

        </div>
    </div>
    <!-- end main-content -->


@endsection




@section('script')
    <!-- Footer Scripts -->
    <script>

        $(document).ready(function(){
            $('#start_case').on('click',function(){
                var project_id = $('#project').val();
                window.location.href = "add-case/"+project_id;
            })
        })

    </script>


@endsection