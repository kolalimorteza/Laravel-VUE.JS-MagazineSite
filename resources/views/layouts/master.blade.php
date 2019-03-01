<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mannatthemes.com/syntra/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 06:38:47 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Diaco | Magazine Laravel VueJs Web App </title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/morris-chart/morris.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/slidebars.min.css" rel="stylesheet">
        <link href="assets/css/icons.css" rel="stylesheet">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet">
</head>

    <body class="sticky-header" >
       <div id="app">
       <section >
            <!-- sidebar left start-->
            <div class="sidebar-left">
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
                            <h6>{{ Auth::user()->name }}</h6>
                            <p class="text-muted m-0">Admin</p>
                        </div>
                    </div>   
                                        
                    <!--sidebar nav start-->
                    <ul class="side-navigation">
                        <li>
                            <h3 class="navigation-title">Navigation</h3>
                        </li>
                        <li class="active">
                          <router-link to="/dashboard"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></router-link>
                        </li>
                        @can('isAdmin')
                        <li class="active">
                          <router-link to="/users"><i class="mdi mdi-account-multiple"></i> <span>Users</span></router-link>
                        </li>
                        @endcan
                        <li class="active">
                            <router-link to="/profile"><i class="mdi mdi-account-box"></i> <span>Profile</span></router-link>
                        </li>
                        <li class="active">
                            <router-link to="/post"><i class="mdi mdi-account-box"></i> <span>Post</span></router-link>
                        </li>
                        <li class="active">
                            <router-link to="/category"><i class="mdi mdi-account-box"></i> <span>Category</span></router-link>
                        </li>
                        <li>
                            <h3 class="navigation-title">Components</h3>
                        </li>
                        <li class="menu-list"><a href="#"><i class="mdi mdi-google-circles-extended"></i> <span>Components <span
                                class="badge badge-primary noti-arrow pull-right">6</span> </span></a>
                            <ul class="child-list">
                                <li><a href="components-grid.html"> Grid</a></li>
                                <li><a href="components-calendar.html"> Calendar</a></li>
                                <li><a href="components-sweet-alerts.html"> Sweet Alerts </a></li>
                                <li><a href="components-portlets.html"> Portlets </a></li>
                                <li><a href="components-widgets.html"> Widgets </a></li>
                                <li><a href="components-nestable.html"> Nestable </a></li>
                                <li><a href="components-range-slider.html"> Range Slider </a></li>
                            </ul>
                        </li>
                    </ul><!--sidebar nav end-->
                </div>
            </div><!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                <div class="header-section">
                    <!--logo and logo icon start-->
                    <div class="logo">
                        <a href="/home">
                            <span class="logo-img">
                                <img src="assets/images/logo_sm.png" alt="" height="26">
                            </span>
                            <!--<i class="fa fa-maxcdn"></i>-->
                            <span class="brand-name">Syntra</span>
                        </a>
                    </div>

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->

                    <!--mega menu start-->
                    <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                        <ul class="nav navbar-nav">                           
                            
                             <!-- Classic list -->
                            <li>
                                
                                    <input type="text" class="form-control
                                     mt-3"
                                     @keyup="searchit" v-model="search" type="search"
                                     name="keyword" placeholder="Search...">
                                    <span class="search-button" @click="searchit"><i class="ti ti-search"></i></span>
                            </li>
                        </ul>
                    </div>
                    <!--mega menu end-->

                    <div class="notification-wrap">
                        <!--right notification start-->
                        <div class="right-notification">
                            <ul class="notification-menu">
                                <li>
                                    <a href="#" class="notification" data-toggle="dropdown">
                                        
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span class="badge badge-success">4</span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="#" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-email-outline"></i>
                                        <span class="badge badge-danger">9</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" class="notification" data-toggle="dropdown"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout m-r-5 text-muted"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                <li>
                                    <a href="javascript:;" data-toggle="dropdown">
                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                        <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>

                                </li>

                                <li>
                                    <div class="sb-toggle-right">
                                        <i class="mdi mdi-apps"></i>
                                    </div>
                                </li>
                            </ul>
                        </div><!--right notification end-->
                    </div>
                </div>
                <!-- header section end-->
                
                <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
                <!--footer section start-->
                <footer class="footer">
                    2018 &copy; Syntra.
                </footer>
                <!--footer section end-->


                <!-- Right Slidebar start -->
                <div class="sb-slidebar sb-right sb-style-overlay">
                    <div class="right-bar slimscroll">
                        <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

                        <ul class="nav nav-tabs nav-justified-">
                            <li class="">
                                <a href="#chat" class="active" data-toggle="tab">Chat</a>
                            </li>
                            <li class="">
                                <a href="#activity" data-toggle="tab">Activity</a>
                            </li>
                            <li class="">
                                <a href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="chat">
                                <div class="online-chat">
                                    <div class="online-chat-container">
                                        <div class="chat-list">
                                            <form class="search-content" action="http://mannatthemes.com/syntra/index.html" method="post">
                                                <input type="text" class="form-control" name="keyword" placeholder="Search...">
                                                <span class="search-button"><i class="ti ti-search"></i></span>
                                            </form>
                                        </div>
                                        <div class="side-title-alt">
                                            <h2>online</h2>                                           
                                        </div>

                                        <ul class="team-list chat-list-side">
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="assets/images/users/avatar-1.jpg" alt="">
                                                        <i class="online dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Alison Jones</span>
                                                        <small class="text-muted">Start exploring</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                                        <i class="online dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Jonathan Smith</span>
                                                        <small class="text-muted">Alien Inside</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                                        <i class="away dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Anjelina Doe</span>
                                                        <small class="text-muted">Screaming...</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                        <i class="busy dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Franklin Adam</span>
                                                        <small class="text-muted">Don't lose the hope</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="assets/images/users/avatar-6.jpg" alt="">
                                                         <i class="online dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Jeff Crowford </span>
                                                        <small class="text-muted">Just flying</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="side-title-alt mb-3">
                                            <h2>Friends</h2>
                                        </div>
                                        <ul class="list-unstyled friends">
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-7.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-8.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-9.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-10.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="">
                                                </a>
                                            </li>
                                             <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-1.jpg" alt="">
                                                </a>
                                            </li>
                                             <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                                </a>
                                            </li>
                                             <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="activity">
                                
                                <div class="aside-widget">
                                    <div class="side-title-alt">
                                        <h2>Recent Activity</h2>
                                    </div>
                                    <ul class="team-list chat-list-side info">
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-pencil"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Mary Brown open a new company</span>
                                                <span class="time">just now</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-user-plus"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Mary Brown send a new message </span>
                                                <span class="time">50 min ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-wrench"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Holly Cobb Uploaded 6 new photos.</span>
                                                <span class="time">3 Week Ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-users"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Mary Brown open a new company.</span>
                                                <span class="time">1 Month Ago</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="aside-widget">

                                    <div class="side-title-alt">
                                        <h2>Events</h2>
                                    </div>
                                    <ul class="team-list chat-list-side info statistics border-less-list">
                                        <li>
                                            <div class="inline">
                                                <p class="mb-1">Jamie Miller</p>
                                                <span class="name">Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                                <span class="time text-muted">2 Week Ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline">
                                                <p class="mb-1">Robert Jones</p>
                                                <span class="name">Lorem Ipsum is simply dummy text of the printing and typesetting .</span>
                                                <span class="time text-muted">1 Month Ago</span>
                                            </div>
                                        </li>                                        
                                    </ul>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="settings">
                                <div class="side-title-alt">
                                    <h6 class="mb-0">Account Setting</h6>
                                </div>
                                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                    <li>
                                        <div class="inline">
                                            <span class="name">Auto updates</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                    <li>
                                        <div class="inline">
                                            <span class="name">Show offline Contacts</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>

                                    <li>
                                        <div class="inline">
                                            <span class="name">Location Permission</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                </ul>

                                <div class="side-title-alt">
                                    <h6 class="mb-0">General Setting</h6>
                                </div>
                                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                    <li>
                                        <div class="inline">
                                            <span class="name">Show me Online</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                    <li>
                                        <div class="inline">
                                            <span class="name">Status visible to all</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>

                                    <li>
                                        <div class="inline">
                                            <span class="name">Notifications</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Right Slidebar-->
            </div>
            <!--end body content-->
        </section>
       </div>
       
       @auth
        <script>
          window.user = @json(auth()->user())
        </script>
       @endauth
        <!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-migrate.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/js/slidebars.min.js"></script>

        <!--plugins js-->
        <script src="assets/plugins/counter/jquery.counterup.min.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="assets/pages/jquery.sparkline.init.js"></script>

        <script src="assets/plugins/chart-js/Chart.bundle.js"></script>
        <script src="assets/plugins/morris-chart/raphael-min.js"></script>
        <script src="assets/plugins/morris-chart/morris.js"></script>
        <script src="assets/pages/dashboard-init.js"></script>

        <script src="js/app.js"></script>
        <!--app js-->
        <script src="assets/js/jquery.app.js"></script>
        
    </body>

<!-- Mirrored from mannatthemes.com/syntra/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 06:41:29 GMT -->
</html>
