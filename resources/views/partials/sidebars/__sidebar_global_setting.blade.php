

@if(hasAnyPermission(["groups.index","company.infos.index","buyers.index","suppliers.index","yarns.index","item.units.index",'currency-conversions.index', 'id.card.settings.index'], $slugs) && hasModulePermission('Global Setting', $active_modules))

    <li class="{{ request()->segment(1) == "group" || request()->segment(1) == "company"|| request()->is('gs-setup/suppliers','global-setting/*','currency-conversion*') || request()->is('id-card-setting*') ? 'open' : '' }}">

        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">Global Setting</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">
            <!-- group info -->
            @if(hasAnyPermission(["groups.index", "company.infos.index", "id.card.settings.index"], $slugs))
                <li class="{{ request()->segment(1) == "group" || request()->segment(1) == "company" || request()->is('id-card-setting*') ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Group Info
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if (hasPermission("groups.index", $slugs))
                            <li class="{{ request()->is('group') ? 'active' : '' }}">
                                <a href="{{ route('group.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Group
                                </a>
                                <b class="arrow"></b>
                            </li>
                        @endif

                        <!-- company -->
                        @if (hasPermission("company.infos.index", $slugs))
                            <li class="{{ request()->segment(1) == "company" ? 'open' : '' }}">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Company Info
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                <b class="arrow"></b>

                                <ul class="submenu">
                                    @if (hasPermission("company.infos.create", $slugs))
                                        <li class="{{ request()->is('company/create') ? 'active' : '' }}">
                                            <a href="{{ route('company.create') }}">
                                                <i class="menu-icon fa fa-caret-right"></i>
                                                Add Company
                                            </a>
                                            <b class="arrow"></b>
                                        </li>
                                    @endif

                                    @if (hasPermission("company.infos.view", $slugs))
                                        <li class="{{ request()->is('company') ? 'active' : '' }}">
                                            <a href="{{ route('company.index') }}">
                                                <i class="menu-icon fa fa-caret-right"></i>
                                                Company List
                                            </a>
                                            <b class="arrow"></b>
                                        </li>
                                    
                                    @endif
                                </ul>
                            </li>
                        @endif


                        @if (hasPermission("id.card.settings.index", $slugs))
                            <li class="{{ request()->is('id-card-setting*') ? 'active' : '' }}">
                                <a href="{{ route('id-card-settings.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Id Card Setting
                                </a>
                                <b class="arrow"></b>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif


            <!-- supplier -->
            @if (hasPermission("suppliers.index", $slugs))

                <li class="{{ request()->is('global-setting/supplie*') ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Suppliers
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if(hasPermission('supplier.types.index', $slugs))
                            <li class="{{ request()->segment(2) == 'supplier-type' ? 'active' : '' }}">
                                <a href="{{ route('supplier-types.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Supplier Type
                                </a>
                                <b class="arrow"></b>
                            </li>
                        @endif

                        <li class="{{ request()->is('global-setting/suppliers/create') ? 'active' : '' }}">
                            <a href="{{ route('suppliers.create') }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Add New
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="{{ request()->segment(2) == 'suppliers' && request()->segment(3) != 'create' ? 'active' : '' }}">
                            <a href="{{ route('suppliers.index') }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Supplier List
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            @endif

            <!-- Currency Conversion -->
            @if (hasPermission("currency-conversions.index", $slugs))
                <li class="{{ request()->is('currency-conversion*') ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Currency Conversion
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if(hasPermission('currency-conversions.create', $slugs))
                        <li class="{{ request()->is('currency-conversions/create') ? 'active' : '' }}">
                            <a href="{{ route('currency-conversions.create') }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Create
                            </a>
                            <b class="arrow"></b>
                        </li>
                        @endif

                        @if(hasPermission('currency-conversions.index', $slugs))
                        <li class="{{ request()->is('currency-conversions') ? 'active' : '' }}">
                            <a href="{{ route('currency-conversions.index') }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                List
                            </a>
                            <b class="arrow"></b>
                        </li>
                        @endif
                    </ul>
                </li>
            @endif
        </ul>
    </li>
@endif
