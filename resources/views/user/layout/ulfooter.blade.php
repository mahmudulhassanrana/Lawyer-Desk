<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="{{asset('assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('assets/css/sleek.css')}}" />



    <!-- FAVICON -->
    <link href="{{asset('assets/img/lawyerdesk.png')}}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>

<div class="mobile-sticky-body-overlay"></div>

<div class="wrapper">

    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
    <aside class="left-sidebar bg-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="{{url('/user')}}">
                    <img src={{asset("assets/img/lawyerdesk.png")}}>
                    <span class="brand-name">Lawyer Desk</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">



                    <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="user" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">


                            <i class="fa fa-address-book" ></i>

                            <span class="nav-text">User Dashboard</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="{{url('/userlawyer')}}">
                                        <span class="nav-text">Create Application </span>

                                    </a>
                                </li>

                                <li >
                                    <a class="sidenav-item-link" href="{{url('/applicationlist')}}">
                                        <span class="nav-text">Application list</span>
                                    </a>
                                </li>

                                <li >
                                    <a class="sidenav-item-link" href="">
                                        <span class="nav-text">Feedback</span>
                                    </a>
                                </li>





                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </aside>



    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                               autofocus autocomplete="off" />
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <!-- Github Link Button -->


                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            @if( auth()->check() )
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="{{asset("assets/img/user/user.png")}}"class="user-image" alt="User Image" />
                                <span class="d-none d-lg-inline-block">{{ auth()->user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="{{asset("assets/img/user/user.png")}}"class="img-circle" alt="User Image" />
                                    <div class="d-inline-block">
                                        {{ auth()->user()->name }} <small class="pt-1">{{ auth()->user()->email }}</small>
                                    </div>
                                </li>
                                @endif

                                <li>
                                    <a href="{{url('/userprofile')}}">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="{{url('/logout')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


        </header>
