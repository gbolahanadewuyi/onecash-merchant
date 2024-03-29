<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OneCash Merchant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?=base_url()?>public/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?=base_url()?>public/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?=base_url()?>public/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?=base_url()?>public/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?=base_url()?>public/img/favicon.ico">
    <script src="https://cdn.zinggrid.com/zinggrid.min.js" defer></script>
    <link href="<?=base_url()?>public/css/zingrid_style.css" rel="stylesheet">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
                <div class="search-box">
                    <button class="dismiss"><i class="icon-close"></i></button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="What are you looking for..." class="form-control">
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand --><a href="<?= base_url() ?>agriculture/dashboard" class="navbar-brand d-none d-sm-inline-block">
                                <div class="brand-text d-none d-lg-inline-block"><span>OneCash
                                    </span><strong>Merchant</strong></div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
                            </a>
                            <!-- Toggle Button--><a id="toggle-btn" href="#"
                                class="menu-btn active"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i
                                        class="icon-search"></i></a>
                            </li>
                            <!-- Notifications-->
                            <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link"><i class="fa fa-bell-o"></i><span
                                        class="badge bg-red badge-corner">12</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i
                                                        class="fa fa-envelope bg-green"></i>You have 6 new messages
                                                </div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i
                                                        class="fa fa-twitter bg-blue"></i>You have 2 followers
                                                </div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i
                                                        class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                                <div class="notification-time"><small>4 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content"><i
                                                        class="fa fa-twitter bg-blue"></i>You have 2 followers
                                                </div>
                                                <div class="notification-time"><small>10 minutes ago</small></div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong>view all
                                                notifications </strong></a></li>
                                </ul>
                            </li>
                            <!-- Messages                        -->
                            <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link"><i class="fa fa-envelope-o"></i><span
                                        class="badge bg-orange badge-corner">10</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="<?=base_url()?>public/img/avatar-1.jpg"
                                                    alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="<?=base_url()?>public/img/avatar-2.jpg"
                                                    alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"> <img src="<?=base_url()?>public/img/avatar-3.jpg"
                                                    alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong>Read all
                                                messages </strong></a></li>
                                </ul>
                            </li>
                            <!-- Languages dropdown    -->
                            <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link language dropdown-toggle"><img
                                        src="<?=base_url()?>public/img/flags/16/GB.png" alt="English"><span
                                        class="d-none d-sm-inline-block">English</span></a>
                                <ul aria-labelledby="languages" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img
                                                src="<?=base_url()?>public/img/flags/16/DE.png" alt="English"
                                                class="mr-2">German</a>
                                    </li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img
                                                src="<?=base_url()?>public/img/flags/16/FR.png" alt="English"
                                                class="mr-2">French
                                        </a></li>
                                </ul>
                            </li>
                            <!-- Logout    -->
                            <li class="nav-item"><a href="javascript:end_session();" class="nav-link logout"> <span
                                        class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar"><img src="<?=base_url()?>public/img/avatar-1.jpg" alt="..."
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="title">
                        <h1 class="h4">
                            <? echo $name_of_institution?>
                        </h1>
                        <p>
                            <? echo $field ?>
                        </p>
                    </div>
                </div>