@extends('layouts.app')
@section('title')Arom Egypt registry | Cases @endsection

@section('style')
    <!-- CSS | Datatables -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    <style>

        .toggled_password,.toggled_name,.toggled_title,.toggled_address,.toggled_phone,.toggled_email{
            display: none;
        }
    </style>
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
                                    <h3 class="font-28">My Cases</h2>
                                        <ol class="breadcrumb white mt-10">
                                            <li><a href="index.html">Home</a></li>
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
                                <tr>
                                    <td>1</td>
                                    <td>53230</td>
                                    <td><a href="javascript:void(0)">HFERe</a></td>
                                    <td>08/12/1998</td>
                                    <td>Ramy Mohamed Ibrahim</td>
                                    <td>Prof. Khaled Zaky</td>
                                    <td>Al Azhar University Hospitals  (ASSUIT)</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#case_view"><i class="fa fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-dark btn-sm" ><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>53231</td>
                                    <td><a href="javascript:void(0)">HFERe</a></td>
                                    <td>03/12/1998</td>
                                    <td>Ramy Mohamed Ibrahim</td>
                                    <td>Prof. Khaled Zaky</td>
                                    <td>Al Azhar University Hospitals  (ASSUIT)</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#case_view"><i class="fa fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-dark btn-sm" ><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>53233</td>
                                    <td><a href="javascript:void(0)">HFERe</a></td>
                                    <td>03/12/1998</td>
                                    <td>Ramy Mohamed Ibrahim</td>
                                    <td>Prof. Khaled Zaky</td>
                                    <td>Al Azhar University Hospitals  (ASSUIT)</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#case_view"><i class="fa fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-dark btn-sm" ><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>53235</td>
                                    <td><a href="javascript:void(0)">HFERe</a></td>
                                    <td>08/12/1998</td>
                                    <td>Ramy Mohamed Ibrahim</td>
                                    <td>Prof. Khaled Zaky</td>
                                    <td>Al Azhar University Hospitals  (ASSUIT)</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#case_view"><i class="fa fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-dark btn-sm" ><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>53241</td>
                                    <td><a href="javascript:void(0)">HFERe</a></td>
                                    <td>03/12/1998</td>
                                    <td>Ramy Mohamed Ibrahim</td>
                                    <td>Prof. Khaled Zaky</td>
                                    <td>Al Azhar University Hospitals  (ASSUIT)</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#case_view"><i class="fa fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-dark btn-sm" ><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
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



@endsection




@section('script')
    <!-- Footer Scripts -->

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

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