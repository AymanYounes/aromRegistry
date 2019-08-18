@extends('layouts.app')
@section('title')Arom Egypt registry | Projects @endsection
@section('content')

    <!-- Start main-content -->
    <div class="main-content">
        <section>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Gallery Isotope Grid -->
                        <div id="grid" class="gallery-isotope grid-3 clearfix projects-grid">

                            @foreach($projects as $project)
                                <div class="gallery-item">
                                    <div class="card effect__hover">
                                        <div class="card__front bg-theme-colored" data-bg-img="{{$project->image}}">
                                            <div class="overlay-shade"></div>
                                            <div class="card__text">
                                                <div class="display-table-parent">
                                                    <div class="display-table">
                                                        <div class="display-table-cell">
                                                            <div class="icon-box mb-0">
                                                                <a href="javascript:void(0)" class="icon mb-0">
                                                                    <!-- <i class="text-white pe-7s-users font-72"></i> -->
                                                                </a>
                                                                <h3 class="icon-box-title text-white">{{$project->name}}</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__back" data-bg-color="#e0e0e0">
                                            <div class="card__text">
                                                <div class="display-table-parent p-20">
                                                    <div class="display-table">
                                                        <div class="display-table-cell">
                                                            <h4>{{$project->name_full}}</h4>
                                                            <p>{{$project->short_desc}}</p>
                                                            <a href="javascript:void(0)" class="btn btn-default mt-10 projects_readmore" data-animation="one" data-modal="project_{{$project->id}}"> Read More </a>
                                                            <a href="{{url('add-case/'.$project->id)}}" class="btn btn-primary mt-10"> Add Case </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /flip-box -->

                                </div>
                            @endforeach

                        </div>
                        <!-- End Gallery Isotope Grid -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('templates/projects_modals')
    <!-- end main-content -->
@endsection



@section('script')
    <!-- Footer Scripts -->


@endsection