@extends('layouts.app')
@section('title')Arom Egypt registry | User @endsection

@section('style')
    <!-- CSS | Datatables -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">

@endsection
@section('content')

    <!-- Start main-content -->
    <div class="main-content" id="users_conent">
        <section>
            <div class="container-fluid p-0">
                <!-- Section: inner-header -->
                <section class="inner-header divider layer-overlay overlay-deep" data-bg-img="images/header-1.jpg">
                    <div class="container pt-90 pb-50">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12 xs-text-center">
                                    <h3 class="font-28">System users</h3>
                                        <ol class="breadcrumb white mt-10">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li class="active text-theme-colored">Users</li>
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
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">Image</th>
                                    <th class="th-sm">Title</th>
                                    <th class="th-sm">Email</th>
                                    <th class="th-sm">Site</th>
                                    <th class="th-sm">Phone</th>
                                    <th class="th-sm">Address</th>
                                    <th class="th-sm">Cases</th>
                                    <th class="th-sm">Operation</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 0 @endphp
                                @foreach($users as $user)
                                    @php $counter ++ @endphp
                                    <tr data-rowId="{{$user->id}}">
                                        <td>{{$counter}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            @if($user->image)
                                                <img src="{{asset($user->image)}}" width="50" height="50" >
                                            @else
                                                <img src="{{asset('images/default-user.png')}}" width="50" height="50">
                                            @endif
                                        </td>
                                        <td>{{$user->title}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{($user->site)?$user->site->name:''}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{count($user->cases)}}</td>
                                        <td>
                                            <a href="{{url('/profile/'.$user->id)}}" class="btn btn-info btn-sm" ><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm user_delete" data-id="{{$user->id}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="th-sm">#</th>
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">Image</th>
                                    <th class="th-sm">Title</th>
                                    <th class="th-sm">Email</th>
                                    <th class="th-sm">Site</th>
                                    <th class="th-sm">Phone</th>
                                    <th class="th-sm">Address</th>
                                    <th class="th-sm">Cases</th>
                                    <th class="th-sm">Operation</th>
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

    <div class="modal" id="user_view_modal">

    </div>


@endsection




@section('script')
    <!-- Footer Scripts -->

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready( function () {
            var table = $('#myTable').DataTable({
                dom: 'Bfrtip',
                lengthChange: true,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

                table.buttons().container()
                .appendTo('.cases-table .col-md-6:eq(0)');

//        $(document).ready( function () {
//            $('#myTable').DataTable();


            $('.user_view').on('click',function () {
                var id = $(this).data('id');

                $.ajax({
                    type:"GET",
                    url: $("#RootURL").val()+'/view-user/'+id,
                    dataType: "json",
                    cache: false,
                    success: function(result){

                        $("#user_view_modal").html(result.view);
                    },
                    error: function (result) {
                        //
                    }
                });

            });

            $('.user_delete').on('click',function () {
                var id = $(this).data('id');

                var delete_case = confirm("Are you sure that you want to remove this user?");
                if (delete_case) {
                    $.ajax({
                    type:"GET",
                    url: $("#RootURL").val()+'/delete-user/'+id,
                    dataType: "json",
                    cache: false,
                    success: function(result){
                        $('*[data-rowid='+id+']').addClass('d-none');
                        alert('user has been removed successfully')
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