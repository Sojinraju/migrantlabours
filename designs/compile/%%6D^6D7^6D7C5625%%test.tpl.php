<?php /* Smarty version 2.6.26, created on 2023-05-04 12:32:20
         compiled from test.tpl */ ?>
<?php echo '
    <!doctype html>
    <html ng-app="myApp" lang="en" dir="ltr">

    <head>

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="User/assets/images/brand/favicon.ico">

        <!-- TITLE -->
        <title>Migrant Labours - Home</title>

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

        <!-- Validation Css-->
        <link href="User/assets/css/validation.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>  

    </head>

    <body class="app horizontal ltr light-mode">


      
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

                                            <div class="d-flex">
                                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                                </a>
                                            </div>
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
                                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.php"><i
                                            class="side-menu__icon fe fe-home"></i><span
                                            class="side-menu__label">Home</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                            class="side-menu__icon fe fe-user-plus"></i><span
                                            class="side-menu__label">Register</span><i
                                            class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side29">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a
                                                                    href="javascript:void(0)">Register</a></li>
                                                            <li><a href="registerPolice.php" class="slide-item">Police
                                                                    Station</a></li>
                                                            <li><a href="registerAgency.php" class="slide-item">Agency</a>
                                                            </li>
                                                            <li><a href="registerInsuranceAgency.php"
                                                                    class="slide-item">Insurance Agency</a></li>
                                                            <li><a href="registerWorker.php" class="slide-item">Worker</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="login.php"><i
                                            class="side-menu__icon fe fe-log-in"></i><span
                                            class="side-menu__label">Login</span></a>
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

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Police Station Registration</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Register</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Police Station</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Police Station Registration</h4>
                                </div>
                                <div class="card-body">
                                    <div ng-controller="cntrl">
                                        <form name="SaveForm" action="" ng-submit="funcSave()" class="form-horizontal" method="post">
                                            <input type="hidden" name="hide" value="a">
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Station ID</label>
                                                <div class="col-md-9">
                                                    <input type="text" ng-pattern="/^[0-9]{1,10}$/" required maxlength="10"
                                                        ng-model="stationId" name="stationId"
                                                        ng-class="{ \'invalid\': SaveForm.stationId.$invalid && SaveForm.stationId.$dirty, \'valid\': SaveForm.stationId.$valid }"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, \'\');"
                                                        class="form-control" placeholder="Station Number">
                                                    <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                                        ng-show="SaveForm.stationId.$dirty && SaveForm.stationId.$invalid">
                                                        Please enter valid Station ID.
                                                    </span>
                                                    <span style="color:green" class="text ms-1 fs-12 fw-light"
                                                        ng-show="SaveForm.stationId.$valid">
                                                        Station ID is valid.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Address Line 1</label>
                                                <div class="col-md-9">
                                                    <input type="text" required maxlength="100" ng-model="addLine1"
                                                        name="addLine1" class="form-control"
                                                        ng-class="{ \'invalid\': SaveForm.addLine1.$invalid && SaveForm.addLine1.$dirty, \'valid\': SaveForm.addLine1.$valid }"
                                                        placeholder="Address Line 1">
                                                    <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                                        ng-show="SaveForm.addLine1.$dirty && SaveForm.addLine1.$invalid">
                                                        Please enter valid Address line.
                                                    </span>
                                                    <span style="color:green" class="text ms-1 fs-12 fw-light"
                                                        ng-show="SaveForm.addLine1.$valid">
                                                        Address line is valid.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-0 mt-4 row justify-content-end">
                                                <div class="col-md-9">
                                                    <input type="submit" class="btn btn-primary" value="Register"
                                                        ng-disabled="SaveForm.$invalid">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © <span id="year"></span> <a href="javascript:void(0)">Migrant Labours</a>. Migrant
                            Workers
                            Tracking System. Created with <span class="fa fa-heart text-danger"></span> by <a
                                href="javascript:void(0)"> Ashib </a> All
                            rights reserved.</div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->

            <!-- BACK-TO-TOP -->
            <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

            <!-- Angular Validation-->
            {* <script src="User/assets/js/angular.min.js"></script> *}
            

            <script>
                var app = angular.module("myApp", []);
                app.controller(\'cntrl\', function($scope) {

                    $scope.funcSave = function() {
                        if ($scope.SaveForm.$valid) {
                            alert("Form is Valid..!!");
                            // document.getElementById("SaveForm").submit();
                        } else {
                            alert("Form is not Valid..!!");
                        }
                    }

                })
            </script>
            <!-- JQUERY JS -->
            <script src="User/assets/js/jquery.min.js"></script>

            <!-- SELECT2 JS -->
            <script src="User/assets/plugins/select2/select2.full.min.js"></script>
            <script src="User/assets/js/select2.js"></script>
            <!-- BOOTSTRAP JS -->
            <script src="User/assets/plugins/bootstrap/js/popper.min.js"></script>
            <script src="User/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <!-- SPARKLINE JS-->
            <script src="User/assets/js/jquery.sparkline.min.js"></script>

            <!-- Sticky js -->
            <script src="User/assets/js/sticky.js"></script>

            <!-- CHART-CIRCLE JS-->
            <script src="User/assets/js/circle-progress.min.js"></script>

            <!-- PIETY CHART JS-->
            <script src="User/assets/plugins/peitychart/jquery.peity.min.js"></script>
            <script src="User/assets/plugins/peitychart/peitychart.init.js"></script>

            <!-- SIDEBAR JS -->
            <script src="User/assets/plugins/sidebar/sidebar.js"></script>


            <!-- Perfect SCROLLBAR JS-->
            <script src="User/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
            <script src="User/assets/plugins/p-scroll/pscroll.js"></script>
            <script src="User/assets/plugins/p-scroll/pscroll-1.js"></script>

            <!-- INTERNAL CHARTJS CHART JS-->
            <script src="User/assets/plugins/chart/Chart.bundle.js"></script>
            <script src="User/assets/plugins/chart/utils.js"></script>

            <!-- INTERNAL SELECT2 JS -->
            <script src="User/assets/plugins/select2/select2.full.min.js"></script>

            <!-- INTERNAL Data tables js-->
            <script src="User/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="User/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
            <script src="User/assets/plugins/datatable/dataTables.responsive.min.js"></script>

            <!-- INTERNAL APEXCHART JS -->
            <script src="User/assets/js/apexcharts.js"></script>
            <script src="User/assets/plugins/apexchart/irregular-data-series.js"></script>

            <!-- INTERNAL Flot JS -->
            <script src="User/assets/plugins/flot/jquery.flot.js"></script>
            <script src="User/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
            <script src="User/assets/plugins/flot/chart.flot.sampledata.js"></script>
            <script src="User/assets/plugins/flot/dashboard.sampledata.js"></script>

            <!-- INTERNAL Vector js -->
            <script src="User/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
            <script src="User/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

            <!-- SIDE-MENU JS-->
            <script src="User/assets/plugins/sidemenu/sidemenu.js"></script>

            <!-- TypeHead js -->
            <script src="User/assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
            <script src="User/assets/js/typehead.js"></script>

            <!-- INTERNAL INDEX JS -->
            <script src="User/assets/js/index1.js"></script>

            <!-- Color Theme js -->
            <script src="User/assets/js/themeColors.js"></script>

            <!-- CUSTOM JS -->
            <script src="User/assets/js/custom.js"></script>

            <!-- Custom-switcher -->
            <script src="User/assets/js/custom-swicher.js"></script>

            <!-- Switcher js -->
            <script src="User/assets/switcher/js/switcher.js"></script>

            <!-- FILE UPLOADES JS -->
            <script src="User/assets/plugins/fileuploads/js/fileupload.js"></script>
            <script src="User/assets/plugins/fileuploads/js/file-upload.js"></script>

            <!-- INTERNAL File-Uploads Js-->
            <script src="User/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
            <script src="User/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
            <script src="User/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
            <script src="User/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
            <script src="User/assets/plugins/fancyuploder/fancy-uploader.js"></script>

            <!-- DATA TABLE JS-->
            <script src="User/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="User/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
            <script src="User/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
            <script src="User/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
            <script src="User/assets/plugins/datatable/js/jszip.min.js"></script>
            <script src="User/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
            <script src="User/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
            <script src="User/assets/plugins/datatable/js/buttons.html5.min.js"></script>
            <script src="User/assets/plugins/datatable/js/buttons.print.min.js"></script>
            <script src="User/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
            <script src="User/assets/plugins/datatable/dataTables.responsive.min.js"></script>
            <script src="User/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
            <script src="User/assets/js/table-data.js"></script>

            <!-- FORMELEMENTS JS -->
            <script src="User/assets/js/formelementadvnced.js"></script>
            <script src="User/assets/js/form-elements.js"></script>
    </body>

    </html>
'; ?>