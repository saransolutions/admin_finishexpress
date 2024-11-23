<?php

function get_head()
{
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo MAIN_TITLE; ?> - Project</title>
        
        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#pay_button,#edit_button,#remove_button,#export_button,#invoice_button,#add_photo_button").click(function() {
                    var count = $("input:checkbox:checked").length
                    if (count == 0) {
                        alert("select at least \"one\" checkbox")
                        return false
                    } else if (count > 1) {
                        alert("Not select more than \"one\" checkbox")
                        return false
                    } else {
                        var value = $("input:checkbox:checked").val();
                        var button_name = $(this).attr("name")
                        if (button_name == "export") {
                            var win = window.open("projects.php?export_id=" + value + "", "_blank");
                            if (win) {
                                win.focus();
                            } else {
                                alert("Please allow popups for this website");
                            }
                        }
                        if (button_name == "invoice") {
                            $.ajax({
                                type: "GET",
                                url: "projects.php",
                                data: {
                                    "get_invoice_lang": value
                                },
                                success: function(data) {
                                    $("#invoice_body").html(data);
                                }
                            });
                        }

                        if (button_name == "edit") {
                            $.ajax({
                                type: "GET",
                                url: "projects.php",
                                data: {
                                    "edit_id": value
                                },
                                success: function(data) {
                                    $("#edit_body").html(data);
                                }
                            });
                        }
                        if (button_name == "pay") {
                            $.ajax({
                                type: "GET",
                                url: "projects.php",
                                data: {
                                    "pay_id": value
                                },
                                success: function(data) {
                                    $("#pay_body").html(data);
                                }
                            });
                        }
                        if (button_name == "add_photo") {
                            $.ajax({
                                type: "GET",
                                url: "projects.php",
                                data: {
                                    "add_photo_id": value
                                },
                                success: function(data) {
                                    $("#add_photo_body").html(data);
                                }
                            });
                        }
                        if (button_name == "remove") {
                            $.ajax({
                                type: "GET",
                                url: "projects.php",
                                data: {
                                    "remove_id": value
                                },
                                success: function(data) {
                                    $("#remove_body").html(data);
                                }
                            });
                        }
                    }
                });
            });
        </script>

    </head>
<?php
}

function sidebar()
{
?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <img src="img/logo.png" alt="test" style="width:100%;background-color:#fff2e6"></img>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->

        <!-- Divider -->
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="projects.php">
                <i class="fas fa-fw fa-folder"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="projects.php?add_new">
                <i class="fas fa-fw fa-folder"></i>
                <span>Neues Projekt</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="projects.php?gallery">
                <i class="fas fa-fw fa-folder"></i>
                <span>Gallery</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="projects.php?calendar">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Calendar</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" target="_blank" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-table"></i>
                <span>Berichte</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="projects.php?mreport_form">Monat-Berichte</a>
                    <a class="collapse-item" href="projects.php?yreport_form">Jahr-Berichte</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item letter-pad-->
        <li class="nav-item">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                <i class="fas fa-fw fa-chart-area"></i>letter_pad</button>

            <div class="container">

                <!-- Trigger the modal with a button -->


                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                                <form class="" action="projects.php?letter_pad" method="POST">
                                    <div class="form-floating mb-3">
                                        <label for="text">Subject</label>
                                        <input type="text" class="form-control rounded-3" id="name" name="subject" placeholder="Subject">

                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="text">Name</label>
                                        <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="Full Name">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Nachricht</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                                    </div>



                                    <br><button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" name="contact_us" type="submit">Senden</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Schliessen</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </li>

        <!-- Nav Item - Pages Collapse Menu -->


    </ul>
    <!-- End of Sidebar -->
<?php
}

function top_bar()
{
?>
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
        </form>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->

            </li>

            <!-- Nav Item - Alerts -->


            <!-- Nav Item - Messages -->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Abmelden
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
<?php
}

function get_footer()
{
    return '
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; ' . MAIN_TITLE . ' 2024</span><br>
                <span>Designed by <a href="https://saransolutions.ch/">Saran Solutions</a></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    ';
}

function logout_modal()
{
    return '
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
    ';
}

?>