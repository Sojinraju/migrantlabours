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
                                    <a class="side-menu__item has-link " data-bs-toggle="slide" href="admin.php"><i
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

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Pass Notification</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pass Notification</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Notifications</li>
                                    </ol>
                                </div>

                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Notifications</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom"
                                                    id="basic-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>Date Added</th>
                                                            <th>Notification Message</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    {/literal}
                                                    {foreach from=$data item="d"}
                                                        <tr>
                                                            <td>{$d.currentDate|date_format:"%d-%m-%Y"}</td>
                                                            <td>
                                                                <div class="text-wrap">{$d.notification}</div>
                                                            </td>
                                                            <td>
                                                                <a href="adminEditNotification.php?id={$d.notificationId}"
                                                                    class=" btn btn-primary me-2">Edit</a>
                                                                <a href="adminDeleteNotification.php?id={$d.notificationId}"
                                                                    class="btn btn-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                    {/foreach}
                                                    {literal}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Row -->
                            <!-- End Row -->
                        </div>
                        <!-- CONTAINER CLOSED -->

                    </div>
                </div>
                <!--app-content closed-->
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
            <!-- FOOTER CLOSED -->
        </div>

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY JS -->
        <script src="Admin/assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="Admin/assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="Admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- INPUT MASK JS-->
        <script src="Admin/assets/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- TypeHead js -->
        <script src="Admin/assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
        <script src="Admin/assets/js/typehead.js"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="Admin/assets/plugins/select2/select2.full.min.js"></script>

        <!-- DATA TABLE JS-->
        <script src="Admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="Admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="Admin/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
        <script src="Admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
        <script src="Admin/assets/plugins/datatable/js/jszip.min.js"></script>
        <script src="Admin/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="Admin/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="Admin/assets/plugins/datatable/js/buttons.html5.min.js"></script>
        <script src="Admin/assets/plugins/datatable/js/buttons.print.min.js"></script>
        <script src="Admin/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
        <script src="Admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>
        <script src="Admin/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
        <script src="Admin/assets/js/table-data.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="Admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script src="Admin/assets/plugins/p-scroll/pscroll.js"></script>
        <script src="Admin/assets/plugins/p-scroll/pscroll-1.js"></script>

        <!-- SIDE-MENU JS -->
        <script src="Admin/assets/plugins/sidemenu/sidemenu.js"></script>

        <!-- SIDEBAR JS -->
        <script src="Admin/assets/plugins/sidebar/sidebar.js"></script>

        <!-- Color Theme js -->
        <script src="Admin/assets/js/themeColors.js"></script>

        <!-- Sticky js -->
        <script src="Admin/assets/js/sticky.js"></script>

        <!-- CUSTOM JS -->
        <script src="Admin/assets/js/custom.js"></script>

        <!-- Custom-switcher -->
        <script src="Admin/assets/js/custom-swicher.js"></script>

        <!-- Switcher js -->
        <script src="Admin/assets/switcher/js/switcher.js"></script>

    </body>

    </html>
{/literal}