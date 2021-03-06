

@php

    $dashboard  = App\Models\SystemSetting::where('key', 'dashboard')->where('value', 1)->first();
    $group      = App\Models\Group::first();
    $fav_icon   = '/icon.png';



    if (file_exists($group->fav_icon)) {
        $fav_icon = asset($group->fav_icon);
    }



    $isAdminHeader  =   !request()->is('hrm/payroll/master-salary/*') 
                    &&  !request()->is('hrm/payroll/bank-salary/*')
                    &&  !request()->is('hrm/payroll/cash-salary/*') 
                    &&  !request()->is('hrm/payroll/master-salary-without-payslip/*')
                    &&  !request()->is('hrm/payroll/master-salary-with-payslip/*') 
                    &&  !request()->is('hrm/bonus/fixed/bonus/details/*')
                    &&  request()->segment(1) != 'ems';

    
    $isAdminSidebar =   !request()->is('hrm/payroll/master-salary/*') 
                    &&  !request()->is('hrm/payroll/bank-salary/*') 
                    &&  !request()->is('hrm/payroll/cash-salary/*') 
                    &&  !request()->is('hrm/payroll/master-salary-without-payslip/*')
                    &&  !request()->is('hrm/payroll/master-salary-with-payslip/*') 
                    &&  !request()->is('hrm/bonus/fixed/bonus/details/*') 
                    &&  request()->segment(1) !== 'em';



    $isFooterVisible = !request()->is('hrm/payroll/master-salary/*') 
                    && !request()->is('hrm/payroll/bank-salary/*') 
                    && !request()->is('hrm/payroll/cash-salary/*') 
                    && !request()->is('hrm/payroll/master-salary-without-payslip/*')
                    && !request()->is('hrm/payroll/master-salary-with-payslip/*')

@endphp

<!DOCTYPE html>


<html lang="en">


    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />

        
        <!-- TITLE -->
        <title>@yield('title') - Smart ERP</title>


        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


        <!-- FAB ICON -->
        <link rel="icon" href="{{ $fav_icon }}" type="image/png">



        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        
        
        <!-- font & font awesome -->
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}?v=0.1" />

        



        <!-- stack & yield  css -->
        @yield('css')

        @stack('style')

       


        <!-- ace styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />

        


        <!-- ace settings handler -->
        <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
        


        <!-- sweat alert -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">




        <!-- custom css for master page -->
        <link rel="stylesheet" href="{{ asset('assets/custom_css/master.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/custom_css/color-size.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/custom_css/bootstrap4.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/custom_css/bootstrap4.css') }}" />

    </head>


    
    <body class="no-skin" style="font-family: monospace;">

        @if ($isAdminHeader)

            <!-- ADMIN headeer -->
            @include('partials._header')

        @elseif(request()->segment(1) == 'em')

            <!-- employee headeer -->
            @include('partials._em._header')

        @endif



            
            <div class="main-container ace-save-state" id="main-container">


                <input type="hidden" class="sidebar-type" value="{{ request()->segment(1) }}">





                <!-- sidebar -->
                @if ($isAdminSidebar)
                    
                    <!-- ADMIN SIDEBAR -->
                    @include('partials._sidebar')
                @elseif(request()->segment(1) == 'em')

                    <!-- EMPLOYEE SIDEBAR -->
                    @include('partials._em._sidebar')
                @endif





                    <div class="main-content">

                        @if ($dashboard && (request()->is('/') || request()->is('home')))

                            <div class="main-content-inner" style="background: #f2f2f2">

                            <div class="page-content" style="background: transparent; padding-bottom: 0;">

                        @else
                            <div class="main-content-inner">

                            <div class="page-content">

                        @endif

                        



                        <!-- DYNAIC CONTENT FROM VIEWS -->
                        @yield('content', 'Default Content')

                    </div>
                </div>
            </div>




            <!-- FOOTER -->
            @if ($isFooterVisible)
                @include('partials._footer')
            @endif




            <!-- delete form -->
            <form action="" id="deleteItemForm" method="POST">
                @csrf @method("DELETE")
            </form>

        </div>


        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.query-object.js') }}"></script>


        <![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
        </script>


        <!-- ace scripts -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>

        <script type="text/javascript">
            function withDefault(value, default_value) {
                return value ? value : default_value
            }
        </script>




        <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
        <script src="{{ asset('assets/js/ace.min.js') }}"></script>


        <!-- js yield -->
        @yield('js')
        @yield('script')





        <script type="text/javascript">
            $('[data-rel=popover]').popover({html:true, container:'body'});
        </script>

        <script type="text/javascript">
            $('.success').fadeIn('slow').delay(10000).fadeOut('slow');
        </script>

            
        <script type="text/javascript">

            function showAlertMessage(message, time = 1000, type = 'error')
            {
                swal.fire({
                    title: type.toUpperCase(),
                    html: "<b>" + message + "</b>",
                    type: type,
                    timer: time
                })
            }


            @if(session()->get('message'))
            swal.fire({
                title: "Success",
                html: "<b>{{ session()->get('message') }}</b>",
                type: "success",
                timer: 1000
            });

            @elseif(session()->get('arpMassage'))
            swal.fire({
                // title: "Success",
                html: "<h4><b>{!! session()->get('arpMassage') !!}</b></h4><br><b>Work Order Generated Successfully.</b>",
                type: "success",
                timer: 9000
            });

            @elseif(session()->get('yarn-transfer-success'))
            swal.fire({
                // title: "Success",
                html: "<h4><b>{!! session()->get('yarn-transfer-success') !!}</b></h4><br><b>Yarn Transfer Generated Successfully.</b>",
                type: "success",
                timer: 9000
            });

            @elseif(session()->get('message-number'))
            swal.fire({
                title: "Success",
                html: "<b>{!! session()->get('message-number') !!}</b>",
                // type: "success",
                timer: 30000
            });

            @elseif(session()->get('error'))
            swal.fire({
                title: "Error",
                html: "<b>{{ session()->get('error') }}</b>",
                type: "error",
                timer: 1000
            });

            @elseif(session()->get('payment-success'))
            swal.fire({
                title: "Payment Success",
                html: "<b>{{ session()->pull('payment-success') }}</b>",
                type: "success",
                timer: 10000
            });

            @elseif(session()->get('payment-fail'))
            swal.fire({
                title: "Payment Failed",
                html: "<b>{{ session()->pull('payment-fail') }}</b>",
                type: "Error",
                timer: 10000
            });
            @endif


            function onlyNumber(evnt) {
                let keyCode = evnt.charCode
                let str = evnt.target.value
                let n = str.includes(".")

                if (keyCode == 13) {
                    evnt.preventDefault();
                }

                if (keyCode == 46 && n) {
                    return false
                }

                if (str.length > 12) {
                    showAlertMessage('Number length out of range', 3000)
                    return false
                }
                return (keyCode >= 48 && keyCode <= 57) || keyCode == 13 || keyCode == 46
            }


            $('.only-number').keypress(function() {
                return onlyNumber(event)
            })

            @if(request()->segment(1) != 'em' && auth()->id() != 1)
                let permitted_menu_count = $('.main-sidebar').find('li').length

                if(permitted_menu_count <= 1) {
                    // window.location.href = '/em';
                }
            @endif
        </script>


        @if (request()->segment(1) != 'em')

        {{-- @include('partials._payment_notification') --}}

        @endif

    </body>
</html>
