<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('admin/images/favicon.ico')}}">
    <title>Tufan Admin</title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('admin/css/vendors_css.css')}}">
    <!-- Style-->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/skin_color.css')}}">
    <!-- Data Table-->

    @stack('css')

</head>
<body class="hold-transition dark-skin sidebar-mini theme-warning fixed">

<div class="wrapper">
    <div id="loader"></div>

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <!-- Logo -->
            <a href="{{route("admin.getDashboard")}}" class="logo">
                <!-- logo-->
                <div class="logo-mini w-30">
                    <span class="light-logo"><img src="{{asset('admin/images/logo-letter.png')}}" alt="logo"></span>
                    <span class="dark-logo"><img src="{{asset('admin/images/logo-letter.png')}}" alt="logo"></span>
                </div>
                <div class="logo-lg">
                    <span class="light-logo"><img src="{{asset('admin/images/logo-dark-text.png')}}" alt="logo"></span>
                    <span class="dark-logo"><img src="{{asset('admin/images/logo-light-text.png')}}" alt="logo"></span>
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item">
                        <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                           data-toggle="push-menu" role="button">
                            <i data-feather="align-left"></i>
                        </a>
                    </li>
                    {{--                    <li class="btn-group nav-item d-none d-xl-inline-block">--}}
                    {{--                        <a href="contact_app_chat.html"--}}
                    {{--                           class="waves-effect waves-light nav-link svg-bt-icon btn-primary-light" title="Chat">--}}
                    {{--                            <i data-feather="message-circle"></i>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="btn-group nav-item d-none d-xl-inline-block">--}}
                    {{--                        <a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon btn-primary-light"--}}
                    {{--                           title="Mailbox">--}}
                    {{--                            <i data-feather="at-sign"></i>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="btn-group nav-item d-none d-xl-inline-block">--}}
                    {{--                        <a href="extra_taskboard.html"--}}
                    {{--                           class="waves-effect waves-light nav-link svg-bt-icon btn-primary-light" title="Taskboard">--}}
                    {{--                            <i data-feather="clipboard"></i>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group d-lg-inline-flex d-none">
                        <div class="app-menu">
                            <div class="search-bx mx-5">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search"
                                               aria-label="Search" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon3"><i
                                                    data-feather="search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen"
                           class="waves-effect waves-light nav-link full-screen btn-primary-light" title="Full Screen">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light"
                           data-bs-toggle="dropdown" title="Notifications">
                            <i data-feather="bell"></i>
                        </a>
                        <ul class="dropdown-menu animated bounceIn">

                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit
                                            blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien
                                            elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor
                                            commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum
                                            fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam
                                            interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light"
                           data-bs-toggle="dropdown" title="User">
                            <i data-feather="user"></i>
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My
                                    Wallet</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i>
                                    Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="ti-lock text-muted me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Control Sidebar Toggle Button -->
                    {{--                    <li>--}}
                    {{--                        <a href="#" data-toggle="control-sidebar" title="Setting"--}}
                    {{--                           class="waves-effect waves-light btn-primary-light">--}}
                    {{--                            <i data-feather="settings"></i>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}

                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 100%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>
                            <a href="{{route('admin.getDashboard')}}">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="user"></i>
                                <span>Team</span>
                                <span class="pull-right-container">
					            <i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route("team")}}"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Team Add</a>
                                </li>
                                <li><a href="{{route("teamList")}}"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Team List</a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i data-feather="user"></i>
                                <span>Post</span>
                                <span class="pull-right-container">
					            <i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route("homes")}}"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Post Add</a>
                                </li>
                                <li><a href="{{route("show")}}"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Post List</a>
                                </li>

                            </ul>
                        </li>
                    </ul>


                </div>
            </div>
        </section>
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
        {{--        <div class="container-full">--}}
        {{--            <!-- Content Header (Page header) -->--}}
        {{--            <div class="content-header">--}}
        {{--                <div class="d-flex align-items-center">--}}
        {{--                    <div class="me-auto">--}}
        {{--                        <h4 class="page-title">Contact List</h4>--}}
        {{--                        <div class="d-inline-block align-items-center">--}}
        {{--                            <nav>--}}
        {{--                                <ol class="breadcrumb">--}}
        {{--                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>--}}
        {{--                                    <li class="breadcrumb-item" aria-current="page">Apps</li>--}}
        {{--                                    <li class="breadcrumb-item active" aria-current="page">Contact List</li>--}}
        {{--                                </ol>--}}
        {{--                            </nav>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                </div>--}}
        {{--            </div>--}}

        {{--            <!-- Main content -->--}}
        {{--            <section class="content">--}}
        {{--                --}}

        {{--            </section>--}}
        {{--            <!-- /.content -->--}}
        {{--        </div>--}}
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>


<script src="{{asset('admin/js/vendors.min.js')}}"></script>
<script src="{{asset('admin/js/pages/chat-popup.js')}}"></script>
<script src="{{asset('admin/icons/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/iCheck/icheck.js')}}"></script>
<script src="{{asset('assets/vendor_components/sweetalert/sweetalert.min.js')}}"></script>

<script src="{{asset('admin/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('admin/js/pages/data-table.js')}}"></script>
<!-- Crypto Admin App -->
<script src="{{asset('admin/js/template.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="{{asset('admin/js/app-contact.js')}}"></script>
@stack('js')
<script>
    @if(Session::has("dismiss"))
    swal("Failed!", "{{Session::get("dismiss")}}", "error")
    @endif
    @if(Session::has("success"))
    swal("Success!", "{{Session::get("success")}}", "success")
    @endif
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    swal("Failed!", "{{$error}}", "error")
    @endforeach
    @endif
</script>

</body>
</html>
