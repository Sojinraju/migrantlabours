<?php /* Smarty version 2.6.26, created on 2023-05-15 07:38:46
         compiled from footer.tpl */ ?>
    <?php echo '
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

        <!-- Angular Validation-->
        <script src="User/assets/js/angular.min.js"></script>
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

        <!-- FORMELEMENTS JS -->
        <script src="User/assets/js/formelementadvnced.js"></script>
        <script src="User/assets/js/form-elements.js"></script>

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

        </body>

        </html>
'; ?>