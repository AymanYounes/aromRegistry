@extends('layouts.app')
@section('title')Arom Egypt registry | Cases @endsection

@section('style')
    <!-- CSS | Datatables -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

@endsection
@section('content')


    <!-- Fixed add button -->
    <a href="{{url('/add-case')}}">
        <button class="fixed-button hvr-buzz" type="button">
            <i class="fa fa-plus"></i>
        </button>
    </a>



    <!-- Start main-content -->
    <div class="main-content" id="cases_conent">
        <section>
            <div class="container-fluid p-0">
                <!-- Section: inner-header -->
                <section class="inner-header divider layer-overlay overlay-deep" data-bg-img="images/header-1.jpg">
                    <div class="container pt-90 pb-50">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12 xs-text-center">
                                    <h3 class="font-28">My Cases</h3>
                                        <ol class="breadcrumb white mt-10">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li class="active text-theme-colored">My Cases</li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
                                        <td>{{($case->visit)?$case->visit:''}}</td>
                                        <td>{{$case->patient->name}}</td>
                                        <td>{{$case->user->name}}</td>
                                        <td>{{$case->user->site->name}}</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-info btn-sm case_view" title="view case"  data-toggle="modal" data-target="#case_view_modal" data-id="{{$case->id}}"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('/update-case/'.$case->id)}}" title="edit case" class="btn btn-dark btn-sm case_edit" ><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm case_delete" title="delete case" data-id="{{$case->id}}"><i class="fa fa-times"></i></a>
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

            $(document).on("click",".case_view",function() {
                var id = $(this).data('id');

                $.ajax({
                    type:"GET",
                    url: $("#RootURL").val()+'/view-case/'+id,
                    dataType: "json",
                    cache: false,
                    success: function(result){

                        $("#case_view_modal").html(result.view);
                    },
                    error: function (xhr, status, message) {
                        console.log('xhr '.xhr);
                        console.log('status '.status);
                        console.log('message '.message);
                    }
                });

            });


            $(document).on("click",".case_delete",function() {
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

        } );


    </script>
@endsection