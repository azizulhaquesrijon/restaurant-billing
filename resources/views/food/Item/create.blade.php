
@extends('layouts.master')
@section('title','Add New Food')
@section('page-header')
    <i class="fa fa-gears"></i> Add New Food
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />
@stop


@section('content')

    <div class="row">

        <div class="col-sm-12">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        @if (hasPermission("company.infos.view", $slugs))
                            <a href="{{ route('company.index') }}">
                                <i class="ace-icon fa fa-list-alt"></i> Company List
                            </a>
                        @endif
                    </span>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">

                        <div style="margin: 20px;">
                            @include('partials._alert_message')
                        </div>

                        <form class="form-horizontal" id="companyForm" action="{{ route('food.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-6">

                                    <h4 class="text-center">Food Info</h4>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Food Name <strong class="text-danger">*</strong> </label>

                                        <div class="col-xs-12 col-sm-8 @error('foodname') has-error @enderror">
                                            <input type="text" class="form-control input-sm" name="foodname" required
                                                   value="{{ old('foodname') }}" placeholder="Food Name">

                                            @error('foodname')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Food Ctegory<strong class="text-danger">*</strong>  </label>

                                        <div class="col-xs-12 col-sm-8 @error('name') has-error @enderror">
                                            <select name="category_id" class="chosen-select input-sm requeired" required data-placeholder="Choose a category...">
                                                <option value=""></option>
                                                @foreach($category as $categorys)
                                                    <option {{ old('category_id') == $categorys->id ? 'selected' : '' }} value="{{$categorys->id}}">{{$categorys->categoryname}}</option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                            <span class="text-danger">
                                                     {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Food Price </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="number" class="form-control input-sm" id="fprice" name="price"
                                                   value="{{ old('price') }}" placeholder="Food price">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Food Vat</label>

                                        <div class="col-xs-12 col-sm-8">
                                            <input type="text" class="form-control input-sm" name="vat"
                                                   value="{{ old('vat') }}" placeholder="Food vat">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Food code </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="number" class="form-control input-sm" id="fcode" name="code"
                                                   value="{{ old('code') }}" placeholder="Food price">

                                        </div>
                                    </div>



                                    <!-- End footer -->

                                </div>


                            </div>
                            <br>


                            <div class="form-actions center" style="text-align: right !important;">
                                <button type="submit" class="btn btn-sm btn-success">
                                    <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>
                                    Save
                                </button>
                                @if (hasPermission("company.infos.view", $slugs))
                                    <a href="{{ route('food.index') }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-backward"></i> Back List
                                    </a>
                                @endif
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>




@endsection

@section('js')
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace.min.js') }}"></script>




    <!--Drag and drop-->
    <script type="text/javascript">
        jQuery(function($) {
            $('#id-input-file-3').ace_file_input({
                style: 'well',
                btn_choose: 'Drop files here or click to choose',
                btn_change: null,
                no_icon: 'ace-icon fa fa-cloud-upload',
                droppable: true,
                thumbnail: 'small'//large | fit

            }).on('change', function(){
                //console.log($(this).data('ace_input_files'));
                //console.log($(this).data('ace_input_method'));
            });

            // Start header, footer
            $('#header').ace_file_input({
                style: 'well',
                btn_choose: 'Drop files here or click to choose',
                btn_change: null,
                no_icon: 'ace-icon fa fa-cloud-upload',
                droppable: true,
                thumbnail: 'small'//large | fit
            });
            $('#footer').ace_file_input({
                style: 'well',
                btn_choose: 'Drop files here or click to choose',
                btn_change: null,
                no_icon: 'ace-icon fa fa-cloud-upload',
                droppable: true,
                thumbnail: 'small'//large | fit
            });
            // End header, footer
        });

    </script>
    {{--    select Box Search--}}
    <script type="text/javascript">

        jQuery(function($){

            if(!ace.vars['touch']) {
                $('.chosen-select').chosen({allow_single_deselect:true});
                //resize the chosen on window resize

                $(window)
                    .off('resize.chosen')
                    .on('resize.chosen', function() {
                        $('.chosen-select').each(function() {
                            var $this = $(this);
                            $this.next().css({'width': $this.parent().width()});
                        })
                    }).trigger('resize.chosen');
                //resize chosen on sidebar collapse/expand
                $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                    if(event_name != 'sidebar_collapsed') return;
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                    })
                });


                $('#chosen-multiple-style .btn').on('click', function(e){
                    var target = $(this).find('input[type=radio]');
                    var which = parseInt(target.val());
                    if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                    else $('#form-field-select-4').removeClass('tag-input-style');
                });
            }

        })
    </script>


    <script type="text/javascript">

        $(document).ready(function () {
            var i = 0;

            $("#addrow").on("click", function () {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" class="form-control input-sm" name="account_name[]' + i + '"/></td>';
                cols += '<td><input type="number" class="form-control input-sm" name="account_number[]' + i + '"/></td>';
                cols += '<td><input type="text" class="form-control input-sm" name="bank_name[]' + i + '"/></td>';
                cols += '<td><input type="text" class="form-control input-sm" name="branch[]' + i + '"/></td>';
                cols += '<td><input type="text" class="form-control input-sm" name="swift_code[]' + i + '"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                i++;
            });



            $("table.order-list").on("click", ".ibtnDel", function (event) {
                $(this).closest("tr").remove();
                i -= 1
            });


        });


    </script>



@stop
