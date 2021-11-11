
@if ((hasAnyPermission(["account.setups.index", "account.groups.index", "account.controls.index", "account.subsidiaries.index", "accounts.index", "vouchers.index", "fund.transfers.index", "account.reports.index"], $slugs)) && hasModulePermission('Account & Finance', $active_modules))

    <li class="{{ request()->segment(1) == "account" ? 'open' : '' }}">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-bank" style=" font-weight:bolder"></i>
            <span class="menu-text">Account</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">

            @if ((hasAnyPermission(["account.setups.index", "account.groups.index", "account.controls.index", "account.subsidiaries.index", "accounts.index"], $slugs)))
                <li class="{{ request()->segment(2) == "setup" ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-circle"></i>
                        Setup
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if ((hasPermission("account.setups.index", $slugs)))
                            <li class="{{ request()->is('account/setup/account-setup*') ? 'active' : '' }}">
                                <a href="{{ route('account-setups.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Account Setup
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("account.groups.index", $slugs)))
                            <li class="{{ request()->is('account/setup/account-group*') ? 'active' : '' }}">
                                <a href="{{ route('account-groups.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Account Group
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("account.controls.index", $slugs)))
                            <li class="{{ request()->is('account/setup/account-control*') ? 'active' : '' }}">
                                <a href="{{ route('account-controls.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Account Control
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("account.subsidiaries.index", $slugs)))
                            <li class="{{ request()->is('account/setup/account-subsidiari*') ? 'active' : '' }}">
                                <a href="{{ route('account-subsidiaries.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Account Subsidiary
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("accounts.index", $slugs)))
                            <li class="{{ request()->is('account/setup/accounts') || request()->is('account/setup/accounts/*') ? 'active' : '' }}">
                                <a href="{{ route('accounts.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Accounts
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            <!-- Voucher -->
            @if ((hasPermission("vouchers.index", $slugs)))
                <li class="{{ request()->segment(2) == "vouchers" ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-circle"></i>
                        Voucher
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if ((hasPermission("vouchers.index", $slugs)))
                            <li class="{{ request()->is('account/vouchers*') && !request()->is('account/vouchers/create') ? 'active' : '' }}">
                                <a href="{{ route('vouchers.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Voucher List
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("vouchers.create", $slugs)))
                            <li class="{{ request()->is('account/vouchers/create') ? 'active' : '' }}">
                                <a href="{{ route('vouchers.create') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Voucher Create
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            <!-- Fund Transfer -->
            @if ((hasPermission("fund.transfers.index", $slugs)))
                <li class="{{ request()->segment(2) == "fund-transfers" ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-circle"></i>
                        Fund Transfer
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if ((hasPermission("fund.transfers.index", $slugs)))
                            <li class="{{ request()->is('account/fund-transfers*') && !request()->is('account/fund-transfers/create') ? 'active' : '' }}">
                                <a href="{{ route('fund-transfers.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Transfer List
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("fund.transfers.create", $slugs)))
                            <li class="{{ request()->is('account/fund-transfers/create') ? 'active' : '' }}">
                                <a href="{{ route('fund-transfers.create') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Transfer Create
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif


            <!-- Reports -->
            @if ((hasPermission("account.reports.index", $slugs)))
                    <li class="{{ request()->segment(2) == "reports" ? 'open' : '' }}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-circle"></i>
                            Report
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>

                        <ul class="submenu">
                            @if ((hasPermission("account.chart.of.account.reports", $slugs)))
                                <li class="{{ request()->is('account/reports/chart-of-account') ? 'active' : '' }}">
                                    <a href="{{ route('report.chart-of-account') }}">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Chart Of Account
                                    </a>
                                </li>
                            @endif

                            @if ((hasPermission("account.ledger.journal.reports", $slugs)))
                                <li class="{{ request()->is('account/reports/ledger-journal') ? 'active' : '' }}">
                                    <a href="{{ route('report.ledger-journal') }}">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Ledger Journal
                                    </a>
                                </li>
                            @endif

                            @if ((hasPermission("account.transaction.ledger.reports", $slugs)))
                                <li class="{{ request()->is('account/reports/transaction-ledger') ? 'active' : '' }}">
                                    <a href="{{ route('report.transaction-ledger') }}">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Transaction Ledger
                                    </a>
                                </li>
                            @endif

                            @if ((hasPermission("account.account.ledger.reports", $slugs)))
                                <li class="{{ request()->is('account/reports/account-ledger') ? 'active' : '' }}">
                                    <a href="{{ route('report.account-ledger') }}">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Account Ledger
                                    </a>
                                </li>
                            @endif


                            @if ((hasPermission("account.subsidiary.ledger.reports", $slugs)))
                                <li class="{{ request()->is('account/reports/subsidiary-wise-ledger') ? 'active' : '' }}">
                                    <a href="{{ route('report.subsidiary-wise-ledger') }}" title="Subsidiary Wise Ledger">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Subsidiary Ledger
                                    </a>
                                </li>
                            @endif

    {{--                        @if ((hasPermission("account.reports.index", $slugs)))--}}
    {{--                            <li class="hidden {{ request()->is('account/reports/nominal-account-ledger') ? 'active' : '' }}">--}}
    {{--                                <a href="{{ route('report.nominal-account-ledger') }}" title="Nominal Account Ledger">--}}
    {{--                                    <i class="menu-icon fa fa-caret-right"></i>--}}
    {{--                                    Nominal Ledger--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}

    {{--                        @if ((hasPermission("account.reports.index", $slugs)))--}}
    {{--                            <li class="hidden {{ request()->is('account/reports/revenue-analysis') ? 'active' : '' }}">--}}
    {{--                                <a href="{{ route('report.revenue-analysis') }}">--}}
    {{--                                    <i class="menu-icon fa fa-caret-right"></i>--}}
    {{--                                    Revenue Analysis--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}

                            @if ((hasPermission("account.expense.analysis.reports", $slugs)))
                                <li class="{{ request()->is('account/reports/expense-analysis') ? 'active' : '' }}">
                                    <a href="{{ route('report.expense-analysis') }}">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Expense Analysis
                                    </a>
                                </li>
                            @endif

    {{--                        @if ((hasPermission("account.reports.index", $slugs)))--}}
    {{--                            <li class="hidden {{ request()->is('account/reports/ratio-analysis') ? 'active' : '' }}">--}}
    {{--                                <a href="{{ route('report.ratio-analysis') }}">--}}
    {{--                                    <i class="menu-icon fa fa-caret-right"></i>--}}
    {{--                                    Ratio Analysis--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}

    {{--                        @if ((hasPermission("account.reports.index", $slugs)))--}}
    {{--                            <li class="hidden {{ request()->is('account/reports/received-payment-statement') ? 'active' : '' }}">--}}
    {{--                                <a href="{{ route('report.received-payment-statement') }}" title="Received Payment Statement">--}}
    {{--                                    <i class="menu-icon fa fa-caret-right"></i>--}}
    {{--                                    Received Payment--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}

                            <!-- financial report -->
                            @if ((hasAnyPermission(["account.trial.balance.reports", "account.balance.sheet.reports", "account.profit.and.loss.reports"], $slugs)))
                                <li class="{{ request()->segment(3) == "financial-statements" ? 'open' : '' }}">
                                    <a href="#" class="dropdown-toggle" data-toggle="tooltip" title="Financial Statements">
                                        <i class="menu-icon fa fa-circle"></i>
                                        Financial
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>

                                    <ul class="submenu">
                                        @if ((hasPermission("account.trial.balance.reports", $slugs)))
                                            <li class="{{ request()->is('account/reports/financial-statements/trial-balance') ? 'active' : '' }}">
                                                <a href="{{ route('report.trial-balance') }}">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    Trial Balance
                                                </a>
                                            </li>
                                        @endif

                                        @if ((hasPermission("account.balance.sheet.reports", $slugs)))
                                            <li class="{{ request()->is('account/reports/financial-statements/balance-sheet') ? 'active' : '' }}">
                                                <a href="{{ route('report.balance-sheet') }}">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    Balance Sheet
                                                </a>
                                            </li>
                                        @endif

                                        @if ((hasPermission("account.profit.and.loss.reports", $slugs)))
                                            <li class="{{ request()->is('account/reports/financial-statements/profit-and-loss') ? 'active' : '' }}">
                                                <a href="{{ route('report.profit-and-loss') }}">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    Profit And Loss
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif


            <!-- Products -->
            @if ((hasAnyPermission(["products.index", "units.index", "categories.index"], $slugs)))
                <li class="{{ request()->segment(2) == "product" ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-circle"></i>
                        Product
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if ((hasPermission("units.index", $slugs)))
                            <li class="{{ request()->is('account/product/units') ? 'active' : '' }}">
                                <a href="{{ route('units.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Units
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("categories.index", $slugs)))
                            <li class="{{ request()->is('account/product/categories') ? 'active' : '' }}">
                                <a href="{{ route('categories.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Category
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("products", $slugs)))
                            <li class="{{ request()->segment(3) == 'products' ? 'active' : '' }}">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-circle"></i>
                                    Product
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="{{ request()->is('account/product/products/create') ? 'active' : '' }}">
                                        <a href="{{ route('products.create') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Product Create
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('account/product/products') ? 'active' : '' }}">
                                        <a href="{{ route('products.index') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Product List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif


            <!-- Purchase -->
            @if ((hasAnyPermission(["acc_purchases.index", "acc_payments.index"], $slugs)))
                <li class="{{ request()->segment(2) == "purchase" ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-circle"></i>
                        Purchase
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if ((hasPermission("acc_payments.index", $slugs)))
                            <li class="{{ request()->is('account/purchase/acc_payments') ? 'active' : '' }}">
                                <a href="{{ route('acc_payments.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Payments
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("acc_purchases.index", $slugs)))
                            <li class="{{ request()->segment(3) == 'acc_purchases' ? 'active' : '' }}">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-circle"></i>
                                    Purchase
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="{{ request()->is('account/purchase/acc_purchases/create') ? 'active' : '' }}">
                                        <a href="{{ route('acc_purchases.create') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Purchase Create
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('account/purchase/acc_purchases') ? 'active' : '' }}">
                                        <a href="{{ route('acc_purchases.index') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Purchase List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if ((hasPermission("acc_suppliers.index", $slugs)))
                            <li class="{{ request()->segment(3) == 'acc_suppliers' ? 'active' : '' }}">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-circle"></i>
                                    Supplier
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="{{ request()->is('account/purchase/acc_suppliers/create') ? 'active' : '' }}">
                                        <a href="{{ route('acc_suppliers.create') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Supplier Create
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('account/purchase/acc_suppliers') ? 'active' : '' }}">
                                        <a href="{{ route('acc_suppliers.index') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Supplier List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif


            <!-- Sale -->
            @if ((hasAnyPermission(["acc_sales.index", "acc_collections.index"], $slugs)))
                <li class="{{ request()->segment(2) == "sale" ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-circle"></i>
                        Sale
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">
                        @if ((hasPermission("acc_collections.index", $slugs)))
                            <li class="{{ request()->is('account/sale/acc_collections') ? 'active' : '' }}">
                                <a href="{{ route('acc_collections.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Collections
                                </a>
                            </li>
                        @endif

                        @if ((hasPermission("acc_sales.index", $slugs)))
                            <li class="{{ request()->segment(3) == 'acc_sales' ? 'active' : '' }}">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-circle"></i>
                                    Sale
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="{{ request()->is('account/sale/acc_sales/create') ? 'active' : '' }}">
                                        <a href="{{ route('acc_sales.create') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Sale Create
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('account/sale/acc_sales') ? 'active' : '' }}">
                                        <a href="{{ route('acc_sales.index') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Sale List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if ((hasPermission("acc_customers.index", $slugs)))
                            <li class="{{ request()->segment(3) == 'acc_customers' ? 'active' : '' }}">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-circle"></i>
                                    Customer
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="{{ request()->is('account/customer/acc_customers/create') ? 'active' : '' }}">
                                        <a href="{{ route('acc_customers.create') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Customer Create
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('account/customer/acc_customers') ? 'active' : '' }}">
                                        <a href="{{ route('acc_customers.index') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Customer List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

        </ul>
    </li>
@endif
