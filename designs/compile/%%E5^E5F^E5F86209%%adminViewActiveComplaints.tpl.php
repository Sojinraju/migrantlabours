<?php /* Smarty version 2.6.26, created on 2023-05-14 09:45:52
         compiled from adminViewActiveComplaints.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'adminViewActiveComplaints.tpl', 276, false),)), $this); ?>
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
                                <h1 class="page-title">View Active Complaints</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Complaints</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Active Complaints</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->
                            <div class="row">
                                <div class="col-lg-12">
                                '; ?>

                                <?php if (count ( $this->_tpl_vars['data'] ) == 0): ?>
                                    No Active Complaints
                                <?php endif; ?>
                                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['d']):
?>
                                    <div class="card text-white bg-primary ribbone-card">
                                        <div class="power-ribbone power-ribbone-top-left text-primary"><span
                                                class="bg-white"><i
                                                    class="fa fa-exclamation-circle text-primary"></i></span></div>

                                        <div class="card-header">
                                            <h3 class="card-title text-white ms-7"><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['currentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>

                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Worker Name: <?php echo $this->_tpl_vars['d']['workerName']; ?>

                                                <br>Aadhaar: <?php echo $this->_tpl_vars['d']['aadhaar']; ?>

                                                <br>Email: <?php echo $this->_tpl_vars['d']['email']; ?>

                                                <br>Agency: <?php echo $this->_tpl_vars['d']['agencyName']; ?>

                                            </p>
                                            <p class="card-text">Subject: <?php echo $this->_tpl_vars['d']['subject']; ?>
</p>
                                            <p class="card-text">Content: <?php echo $this->_tpl_vars['d']['content']; ?>
</p>
                                        </div>
                                        <div class="card-footer">
                                            <form action="" method="post">
                                                <input type="hidden" name="hide" value="h">
                                                <input type="hidden" name="complaintId" value="<?php echo $this->_tpl_vars['d']['complaintId']; ?>
">
                                                <div class=" row mb-4">
                                                    <label class="col-md-1 text-white form-label">Reply</label>
                                                    <div class="col-md-10">
                                                        <textarea type="adminReply" name="adminReply" class="form-control"
                                                            placeholder="Response to Complaint" required></textarea>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="submit" class="btn btn-icon btn-success" value="Send">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                <?php endforeach; endif; unset($_from); ?>
                                <?php echo '
                                </div>
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
'; ?>