<?php

function create_project_form_step_1()
{
?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo MAIN_TITLE;?> - Create New Project</title>
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

  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <?php echo sidebar(); ?>
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
          <?php echo top_bar(); ?>
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <!-- Default Action buttons -->
            <div class="d-flex justify-content-between">
              <div>
                <!--free left space-->
              </div>
            </div>
            <!-- End Action buttons -->
            <div class="container-fluid">

                  
   <!-- step start -->
<div class="row">

      <!-- step 1 -->
      <div class="col-lg-2 col-md-6 mb-4">
        <div class="card border-left-danger border-bottom-danger shadow h-75 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-danger text-uppercase mb-1">
                            Step 1</div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

         <!-- step 2 -->
    <div class="col-lg-2 col-md-6 mb-4">
        <div class="card border-left-Info shadow h-75 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-Info text-uppercase mb-2">
                            Step 2</div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- step 3 -->
    <div class="col-lg-2 col-md-6 mb-4">
        <div class="card border-left-Info shadow h-75 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-Info text-uppercase mb-2">
                            Step 3</div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- step 4 -->
    <div class="col-lg-2 col-md-6 mb-4">
        <div class="card border-left-Info shadow h-75 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-Info text-uppercase mb-2">
                            Step 4</div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Step 5 -->
    <div class="col-lg-2 col-md-6 mb-4">
        <div class="card border-left-Info shadow h-75 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-Info text-uppercase mb-2">
                            Step 5</div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
<div class="container-fluid">

<!-- Page Heading -->


<!-- Content Row -->
<div class="row">

    <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Wählen Sie ihre Diensleitung</h6>
            </div>
            <div class="card-body">
            <div class="dropdown" >
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Service auswählen
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="projects.php?service=Unterhalt_Reinigung">Unterhalt Reinigung</a>
                      <a class="dropdown-item" href="projects.php?service=Gastronomie_Reinigung">Gastronomie Reinigung</a>
                        <a class="dropdown-item" href="projects.php?service=Häusern_Reinigung">Häusern Reinigung</a>
                        <a class="dropdown-item" href="projects.php?service=Wohnung_Reinigung">Wohnung Reinigung</a>
                        <a class="dropdown-item" href="projects.php?service=Treppen_Reinigung">Treppen Reinigung</a>
                        <a class="dropdown-item" href="projects.php?service=Buro_Reinigung">Buro Reinigung</a>
                        <a class="dropdown-item" href="projects.php?service=Fenster_Reinigung">Fenster Reinigung</a>
                        <a class="dropdown-item" href="projects.php?service=Umzug">Umzug</a>
                        <a class="dropdown-item" href="projects.php?service=Umzug_bei_Reinigung">Umzug bei Reinigung</a>
                      </div>
                      </div>      
                
            </div>
        </div>

    </div>

    <!-- Added Service -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Diensleitung-info</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <ul class="list-group">
                    <li class="list-group-item d-flex">
                      <div>
                        <h6 class="my-0"></h6>
                        <small class="text-muted">Neu Projekt</small>
                      </div>
                    </li>
                    <li class="list-group-item d-flex">
                      <span>Preis </span>
                      <strong> 0 CHF</strong>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
</div>

</div>

</div>
<!-- /.container-fluid -->

 

           
            </div>
            <!-- end of form + cart -->
          </div>
          <!-- End of Page Content -->
        </div>
        <!-- End of Main Content -->
        <?php echo get_footer(); ?>
        <?php echo reports_form(); ?>
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <?php echo logout_modal() ?>
    <!-- Logout Modal-->
    <!-- call js scripts -->
    <?php echo js_scripts() ?>
    <!-- call js scripts -->
  </body>
<?php
}

?>