<?php /* Smarty version 2.6.26, created on 2023-05-01 12:40:37
         compiled from policeHeader.tpl */ ?>
<?php echo '
    <!doctype html>
    <html lang="en" dir="ltr">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name=\'viewport\' content=\'width=device-width, initial-scale=1.0, user-scalable=0\'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords"
            content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="User/assets/images/brand/favicon.ico">

        <!-- TITLE -->
        <title>Migrant Labours - Police</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="User/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- STYLE CSS -->
        <link href="User/assets/css/style.css" rel="stylesheet">

        <!-- Plugins CSS -->
        <link href="User/assets/css/plugins.css" rel="stylesheet">

        <!--- FONT-ICONS CSS -->
        <link href="User/assets/css/icons.css" rel="stylesheet">

        <!-- INTERNAL Switcher css -->
        <link href="User/assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="User/assets/switcher/demo.css" rel="stylesheet">

    </head>

    <body class="app horizontal ltr light-mode">


        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="User/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- app-Header -->
                <div class="app-header header sticky">
                    <div class="container-fluid main-container">
                        <div class="d-flex">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                                href="javascript:void(0)"></a>
                            <!-- sidebar-toggle-->
                            <a class="logo-horizontal " href="#">
                                <img src="User/assets/images/brand/logo-white.svg" class="header-brand-img desktop-logo"
                                    alt="logo">
                                <img src="User/assets/images/brand/logo-dark.svg" class="header-brand-img light-logo1"
                                    alt="logo">
                            </a>
                            <!-- LOGO -->
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <!-- SEARCH -->
                                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                                </button>
                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">
                                            <div class="dropdown d-lg-none d-flex">
                                                <a href="javascript:void(0)" class="nav-link icon"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fe fe-search"></i>
                                                </a>

                                            </div>

                                            <div class="me-4 mt-2">
                                                <div style="text-align: right;">
                                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                                        '; ?>
<?php userclass::getEmailOfUser($_COOKIE['id']) ?><?php echo '
                                                    </h5>
                                                    <small
                                                        class="text-muted mt-2">'; ?>
<?php userclass::getTypeOfUser($_COOKIE['id']) ?><?php echo '</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                                </a>
                                            </div>
                                            <!-- Theme-Layout -->
                                            <div class="dropdown d-flex">
                                                <a class="nav-link icon full-screen-link nav-link-bg">
                                                    <i class="fe fe-minimize fullscreen-button"></i>
                                                </a>
                                            </div>
                                            <!-- FULL-SCREEN -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /app-Header -->

                <!--APP-SIDEBAR-->
                <div class="sticky">
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar">
                        <div class="side-header">
                            <a class="header-brand1" href="#">
                                <img src="User/assets/images/brand/logo-white.svg" class="header-brand-img desktop-logo"
                                    alt="logo">
                                <img src="User/assets/images/brand/icon-white.svg" class="header-brand-img toggle-logo"
                                    alt="logo">
                                <img src="User/assets/images/brand/icon-dark.svg" class="header-brand-img light-logo"
                                    alt="logo">
                                <img src="User/assets/images/brand/logo-dark.svg" class="header-brand-img light-logo1"
                                    alt="logo">
                            </a>
                            <!-- LOGO -->
                        </div>
                        <div class="main-sidemenu">
                            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                </svg></div>
                            <ul class="side-menu">
                                <li class="sub-category">
                                    <h3>Dashboard</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="policeHome.php"><i
                                            class="side-menu__icon fe fe-home"></i><span
                                            class="side-menu__label">Home</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="policeEdit.php"><i
                                            class="side-menu__icon fe fe-user"></i><span
                                            class="side-menu__label">Profile</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                            class="side-menu__icon fe fe-layers"></i><span
                                            class="side-menu__label">Worker</span><i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side29">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a
                                                                    href="javascript:void(0)">Workers</a></li>
                                                            <li><a href="policeStationViewWorkers.php"
                                                                    class="slide-item">Passed
                                                                    Workers</a></li>
                                                            <li><a href="policeStationViewDeathReports.php"
                                                                    class="slide-item">Death
                                                                    Reports</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="logout.php"><i
                                            class="side-menu__icon fe fe-log-out"></i><span
                                            class="side-menu__label">Logout</span></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->

                <!--app-content open-->
                <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">


'; ?>