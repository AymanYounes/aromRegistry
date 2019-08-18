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
    <div class="main-content" id="cases_content">
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
                    <form class="col s12 search-form">
                        <div class="row">

                            <div class="input-field col s1">
                                <label for="case_id">ID</label>
                                <input class="" name="case_id" id="case_id" placeholder="ID" value="{{request('id')?request('id'):''}}" type="text">
                            </div>

                            <div class="input-field col s1">
                                <label for="user_name">Doctor Name</label>
                                <input class="" name="user_name" id="user_name" placeholder="search Doctor Name" type="text">
                            </div>

                            <div class="input-field col s2">
                                <label for="user_email">Doctor Email</label>
                                <input name="user_email" id="user_email" placeholder="search email" type="text">
                            </div>

                            <div class="input-field col s2">
                                <label for="user_phone">Doctor Phone</label>
                                <input name="user_phone" id="user_phone" placeholder="search Phone" type="text">
                            </div>

                            <div class="input-field col s2">
                                <label for="project_name">Project Name</label>
                                <input name="project_name" id="project_name" placeholder="search Project Name" type="text">
                            </div>

                            <div class="input-field col s1">
                                <label for="patient_name">Patient Name</label>
                                <input name="patient_name" id="patient_name" placeholder="search Patient Name" type="text">
                            </div>

                            {{--<div class="input-field col s1">--}}
                                {{--<label for="patient_birthday">Patient birthday</label>--}}
                                {{--<input name="patient_birthday" id="patient_birthday" placeholder="search Patient birthday" type="text">--}}
                            {{--</div>--}}


                            <div class="input-field col s3">
                                <select id="patient_gender">
                                    <option value="" selected> Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <label for="patient_gender">Patient Gender</label>
                            </div>


                            <div class="input-field col s2">
                                <label for="visit_date_from">Visit date from</label>
                                <input name="visit_date_from" id="visit_date_from" placeholder="search date from" type="text"  value="{{request('date_from')!=''?request('date_from'):''}}">
                            </div>

                            <div class="input-field col s2">
                                <label for="visit_date_to">Visit date to</label>
                                <input name="visit_date_to" id="visit_date_to" placeholder="search date to" type="text"  value="{{request('date_to')!=''?request('date_to'):''}}">
                            </div>

                        </div>
                    </form>
                </div>







                <div class="table-responsive table-desi">
                    <table class="table table-hover display responsive" width="100%" id="cases-table">
                        <thead>
                        <tr>
                            <th class="th-sm">#</th>
                            {{--<th class="th-sm">id</th>--}}
                            <th class="th-sm">Project</th>
                            <th class="th-sm">visit</th>
                            <th class="th-sm">Patient</th>
                            <th class="th-sm">Doctor</th>
                            <th class="th-sm">Operation</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>



            </div>
        </section>
    </div>
    <!-- end main-content -->

    <div class="modal" id="case_view_modal">

    </div>





    <input type="hidden" id="casesCSRFToken" value="{{csrf_token()}}" />
    <input type="hidden" id="dataTableAjaxUrl" value="{!! route('casesList') !!}" />



@endsection




