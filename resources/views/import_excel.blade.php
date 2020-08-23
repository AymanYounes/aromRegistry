@extends('layouts.app')
@section('title')Arom Egypt registry | import data @endsection

@section('style')

@endsection
@section('content')


    <!-- Start main-content -->
    <div class="main-content" style="margin-top: 200px;margin-bottom: 100px;">
        <form method="post" enctype="multipart/form-data" action="{{url('/import_excel/import')}}">
            @csrf
            <input type="file" name="select_file" />
            <input type="submit" name="upload" class="btn btn-primary" value="upload">

        </form>
    </div>





@endsection




@section('script')
    <!-- Footer Scripts -->

    <script>

            var url= document.getElementById("url").value;

            setTimeout(function(){window.location = url;}, 15000);

    </script>
@endsection
