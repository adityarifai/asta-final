<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}">
    <title>Admin ASTA</title>
    <!-- Custom CSS -->
    <link href="{{asset('adminbite/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminbite/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminbite/assets/libs/morris.js/morris.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('adminbite/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/adminbite/html/ltr/index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('adminbite/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('adminbite/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset('adminbite/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{asset('adminbite/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="sl-icon-menu font-20"></i>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->


                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                            <i class="ti-search font-16"></i>
                        </a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter">
                            <a class="srh-btn">
                                <i class="ti-close"></i>
                            </a>
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="flag-icon flag-icon-id font-18"></i>
                    </a>
                </li>

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="{{asset('regna\astafile\users.jpg')}}" alt="user" class="rounded-circle" width="31">
                </a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <span class="with-arrow">
                        <span class="bg-primary"></span>
                    </span>
                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                        <div class="">
                            <img src="{{asset('regna\astafile\users.jpg')}}" alt="user" class="img-circle" width="60">
                        </div>
                        <div class="m-l-10">
                            <h4 class="m-b-0">Administrator</h4>
                            <p class=" m-b-0">asta.multimediatama@gmail.com</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{{route('logout')}}" aria-expanded="false" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-role="tile">
                        <i class="fa fa-power-off m-r-5 m-l-5"></i> Keluar
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
        </ul>
    </div>
</nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">
                            <img src="{{asset('regna\astafile\users.jpg')}}" alt="users" class="rounded-circle img-fluid" />
                        </div>
                        <div class="user-content hide-menu m-t-10">
                            <h5 class="m-b-10 user-name font-medium">Administrator</h5>
                                                            <!-- <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </a> -->
                                                        <a href="{{url('/')}}" title="Home" class="btn btn-circle btn-sm">
                                                            <i class="fas fa-home"></i>
                                                        </a>
                                                        <!-- <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                            <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                                <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- End User Profile-->
                                                                </li>
                                                                <!-- User Profile-->
                                                                <li class="nav-small-cap">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                    <span class="hide-menu">Personal</span>
                                                                </li>
                                                                <li class="sidebar-item">
                                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('beranda')}}" aria-expanded="false">
                                                                        <i class="icon-Car-Wheel"></i>
                                                                        <span class="hide-menu">Beranda </span>
                                                                    </a>
                                                                </li>
                                                                <li class="sidebar-item">
                                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('produk.all')}}" aria-expanded="false">
                                                                        <i class="mdi mdi-arrange-send-backward"></i>
                                                                        <span class="hide-menu">Produk</span>
                                                                    </a>
                                                                </li>

                                                                <li class="sidebar-item">
                                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('pesan.all')}}" aria-expanded="false">
                                                                        <i class="mdi mdi-content-paste"></i>
                                                                        <span class="hide-menu">Saran</span>
                                                                    </a>
                                                                </li>
                                                                <li class="sidebar-item">
                                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link slide bg-indigo fg-white" href="{{route('logout')}}" aria-expanded="false" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-role="tile">
                                                                        <i class="mdi mdi-directions"></i>
                                                                        <span class="hide-menu">Keluar</span>
                                                                    </a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    </li>
                                                                </ul>
                                                                @csrf
                                                            </form>
                                                        </nav>
                                                        <!-- End Sidebar navigation -->
                                                    </div>
                                                    <!-- End Sidebar scroll-->
                                                </aside>
                                                <!-- ============================================================== -->
                                                <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                                                <!-- ============================================================== -->
                                                <!-- ============================================================== -->
                                                <!-- Page wrapper  -->
                                                <!-- ============================================================== -->
                                                @yield('content')
                                                <!-- ============================================================== -->
                                                <!-- End Page wrapper  -->
                                                <!-- ============================================================== -->
                                            </div>
                                            <!-- ============================================================== -->
                                            <!-- End Wrapper -->
                                            <!-- ============================================================== -->
                                            <!-- ============================================================== -->
                                            <!-- customizer Panel -->
                                            <!-- ============================================================== -->
                                            <aside class="customizer">
                                                <a href="javascript:void(0)" class="service-panel-toggle">
                                                    <i class="fa fa-spin fa-cog"></i>
                                                </a>
                                                <div class="customizer-body">
                                                    <ul class="nav customizer-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab
                                                            " aria-controls="pills-home" aria-selected="true">
                                                            <i class="mdi mdi-wrench font-20"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <!-- Tab 1 -->
                                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <div class="p-15 border-bottom">
                                                            <!-- Sidebar -->
                                                            <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                                                            <div class="custom-control custom-checkbox m-t-10">
                                                                <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                                                                <label class="custom-control-label" for="theme-view">Dark Theme</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox m-t-10">
                                                                <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar
                                                                " id="collapssidebar">
                                                                <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox m-t-10">
                                                                <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                                                                <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox m-t-10">
                                                                <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                                                                <label class="custom-control-label" for="header-position">Fixed Header</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox m-t-10">
                                                                <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                                                                <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                                                            </div>
                                                        </div>
                                                        <div class="p-15 border-bottom">
                                                            <!-- Logo BG -->
                                                            <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                                                            <ul class="theme-color">
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                                                                </li>
                                                            </ul>
                                                            <!-- Logo BG -->
                                                        </div>
                                                        <div class="p-15 border-bottom">
                                                            <!-- Navbar BG -->
                                                            <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                                                            <ul class="theme-color">
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                                                                </li>
                                                            </ul>
                                                            <!-- Navbar BG -->
                                                        </div>
                                                        <div class="p-15 border-bottom">
                                                            <!-- Logo BG -->
                                                            <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                                                            <ul class="theme-color">
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                                                                </li>
                                                                <li class="theme-item">
                                                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                                                                </li>
                                                            </ul>
                                                            <!-- Logo BG -->
                                                        </div>
                                                    </div>
                                                    <!-- End Tab 1 -->
                                                    <!-- Tab 2 -->
                                                    <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                        <ul class="mailbox list-style-none m-t-20">
                                                            <li>
                                                                <div class="message-center chat-scroll">
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('regna\astafile\users.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status online pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Pavan kumar</h5>
                                                                            <span class="mail-desc">Just see the my admin!</span>
                                                                            <span class="time">9:30 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('adminbite/assets/images/users/2.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status busy pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Sonu Nigam</h5>
                                                                            <span class="mail-desc">I've sung a song! See you at</span>
                                                                            <span class="time">9:10 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('adminbite/assets/images/users/3.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status away pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Arijit Sinh</h5>
                                                                            <span class="mail-desc">I am a singer!</span>
                                                                            <span class="time">9:08 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('adminbite/assets/images/users/4.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status offline pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Nirav Joshi</h5>
                                                                            <span class="mail-desc">Just see the my admin!</span>
                                                                            <span class="time">9:02 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('adminbite/assets/images/users/5.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status offline pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Sunil Joshi</h5>
                                                                            <span class="mail-desc">Just see the my admin!</span>
                                                                            <span class="time">9:02 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('adminbite/assets/images/users/6.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status offline pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Akshay Kumar</h5>
                                                                            <span class="mail-desc">Just see the my admin!</span>
                                                                            <span class="time">9:02 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('adminbite/assets/images/users/7.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status offline pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Pavan kumar</h5>
                                                                            <span class="mail-desc">Just see the my admin!</span>
                                                                            <span class="time">9:02 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <!-- Message -->
                                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                                                        <span class="user-img">
                                                                            <img src="{{asset('adminbite/assets/images/users/8.jpg')}}" alt="user" class="rounded-circle">
                                                                            <span class="profile-status offline pull-right"></span>
                                                                        </span>
                                                                        <div class="mail-contnet">
                                                                            <h5 class="message-title">Varun Dhavan</h5>
                                                                            <span class="mail-desc">Just see the my admin!</span>
                                                                            <span class="time">9:02 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End Tab 2 -->
                                                    <!-- Tab 3 -->
                                                    <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                        <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                                                        <div class="steamline">
                                                            <div class="sl-item">
                                                                <div class="sl-left bg-success">
                                                                    <i class="ti-user"></i>
                                                                </div>
                                                                <div class="sl-right">
                                                                    <div class="font-medium">Meeting today
                                                                        <span class="sl-date"> 5pm</span>
                                                                    </div>
                                                                    <div class="desc">you can write anything </div>
                                                                </div>
                                                            </div>
                                                            <div class="sl-item">
                                                                <div class="sl-left bg-info">
                                                                    <i class="fas fa-image"></i>
                                                                </div>
                                                                <div class="sl-right">
                                                                    <div class="font-medium">Send documents to Clark</div>
                                                                    <div class="desc">Lorem Ipsum is simply </div>
                                                                </div>
                                                            </div>
                                                            <div class="sl-item">
                                                                <div class="sl-left">
                                                                    <img class="rounded-circle" alt="user" src="{{asset('adminbite/assets/images/users/2.jpg')}}"> </div>
                                                                    <div class="sl-right">
                                                                        <div class="font-medium">Go to the Doctor
                                                                            <span class="sl-date">5 minutes ago</span>
                                                                        </div>
                                                                        <div class="desc">Contrary to popular belief</div>
                                                                    </div>
                                                                </div>
                                                                <div class="sl-item">
                                                                    <div class="sl-left">
                                                                        <img class="rounded-circle" alt="user" src="{{asset('adminbite/assets/images/users/1.jpg')}}"> </div>
                                                                        <div class="sl-right">
                                                                            <div>
                                                                                <a href="javascript:void(0)">Stephen</a>
                                                                                <span class="sl-date">5 minutes ago</span>
                                                                            </div>
                                                                            <div class="desc">Approve meeting with tiger</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left bg-primary">
                                                                            <i class="ti-user"></i>
                                                                        </div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Meeting today
                                                                                <span class="sl-date"> 5pm</span>
                                                                            </div>
                                                                            <div class="desc">you can write anything </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left bg-info">
                                                                            <i class="fas fa-image"></i>
                                                                        </div>
                                                                        <div class="sl-right">
                                                                            <div class="font-medium">Send documents to Clark</div>
                                                                            <div class="desc">Lorem Ipsum is simply </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sl-item">
                                                                        <div class="sl-left">
                                                                            <img class="rounded-circle" alt="user" src="{{asset('adminbite/assets/images/users/4.jpg')}}"> </div>
                                                                            <div class="sl-right">
                                                                                <div class="font-medium">Go to the Doctor
                                                                                    <span class="sl-date">5 minutes ago</span>
                                                                                </div>
                                                                                <div class="desc">Contrary to popular belief</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sl-item">
                                                                            <div class="sl-left">
                                                                                <img class="rounded-circle" alt="user" src="{{asset('adminbite/assets/images/users/6.jpg')}}"> </div>
                                                                                <div class="sl-right">
                                                                                    <div>
                                                                                        <a href="javascript:void(0)">Stephen</a>
                                                                                        <span class="sl-date">5 minutes ago</span>
                                                                                    </div>
                                                                                    <div class="desc">Approve meeting with tiger</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Tab 3 -->
                                                                </div>
                                                            </div>
                                                        </aside>
                                                        <div class="chat-windows"></div>
                                                        <!-- ============================================================== -->
                                                        <!-- All Jquery -->
                                                        <!-- ============================================================== -->
                                                        <script src="{{asset('adminbite/assets/libs/jquery/dist/jquery.min.js')}}"></script>
                                                        <!-- Bootstrap tether Core JavaScript -->
                                                        <script src="{{asset('adminbite/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
                                                        <script src="{{asset('adminbite/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                                                        <!-- apps -->
                                                        <script src="{{asset('adminbite/dist/js/app.min.js')}}"></script>
                                                        <script src="{{asset('adminbite/dist/js/app.init.js')}}"></script>
                                                        <script src="{{asset('adminbite/dist/js/app-style-switcher.js')}}"></script>
                                                        <!-- slimscrollbar scrollbar JavaScript -->
                                                        <script src="{{asset('adminbite/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
                                                        <script src="{{asset('adminbite/assets/extra-libs/sparkline/sparkline.js')}}"></script>
                                                        <!--Wave Effects -->
                                                        <script src="{{asset('adminbite/dist/js/waves.js')}}"></script>
                                                        <!--Menu sidebar -->
                                                        <script src="{{asset('adminbite/dist/js/sidebarmenu.js')}}"></script>
                                                        <!--Custom JavaScript -->
                                                        <script src="{{asset('adminbite/dist/js/custom.min.js')}}"></script>
                                                        <!--This page JavaScript -->
                                                        <!--chartis chart-->
                                                        <script src="{{asset('adminbite/assets/libs/chartist/dist/chartist.min.js')}}"></script>
                                                        <script src="{{asset('adminbite/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
                                                        <!--c3 charts -->
                                                        <script src="{{asset('adminbite/assets/extra-libs/c3/d3.min.js')}}"></script>
                                                        <script src="{{asset('adminbite/assets/extra-libs/c3/c3.min.js')}}"></script>
                                                        <!--chartjs -->
                                                        <script src="{{asset('adminbite/assets/libs/raphael/raphael.min.js')}}"></script>
                                                        <script src="{{asset('adminbite/assets/libs/morris.js/morris.min.js')}}"></script>

                                                        <script src="{{asset('adminbite/dist/js/pages/dashboards/dashboard1.js')}}"></script>
                                                    </body>

                                                    </html>