 <aside id="left-panel" class="left-panel" style="background-color: #012576;">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">


                <ul class="nav navbar-nav">

                    <li class="active">
                        <a href="{{ url('/admin') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>



                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-product-hunt"></i>Manage Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-table"></i><a href="/categories"> New Categories</a></li>
                            <li><i class="fa fa-table"></i><a href="/managecategories">Manage Categories</a></li>
                            <li><i class="fa fa-table"></i><a href="newproducts">New Product</a></li>
                            <li><i class="fa fa-table"></i><a href="/manageproducts">Manage Products</a></li>


                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-first-order"></i>Manage Orders</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/pendingorders">Pending Order</a></li>
                            <li><i class="fa fa-table"></i><a href="/pendingdeliveries">Pending Deliveries</a></li>
                            <li><i class="fa fa-table"></i><a href="/completeorders">Completed Orders</a></li>


                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon 	fa fa-user"></i>Customer Care</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/pendingorders">Pending Order</a></li>
                            <li><i class="fa fa-table"></i><a href="/pendingdeliveries">Pending Deliveries</a></li>
                            <li><i class="fa fa-table"></i><a href="/completeorders">Completed Orders</a></li>


                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-paper-plane"></i>Manage Sms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/pendingorders"></a></li>
                            <li><i class="fa fa-table"></i><a href="/pendingdeliveries">Pending Deliveries</a></li>
                            <li><i class="fa fa-table"></i><a href="/completeorders">Completed Orders</a></li>


                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear "></i>Configuration</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/pendingorders">Sms Logs</a></li>
                            <li><i class="fa fa-table"></i><a href="/pendingdeliveries">Sms Template</a></li>
                            <li><i class="fa fa-table"></i><a href="/completeorders">Completed Orders</a></li>


                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Finance</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/pendingorders">Contributions</a></li>
                            <li><i class="fa fa-table"></i><a href="/pendingdeliveries">Expenditure</a></li>
                            <li><i class="fa fa-table"></i><a href="/completeorders">Completed Orders</a></li>


                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Administrations</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/pendingorders">Portal Users</a></li>
                            <li><i class="fa fa-table"></i><a href="/pendingdeliveries">roles</a></li>
                            <li><i class="fa fa-table"></i><a href="/completeorders">Alerts</a></li>


                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
