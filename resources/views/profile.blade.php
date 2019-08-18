@extends('layouts.app')
@section('title')Arom Egypt registry | {{$user->name}} Profile @endsection

@section('style')
    <!-- CSS | Datatables -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

@endsection

@section('content')


    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-deep" data-bg-img="{{asset('images/slider/slider-3.jpg')}}">
            <div class="container pt-90 pb-50">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 xs-text-center">
                            <h3 class="font-28">{{$user->name}} Profile</h3>
                            <ol class="breadcrumb white mt-10">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active text-theme-colored">{{$user->name}} Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Doctor Details -->
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sx-12 col-sm-4 col-md-4 sidebar pull-left">
                            <div class="doctor-thumb">
                                @if($user->permission != 1)
                                    <a href="javascript:void(0)" data-id="{{$user->id}}" class="btn btn-colored btn-flat btn-theme-colored btn-black-colored make-user-admin" style="width: 90%; margin:5px 5%;">Promote user to be admin</a>
                                @endif
                                <img src="{{asset($user->image)}}" alt="{{$user->name}} picture">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 pull-right pl-60 pl-sm-15">
                            <div>
                                <h3 id="profile_name">{{$user->name}}</h3>
                                <h5 class="text-theme-colored">{{($user->title)?$user->title:'user dosn\'t added his/her title'}}</h5>
                            </div>
                            <div class="mt-30">
                                <dl class="dl-horizontal doctor-info">
                                    <dt>Address</dt>
                                    <dd>
                                        {{($user->address)?$user->address:'There is no address yet'}}
                                    </dd>
                                    <hr>

                                    <dt>Phone</dt>
                                    <dd>
                                        {{($user->phone)?$user->phone:'There is no phone yet'}}
                                    </dd>
                                    <hr>

                                    <dt>Email</dt>
                                    <dd>
                                        {{($user->email)?$user->email:''}}
                                    </dd>
                                    <hr>

                                </dl>
                            </div>
                        </div>

                    </div>

                    @if(Auth::user()->permission == 1)
                        <div class="row">
                        <div class="col-md-12">
                            <div class="cases-table" class="table-responsive" style="padding: 50px 20px;">

                                <table id="myTable" class="table table-striped table-hover dt-responsive" cellspacing="0" width="">
                                    <thead>
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">id</th>
                                        <th class="th-sm">Project</th>
                                        <th class="th-sm">Date</th>
                                        <th class="th-sm">Patient</th>
                                        <th class="th-sm">Doctor</th>
                                        <th class="th-sm">Site</th>
                                        <th class="th-sm">Operation</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $counter = 0 @endphp
                                    @foreach($cases as $case)
                                        @php $counter ++ @endphp
                                        <tr data-rowId="{{$case->id}}">
                                            <td>{{$counter}}</td>
                                            <td>{{$case->id}}</td>
                                            <td><a href="javascript:void(0)">{{$case->project->name}}</a></td>
                                            <td>{{$case->visit}}</td>
                                            <td>{{$case->patient->name}}</td>
                                            <td>{{$case->user->name}}</td>
                                            <td>{{$case->user->site->name}}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-info btn-sm case_view"  data-toggle="modal" data-target="#case_view_modal" data-id="{{$case->id}}"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-dark btn-sm case_edit" ><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-sm case_delete" data-id="{{$case->id}}"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Project</th>
                                        <th>Date</th>
                                        <th>Patient</th>
                                        <th>Doctor</th>
                                        <th>Site</th>
                                        <th>Operation</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->


    <div class="modal" id="case_view_modal">

    </div>

@endsection




@section('script')
    <!-- Footer Scripts -->


    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();


            $('.make-user-admin').on('click',function () {
                var id = $(this).data('id');
                var make_sure = confirm("Are you sure that you want to promote this user?");

                if(make_sure){
                    $.ajax({
                        type:"GET",
                        url: $("#RootURL").val()+'/make-user-admin/'+id,
                        dataType: "json",
                        cache: false,
                        async: false,
                        success: function(){

                            $('.make-user-admin').hide();
                        },
                        error: function (result) {
                            //
                        }
                    });
                }


            });


            $('.case_view').on('click',function () {
                var id = $(this).data('id');

                $.ajax({
                    type:"GET",
                    url: $("#RootURL").val()+'/view-case/'+id,
                    dataType: "json",
                    cache: false,
                    success: function(result){

                        $("#case_view_modal").html(result.view);
                    },
                    error: function (result) {
                        //
                    }
                });

            });

            $('.case_delete').on('click',function () {
                var id = $(this).data('id');
                var delete_case = confirm("Are you sure that you want to delete this case?");
                if (delete_case) {

                    $.ajax({
                        type:"GET",
                        url: $("#RootURL").val()+'/delete-case/'+id,
                        dataType: "json",
                        cache: false,
                        success: function(result){
                            $('*[data-rowid='+id+']').addClass('d-none');
                            alert('case has been deleted successfully')
                        },
                        error: function (result) {
                            //
                        }
                    });
                }
            });


        });
    </script>

@endsection