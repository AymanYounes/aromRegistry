@extends('layouts.app')
@section('title')Arom Egypt registry | Projects @endsection

@section('content')
    @include('templates.cases_modals');
@endsection

@section('style')
<style>

    #header,footer,#preloader,.modal-footer,.close{
        display: none;
    }

    .modal-lg{
        width:100%;
        max-width: 100%;
    }

</style>

@endsection


@section('script')
<script>

    $(window).load(function () {
        window.print();
    })


</script>
@endsection