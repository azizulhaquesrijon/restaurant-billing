@extends('layouts.master')
@section('title','Dashboard')
@section('page-header')
    <i class="fa fa-tachometer"></i> Dashboard
@stop
@section('css')
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="/assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css" />
@stop


@section('content')


    <div class="row">
        <div class="col-xs-12">

        @include('partials._alert_message')

        <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->

        <br>

        <div class="col-sm-2">
            <div class="well well-lg">
                <h2><i class="fa fa-users green"></i> &nbsp;</h2>
                <strong class="text-center">Total Employee</strong>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="well well-lg">
                <h2><i class="fa fa-sign-in blue"></i> &nbsp; </h2>
                <strong class="text-center">Attendance</strong>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="well well-lg">
                <h2><i class="fa fa-sign-out red"></i> &nbsp; </h2>
                <strong class="text-center">Today Absent</strong>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="well well-lg">
                <h2><i class="fa fa-home orange"></i> &nbsp; </h2>
                <strong class="text-center">Today Leave</strong>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="well well-lg">
                <h2><i class="fa fa-send green"></i> &nbsp; </h2>
                <strong class="text-center">Short Leave</strong>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="well well-lg">
                <h2><i class="fa fa-external-link green"></i> &nbsp;</h2>
                <strong class="text-center">Out Of Work</strong>
            </div>
        </div>

    </div>

    <br>
    <br>

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered">
                <tr>
                    <td>
                        <div id="columnChart" style="height: 360px; width: 100%;">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('assets/custom_js/canvasjs.js') }}"></script>

    <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace.min.js') }}"></script>



@stop
