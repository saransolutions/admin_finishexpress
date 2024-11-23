<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo MAIN_TITLE; ?> - Project</title>
    <link href="css/fullcalendar.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/lightbox2/dist/css/lightbox.min.css">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php sidebar(); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <?php top_bar(); ?>
                <!-- Topbar -->
                <!-- End of Topbar -->
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">
                        <!-- First Column -->
                        
                        <!-- Second Column -->
                        <div class="col-lg-12">
                            <!-- Background Gradient Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary text-center">
                                        Calendar
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <!-- main table -->
                                    <!-- calendar -->
                                    <div class="container">
                                        <div class="clearfix"></div>
                                        <div class="box" style="padding-top:2%;">
                                            <div class="content">
                                                <div id="my-calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of main table -->
                                </div>
                            </div>
                            <!-- album -->
                            <!-- album -->
                        </div>
                        
                    </div>
                    <!-- end of row-->
                </div>
                <!-- /.container-fluid -->
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <?php echo MAIN_TITLE; ?> 2024</span><br>
                        <span>Designed by <a href="https://saransolutions.ch/">Saran Solutions</a></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <!-- End of Footer -->


            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php?logoff">Abmelden</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Logout Modal-->


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="vendor/lightbox2/dist/js/lightäbox-plus-jquery.min.js"></script>

    <script src="js/fullcalendar.js"></script>
    <script src="js/jquery.calendar.js"></script>
    <!-- call calendar plugin -->
    <script type="text/javascript">
        $().FullCalendarExt({
            version: 'php'
        });
    </script>
</body>

</html>