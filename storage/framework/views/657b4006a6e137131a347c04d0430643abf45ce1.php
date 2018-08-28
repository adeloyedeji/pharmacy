<header class="main-nav clearfix">

    <!-- Searchbar -->
    <div class="top-search-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="search-input-addon">
                        <span class="addon-icon"><i class="icon-search4"></i></span>
                        <input type="text" class="form-control top-search-input" placeholder="Enter your keyword...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Searchbar -->

    <!-- Branding -->
    <div class="navbar-left float-left">
        <div class="clearfix">
            <ul class="left-branding float-left">
                <li class="visible-handheld"><span class="left-toggle-switch"><i class="icon-menu7"></i></span></li>
                <li>
                    <a href="index.html"><div class="logo"></div></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Branding -->

    <!-- Search & Languages -->
    <div class="navbar float-left">
        <div class="clearfix">
            <ul class="float-left top-icons hidden-xs-down">
                <li><a href="#" class="btn-top-search m-l-15"><i class="icon-search4"></i></a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-flag7"></i></a>
                    <ul class="dropdown-menu languages animated fadeIn">
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">Deutsch</a>
                        <a class="dropdown-item" href="#">Українська</a>
                        <a class="dropdown-item" href="#">España</a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Search & Languages -->

    <!-- Navbar icons -->
    <div class="navbar float-right navbar-toggleable-sm">
        <div class="clearfix">
            <ul class="float-right top-icons">
                <li><a href="#" class="btn-top-search hidden-sm-up"><i class="icon-search4"></i></a></li>

                <!-- Quick apps dropdown -->
                <li class="dropdown apps-dropdown hidden-xs-down">
                    <a href="#" class="dropdown-toggle" id="apps_dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"><i class="icon-grid2"></i></a>
                    <div class="dropdown-menu animated fadeIn" aria-labelledby="apps_dropdown">

                        <ul class="shortcuts clearfix">
                            <li>
                                <a href="emails.php">
                                    <img src="img/icons/emails.png"/>
                                    <span class="apps-noty">4</span>
                                    <span class="apps-label">Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="messages.php">
                                    <img src="img/icons/messages.png"/>
                                    <span class="apps-noty">8</span>
                                    <span class="apps-label">Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="people.html">
                                    <img src="img/icons/people.png"/>
                                    <span class="apps-label">People</span>
                                </a>
                            </li>
                            <li>
                                <a href="invoice_list.html">
                                    <img src="img/icons/invoices.png"/>
                                    <span class="apps-label">Invoices</span>
                                </a>
                            </li>
                            <li>
                                <a href="projects_list.html">
                                    <img src="img/icons/projects.png"/>
                                    <span class="apps-label">Projects</span>
                                </a>
                            </li>
                            <li>
                                <a href="ecom_cart.html">
                                    <img src="img/icons/cart.png"/>
                                    <span class="apps-noty">3</span>
                                    <span class="apps-label">Cart</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>
                <!-- /Quick apps dropdown -->

                <!-- Rightbar -->
                <li><a class="toggle_rightbar" href="#" onclick="open_rightbar()"><span class="bubble">6</span><i class="icon-list-unordered"></i></a></li>
                <!-- /Rightbar -->

                <!-- User dropdown -->
                <li class="dropdown user-dropdown">
                    <a href="#" class="btn-user dropdown-toggle hidden-xs-down" data-toggle="dropdown"><img src="img/demo/img1.jpg" class="rounded-circle user" alt=""/></a>
                    <a class="user-name hidden-xs-down" data-toggle="dropdown"><?php echo e(Auth::user()->name); ?><small><?php echo e(Auth::user()->job_role); ?></small></a>
                    <a href="#" class="dropdown-toggle hidden-sm-up" data-toggle="dropdown"><i class="icon-more"></i></a>
                    <div class="dropdown-menu animated fadeIn no-p">
                        <div class="user-icon text-center p-t-15">
                            <img src="img/demo/img1.jpg" class="rounded-circle" alt=""/>
                            <h5 class="text-center p-b-15">Hi! Jane Elliott</h5>
                        </div>
                        <ul class="user-links">
                            <li><a href="user_profile_social.html"><i class="icon-profile"></i> My profile</a></li>
                            <li><a href="#"><i class="icon-envelop5"></i> Inbox <span class="badge badge-danger float-right">4</span></a></li>
                            <li><a href="user_profile_social-2.html"><i class="icon-cogs"></i> Profile settings</a></li>
                            <li><a href="login_unlock.html"><i class="icon-lock5"></i> Lock screen</a></li>
                        </ul>
                        <div class="text-center p-10"><a href="login_simple.html" class="btn btn-block"><i class="icon-exit3 i-16 position-left"></i> Logout</a></div>
                    </div>
                </li>
                <!-- /User dropdown -->

            </ul>
        </div>
    </div>
    <!-- /Navbar icons -->

</header>