@section('script')
    <!-- Footer Scripts -->

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>


        $(function () {

            $("#visit_date_from, #visit_date_to").datepicker({
                dateFormat: 'yy-mm-dd',
                showButtonPanel: true,
                closeText: 'Clear',
                onClose: function () {
                    var event = arguments.callee.caller.caller.arguments[0];
                    if ($(event.delegateTarget).hasClass('ui-datepicker-close')) {
                        $(this).val('');
                        $(this).trigger("change");
                    }
                }
            });

                var oTable = $('#cases-table').DataTable({
                    dom: "<'row'<'col-xs-12'<'col-xs-12'p>>r>" +
                    "<'row'<'col-xs-12't>>" +
                    "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
                    order: [[0, "desc"]],
                    processing: true,
                    language: {
//                        "processing": "<img class='dataTable-loading' src='" + $("#publicPath").val() + "/images/loading.gif'>"
                    },
                    serverSide: true,
                    bLengthChange: false,
                    ajax: {
                        url: $("#dataTableAjaxUrl").val(),
                        cache: false,
                        data: function (d) {
                            d.id = $('#case_id').val();
                            d.project_name = $('#project_name').val();
                            d.user_name = $('#user_name').val();
                            d.patient_name = $('#patient_name').val();
                            d.user_email = $('#user_email').val();
                        }
                    },
                    columns: [
                        {data: 'id', name: 'c.id'},
                        {data: 'project_name', name: 'pro.name'},
                        {data: 'visit', name: 'visit'},
                        {data: 'patient_name', name: 'pat.name'},
                        {data: 'user_name', name: 'u.name'},

//                        {data: 'visit', name: 'c.visit'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ],
                    preDrawCallback: function () {
                        //showLoader();
                    },
                    fnDrawCallback: function () {
                        hideLoader();

                        // update paginate classes
                        updateDatatableClassesForMobile();
                    }
                });


            $("#cases-table_paginate").on("click", "a", function () {
                showLoader();
            });

            $("#case_id").change(function (e) {
                e.preventDefault();
                showLoader();
                oTable.draw();
            });

            $("#user_name").change(function (e) {
                e.preventDefault();
                showLoader();
                oTable.draw();
            });

            $("#patient_name").change(function (e) {
                e.preventDefault();
                showLoader();
                oTable.draw();
            });

            $("#user_email").change(function (e) {
                e.preventDefault();
                showLoader();
                oTable.draw();
            });


            $("#visit_date_from, #visit_date_to").change(function (e) {
                e.preventDefault();
                showLoader();
                oTable.draw();
            });

            // export excel
            $("#exportExcel").click(function (e) {
                e.preventDefault();

                $('#downloadExcelModal').modal();

                var params = oTable.ajax.params();

                params["_token"] = $("#exportExcelCSRFToken").val();

                $.ajax({
                    cache: false,
                    url: $("#exportExcelAjaxUrl").val(),
                    type: "GET",
                    data: params,
                    beforeSend: function () {
                        showLoader();
                    },
                    success: function (response, textStatus, request) {
                        var download = '<a href="' + response.file + '" target="_blank" class="btn btn-primary btn-block" id="excelDownload">Download ' + response.name + '</a>';

                        $("#downloadExcelModal").find(".modalBody").html(download);

                        $('#downloadExcelModal').modal('open');
                    },
                    error: function (ajaxContext) {
                        console.log('Export error: ' + ajaxContext.responseText);
                    },
                    complete: function () {
                        hideLoader();
                    }
                });
            });

            $("#exportExcelOnline").click(function (e) {
                e.preventDefault();

                $('#downloadExcelModal').modal();

                var params = oTable.ajax.params();

                params["_token"] = $("#exportExcelOnlineCSRFToken").val();

                $.ajax({
                    cache: false,
                    url: $("#exportExcelOnlineAjaxUrl").val(),
                    type: "GET",
                    data: params,
                    beforeSend: function () {
                        showLoader();
                    },
                    success: function (response, textStatus, request) {
                        var download = '<a href="' + response.file + '" target="_blank" class="btn btn-primary btn-block" id="excelDownload">Download ' + response.name + '</a>';

                        $("#downloadExcelModal").find(".modalBody").html(download);

                        $('#downloadExcelModal').modal('open');
                    },
                    error: function (ajaxContext) {
                        console.log('Export error: ' + ajaxContext.responseText);
                    },
                    complete: function () {
                        hideLoader();
                    }
                });
            });
            $(document).on("click", '.deactivate-member , .activate-member ', function (e) {

                e.preventDefault();
                var ele = $(this);
                swal({
                    title: "Are you sure ?",
                    text: "Member will be De-Activated!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then(function (willDelete) {
                    if (willDelete) {
                        $.ajax({
                            url: $("#deactivateMemberAjaxUrl").val(),
                            method: "POST",
                            data: {_token: $("#deactivateMemberAjaxUrlCSRFToken").val(), id: ele.attr("data-id"),status: ele.attr("data-val")},
                            dataType: "json",
                            beforeSend: function () {
                                showLoader();
                            },
                            success: function (res) {
                                swal("Status", res.msg, "success");
                                showLoader();
                                oTable.draw();
                                hideLoader();
                            },
                            complete: function () {
                                hideLoader();
                            }
                        });

                    }
                });
            });



            $(document).on("click", '#changeMemberEmail', function (e) {

                e.preventDefault();
                var ele = $(this);
                $.ajax({
                    url: $("#changeMemberEmailAjaxUrl").val(),
                    method: "POST",
                    data: $("#memberChangeEmailModal form").serialize(),
                    // data: {_token: $("#changeMemberEmailAjaxUrlCSRFToken").val(), id: ele.attr("data-id"),status: ele.attr("data-val")},
                    dataType: "json",
                    beforeSend: function () {
                        showLoader();
                    },
                    success: function (res) {
                        swal("Status", res.msg, "success");
                        $('#memberChangeEmailModal').modal('close');
                        showLoader();
                        oTable.draw();
                        hideLoader();
                    },
                    complete: function () {
                        hideLoader();
                    }
                });
            });


        });

        $(document).ready(function () {
            $('select[name="members-table_length"]').material_select();

            $('#memberDetailsModal').modal();

            $(document).on("click", '.view-member', function (e) {
                e.preventDefault();

                $.ajax({
                    url: $("#viewMemberAjaxUrl").val(),
                    method: "GET",
                    data: {_token: $("#viewMemberCSRFToken").val(), member_id: $(this).attr("data-id")},
                    dataType: "json",
                    beforeSend: function () {
                        showLoader();
                    },
                    success: function (res) {
                        if (res.stat == 1) {
                            $("#memberDetailsModal").find(".modalBody").html(res.data.body);

                            $('#memberDetailsModal').modal('open');
                        } else {
                            console.log(res.data);
                        }
                    },
                    complete: function () {
                        hideLoader();
                    }
                });
            });

            $('#memberAcivitiesModal').modal();

            $(document).on("click", '.view-member-activity', function (e) {
                e.preventDefault();

                $.ajax({
                    url: $("#viewMemberActivitiesAjaxUrl").val(),
                    method: "GET",
                    data: {_token: $("#viewMemberActivitiesCSRFToken").val(), member_id: $(this).attr("data-id")},
                    dataType: "json",
                    beforeSend: function () {
                        showLoader();
                    },
                    success: function (res) {
                        if (res.stat == 1) {
                            $("#memberAcivitiesModal").find(".modalBody").html(res.data.html);

                            $('#memberAcivitiesModal').modal('open');
                        } else {
                            console.log(res.data);
                        }
                    },
                    complete: function () {
                        hideLoader();
                    }
                });
            });


            $('#memberLogModal').modal();

            $(document).on("click", '.view-member-log', function (e) {
                e.preventDefault();

                $.ajax({
                    url: $("#viewMemberLogAjaxUrl").val(),
                    method: "GET",
                    data: {_token: $("#viewMemberLogCSRFToken").val(), member_id: $(this).attr("data-id")},
                    dataType: "json",
                    beforeSend: function () {
                        showLoader();
                    },
                    success: function (res) {
                        if (res.stat == 1) {

                            $("#memberLogModal").find(".modalBody").html(res.data.html);

                            $('#memberLogModal').modal('open');
                        } else {
                            console.log(res.data);
                        }
                    },
                    complete: function () {
                        hideLoader();
                    }
                });
            });



            $('#memberChangeEmailModal').modal();
            $(document).on("click", '.change-member-email', function (e) {
                e.preventDefault();

                var ele = $(this);
                var id= ele.attr("data-id");
                var email= ele.attr("data-email");

                $('#memberChangeEmailModal h4.modalHeader').html('Change Member Email');
                $("#memberChangeEmailModal input[name=id]").val(id);
                $("#memberChangeEmailModal input[name=email]").val(email);
                $('#memberChangeEmailModal').modal('open');
            });





        });



    </script>
@endsection