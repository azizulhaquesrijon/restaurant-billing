<div id="sidebar" class="sidebar responsive ace-save-state menu-min main-sidebar">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>


    <ul class="nav nav-list">
        <li class="{{ request()->is('home') ? 'active' : '' }}">
            <a href="{{ url('home') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>



        <!--  GLOBAL SETTING MODULE  -->
        @include('partials.sidebars.__sidebar_global_setting')



        <!--  USER ACCESS MODULE  -->
        @include('partials.sidebars.__sidebar_user_access')



        <li>
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.smartsoftware.hrm">
                <i class="menu-icon fa fa-mobile"></i>
                <span class="menu-text"> Smart HRM App </span>
            </a>

            <b class="arrow"></b>
        </li>



        <!--  HRM MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_hrm') --}}



        <!--  GENERAL STORE MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_general_store') --}}



        <!--  MERCHANDISING MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_merchandising') --}}



        <!--  COMMERCIAL MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_commercial') --}}



        <!--  INVENTORY MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_inventory') --}}



        <!--  KNITTING & DYEING MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_knitting_dyeing') --}}



        <!--  PAYMENT MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_payment') --}}



        <!--  NEWS AND NOTIFICATION MODULE  -->
        {{-- @include('partials.sidebars.__sidebar_news_notification') --}}



        <!--  ACCOUNT MODULE  -->
        @if(hasModulePermission('Account & Finance', $active_modules))

            {{-- @include('partials.sidebars.__sidebar_account') --}}

        @endif

    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>

