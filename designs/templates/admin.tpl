{literal}
    <!doctype html>
    <html lang="en" dir="ltr">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords"
            content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="Admin/assets/images/brand/favicon.ico">

        <!-- TITLE -->
        <title>Migrant Labours - Admin</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="Admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- STYLE CSS -->
        <link href="Admin/assets/css/style.css" rel="stylesheet">

        <!-- Plugins CSS -->
        <link href="Admin/assets/css/plugins.css" rel="stylesheet">

        <!--- FONT-ICONS CSS -->
        <link href="Admin/assets/css/icons.css" rel="stylesheet">

        <!-- INTERNAL Switcher css -->
        <link href="Admin/assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="Admin/assets/switcher/demo.css" rel="stylesheet">

    </head>

    <body class="app sidebar-mini ltr light-mode">


        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="Admin/assets/images/loader.svg" class="loader-img" alt="Loader">
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
                                <img src="Admin/assets/images/brand/logo-white.svg" class="header-brand-img desktop-logo"
                                    alt="logo">
                                <img src="Admin/assets/images/brand/logo-dark.svg" class="header-brand-img light-logo1"
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
                                                        {/literal}{php}userclass::getEmailOfUser($_COOKIE['id']){/php}{literal}
                                                    </h5>
                                                    <small
                                                        class="text-muted mt-2">{/literal}{php}userclass::getTypeOfUser($_COOKIE['id']){/php}{literal}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                                </a>
                                            </div>
                                            <!-- Theme-Layout -->
                                            <div class="d-flex">
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
                                <img src="Admin/assets/images/brand/logo-white.svg" class="header-brand-img desktop-logo"
                                    alt="logo">
                                <img src="Admin/assets/images/brand/icon-white.svg" class="header-brand-img toggle-logo"
                                    alt="logo">
                                <img src="Admin/assets/images/brand/icon-dark.svg" class="header-brand-img light-logo"
                                    alt="logo">
                                <img src="Admin/assets/images/brand/logo-dark.svg" class="header-brand-img light-logo1"
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
                                    <a class="side-menu__item has-link active" data-bs-toggle="slide" href="admin.php"><i
                                            class="side-menu__icon fe fe-home"></i><span
                                            class="side-menu__label">Home</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                                        href="adminChangePassword.php"><i class="side-menu__icon fe fe-life-buoy"></i><span
                                            class="side-menu__label">Change Password</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                            class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">View
                                            Details</span><i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side29">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">View
                                                                    Details</a></li>
                                                            <li><a href="adminViewPolice.php" class="slide-item">Police
                                                                    Stations</a></li>
                                                            <li><a href="adminViewAgency.php"
                                                                    class="slide-item">Agencies</a></li>
                                                            <li><a href="adminViewInsuranceAgency.php"
                                                                    class="slide-item">Insurance Agencies</a></li>
                                                            <li><a href="adminViewWorker.php" class="slide-item">Workers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                            class="side-menu__icon fe fe-bell"></i><span class="side-menu__label">Pass
                                            Notification</span><i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side29">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">Pass
                                                                    Notification</a></li>
                                                            <li><a href="adminAddNotification.php" class="slide-item">Add
                                                                    Notification</a></li>
                                                            <li><a href="adminViewNotifications.php" class="slide-item">View
                                                                    Notifications</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                            class="side-menu__icon fe fe-alert-circle"></i><span
                                            class="side-menu__label">Complaints</span><i
                                            class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side29">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a
                                                                    href="javascript:void(0)">Complaints</a></li>
                                                            <li><a href="adminViewActiveComplaints.php"
                                                                    class="slide-item">Active
                                                                    Complaints</a></li>
                                                            <li><a href="adminViewComplaints.php" class="slide-item">View
                                                                    Complaints</a></li>
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
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>
                        </div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->

                <!--app-content open-->
                <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">
                            <h1 class="text-green display-1 text-center mt-6">Welcome Admin</h1>
                            <!-- PAGE-HEADER -->

                            <div class="page-header">
                                <h1 class="page-title">Home</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                                        <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li> -->
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->
                            <div class="card">
                                <div class="card-body h-100">
                                    <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel"
                                        data-bs-interval="2000">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active">
                                            </li>
                                            <li data-bs-target="#carousel-indicators" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carousel-indicators" data-bs-slide-to="2"></li>
                                            <li data-bs-target="#carousel-indicators" data-bs-slide-to="3"></li>
                                            <li data-bs-target="#carousel-indicators" data-bs-slide-to="4"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 br-5" alt="" src="Slides/slide1.png"
                                                    data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="Slides/slide2.png"
                                                    data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="Slides/slide3.png"
                                                    data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="Slides/slide4.png"
                                                    data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="Slides/slide5.png"
                                                    data-bs-holder-rendered="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body bg-primary-transparent">
                                            <div class="counter-status">
                                                <div class="counter-icon bg-primary-transparent box-shadow-primary">
                                                    <i class="fe fe-layers text-primary fs-23"></i>
                                                </div>
                                                <div class="test-body text-center">
                                                    <h1 class=" mb-6">
                                                        <span class="counter fw-semibold counter ">Tracking</span>
                                                    </h1>
                                                    <div class="counter-text">
                                                        <h5 class="font-weight-normal mb-0 "> Keep track of your migrant
                                                            workers with updates on their work status and more.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body bg-secondary-transparent">
                                            <div class="counter-status">
                                                <div class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                                    <i class="fe fe-wind text-secondary fs-23"></i>
                                                </div>
                                                <div class="text-body text-center">
                                                    <h1 class=" mb-6">
                                                        <span class="counter fw-semibold counter ">Streamlined
                                                            communication</span>
                                                    </h1>
                                                    <div class="counter-text">
                                                        <h5 class="font-weight-normal mb-0 ">Communicate quickly and easily
                                                            through our platform, with built-in video conferencing and
                                                            notification features.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body bg-success-transparent">
                                            <div class="counter-status">
                                                <div class="counter-icon bg-success-transparent box-shadow-success">
                                                    <i class="fe fe-file-text text-success fs-23"></i>
                                                </div>
                                                <div class="text-body text-center">
                                                    <h1 class=" mb-6">
                                                        <span class="counter fw-semibold counter ">Hassle-free
                                                            paperwork</span>
                                                    </h1>
                                                    <div class="counter-text">
                                                        <h5 class="font-weight-normal mb-0 ">Say goodbye to endless
                                                            paperwork and documentation, with our automated systems for
                                                            worker permits, insurance claims, and other processes.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body bg-danger-transparent">
                                            <div class="counter-status">
                                                <div class="counter-icon bg-danger-transparent box-shadow-danger">
                                                    <i class="fe fe-grid text-danger fs-23"></i>
                                                </div>
                                                <div class="text-body text-center">
                                                    <h1 class=" mb-6">
                                                        <span class="counter fw-semibold counter ">Improved safety and
                                                            security</span>
                                                    </h1>
                                                    <div class="counter-text">
                                                        <h5 class="font-weight-normal mb-0 ">Ensure the safety and security
                                                            of workers with our platform's robust features, as well as our
                                                        support for emergency notifications and responses.
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-blog-overlay1 overflow-hidden"
                            style="background-image: url('Slides/image2.jpg')">
                            <div class="card-body  text-white">
                                <h3 class="card-title text-white display-4">
                                    <p>Migrant workers often face challenging working conditions and may be at risk of
                                        exploitation or abuse. Our system helps address these issues by providing a
                                        transparent and accountable way to track their movements and working conditions.
                                        This can help prevent labor violations and ensure that workers receive the
                                        protections they are entitled to.</p>
                                    <p>By using our system, employers can also benefit from a more streamlined and
                                        efficient way of managing their workforce. This can lead to cost savings and
                                        improved productivity, while also promoting ethical and responsible employment
                                        practices.</p>
                                    </main>
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-6 col-lg-6">
                                <div class="card bg-primary img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">Simplified management</h2>
                                                <p class="text-white mb-0">Manage your workers, agencies, and other
                                                    aspects of your business with ease, thanks to our user-friendly
                                                    interface and powerful administrative tools</p>
                                            </div>
                                            <div class="ms-auto"> <i
                                                    class="fa fa-binoculars text-white fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-12 col-md-6 col-lg-6">
                                <div class="card bg-secondary img-card box-secondary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">Data-driven insights</h2>
                                                <p class="text-white mb-0">Make informed decisions and improve your
                                                    business processes</p>
                                            </div>
                                            <div class="ms-auto"> <i class="fa fa-user text-white fs-30 me-2 mt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-12 col-md-6 col-lg-6">
                                <div class="card  bg-success img-card box-success-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">Enhanced collaboration</h2>
                                                <p class="text-white mb-0">Foster collaboration and teamwork among your
                                                    workers, agencies, and other stakeholders, with our platform's
                                                        collaborative features and tools</p>
                                                </div>
                                                <div class="ms-auto"> <i class="fa fa-users text-white fs-30 me-2 mt-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL END -->
                                <div class="col-xl-12 col-md-6 col-lg-6">
                                    <div class="card bg-info img-card box-info-shadow">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="text-white">
                                                    <h2 class="mb-0 number-font">Single-platform solution</h2>
                                                    <p class="text-white mb-0">We centralize different types of users</p>
                                                </div>
                                                <div class="ms-auto"> <i
                                                        class="fa fa-square text-white fs-30 me-2 mt-2"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL END -->
                            </div>


                        </div>
                        <!-- CONTAINER END -->
                    </div>
                </div>
                <!--app-content close-->

            </div>

            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">Copyright <span id="year"></span> <a
                                href="javascript:void(0)">Migrant Labours Tracking System</a>. All
                            rights reserved.</div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->

            <!-- BACK-TO-TOP -->
            <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

            <!-- JQUERY JS -->
            <script src="Admin/assets/js/jquery.min.js"></script>

            <!-- BOOTSTRAP JS -->
            <script src="Admin/assets/plugins/bootstrap/js/popper.min.js"></script>
            <script src="Admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <!-- SPARKLINE JS-->
            <script src="Admin/assets/js/jquery.sparkline.min.js"></script>

            <!-- Sticky js -->
            <script src="Admin/assets/js/sticky.js"></script>

            <!-- CHART-CIRCLE JS-->
            <script src="Admin/assets/js/circle-progress.min.js"></script>

            <!-- PIETY CHART JS-->
            <script src="Admin/assets/plugins/peitychart/jquery.peity.min.js"></script>
            <script src="Admin/assets/plugins/peitychart/peitychart.init.js"></script>

            <!-- SIDEBAR JS -->
            <script src="Admin/assets/plugins/sidebar/sidebar.js"></script>

            <!-- Perfect SCROLLBAR JS-->
            <script src="Admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
            <script src="Admin/assets/plugins/p-scroll/pscroll.js"></script>
            <script src="Admin/assets/plugins/p-scroll/pscroll-1.js"></script>

            <!-- INTERNAL CHARTJS CHART JS-->
            <script src="Admin/assets/plugins/chart/Chart.bundle.js"></script>
            <script src="Admin/assets/plugins/chart/utils.js"></script>

            <!-- INTERNAL SELECT2 JS -->
            <script src="Admin/assets/plugins/select2/select2.full.min.js"></script>

            <!-- INTERNAL Data tables js-->
            <script src="Admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="Admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
            <script src="Admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>

            <!-- INTERNAL APEXCHART JS -->
            <script src="Admin/assets/js/apexcharts.js"></script>
            <script src="Admin/assets/plugins/apexchart/irregular-data-series.js"></script>

            <!-- INTERNAL Flot JS -->
            <script src="Admin/assets/plugins/flot/jquery.flot.js"></script>
            <script src="Admin/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
            <script src="Admin/assets/plugins/flot/chart.flot.sampledata.js"></script>
            <script src="Admin/assets/plugins/flot/dashboard.sampledata.js"></script>

            <!-- INTERNAL Vector js -->
            <script src="Admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
            <script src="Admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

            <!-- SIDE-MENU JS-->
            <script src="Admin/assets/plugins/sidemenu/sidemenu.js"></script>

            <!-- TypeHead js -->
            <script src="Admin/assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
            <script src="Admin/assets/js/typehead.js"></script>

            <!-- INTERNAL INDEX JS -->
            <script src="Admin/assets/js/index1.js"></script>

            <!-- Color Theme js -->
            <script src="Admin/assets/js/themeColors.js"></script>

            <!-- CUSTOM JS -->
            <script src="Admin/assets/js/custom.js"></script>

            <!-- Custom-switcher -->
            <script src="Admin/assets/js/custom-swicher.js"></script>

            <!-- Switcher js -->
            <script src="Admin/assets/switcher/js/switcher.js"></script>

    </body>

    </html>
{/literal}