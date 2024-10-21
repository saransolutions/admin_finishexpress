<?php
function step3($data)
{
    $service = $data["service"];
    $word = str_replace("_", " ", $service);
    $start_date = $data["start_date"];
    $end_date = $data["end_date"];

?>
    <?php echo step3_head(); ?>

    <body id="page-top">g
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
                        <!-- start card - steps -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <!-- Wizard navigation-->
                                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                                    <!-- Wizard navigation item 1-->
                                    <a class="nav-item nav-link" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-text mt-4">
                                            <div class="wizard-step-text-name">Step <span class="badge badge-light">1 </span></div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 2-->
                                    <a class="nav-item nav-link" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-text mt-4">
                                            <div class="wizard-step-text-name">Step <span class="badge badge-light">2 </span></div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 3-->
                                    <a class="nav-item nav-link active" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-text mt-4">
                                            <div class="wizard-step-text-name">Step <span class="badge badge-light">3 </span></div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 4-->
                                    <a class="nav-item nav-link" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-text mt-4">
                                            <div class="wizard-step-text-name">Step <span class="badge badge-light">4 </span></div>
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 5-->
                                    <a class="nav-item nav-link" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-text mt-4">
                                            <div class="wizard-step-text-name">Step <span class="badge badge-light">5 </span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end card - steps -->


                        <!-- start form + cart -->
                        <div class="row mt-4">
                            <div class="col-sm">
                            </div>
                            <div class="col-sm">
                                <div class="card">
                                    <div class="card-body">
                                        <h1>New <?php echo $word; ?> Project</h1>
                                        
                                            <?php echo step3_form($service, $start_date, $end_date); ?>
                                        
                                        <div id="response_body" class="container-sm"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- start of cart -->
                            <div class="col-sm">
                                <?php echo step3_cart($word, $start_date, $end_date); ?>
                            </div>
                            <!-- end of cart -->
                        </div>
                        <!-- end of form + cart -->
                    </div>
                    <!-- /page content -->
                </div>
                <!-- End of Main Content -->
                <?php echo get_footer(); ?>

                <?php echo reports_form(); ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <?php echo logout_modal() ?>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <?php echo js_scripts() ?>
    </body>
<?php
}

function validate_dates($data)
{
    $start_date = $data["start_date"];
    $end_date = $data["end_date"];

    if ($end_date < $start_date) {
        return '<div class="alert alert-danger" role="alert">
               Error : Invalid date :(
            </div>';
    }
    $diff = strtotime($end_date) - strtotime($start_date);
    $difference = abs(round($diff / 86400));
    if ($difference > 10) {
        return '<div class="alert alert-danger" role="alert">
               Error : Project duration is more than 10 days :(
            </div>';
    } else {
        $service = $data["service"];
        return '
      <div class="row" style="padding-left:35%;">
      <form method="post" action="projects.php" class="form-inline">
         <input type="hidden" name="service" value="' . $service . '"></input>
         <div class="card">
            <div class="card-header">
                  Dates are available
            </div>
            <div class="card-body">
               <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Start Date</strong> ' . $start_date . '</li>
                  <li class="list-group-item"><strong>End Date</strong> ' . $end_date . '</li>
                  <li class="list-group-item"><strong>Number of Days </strong>' . $difference . '</li>
                  <li class="list-group-item"><input type="submit" class="btn btn-primary" name="step2"></input></li>
               </ul>
            </div>
         </div>
      </form>
      </div>';
    }
}

function step3_cart($word, $start_date, $end_date)
{
?>
    <div class="col-md-9 col-lg-6 order-md-last">
        <h4 class="">
            <span class="text-primary">Your cart</span>
            <span class="badge badge-dark bg-primary rounded-pill">1</span>
        </h4>
        <ul class="list-group">
            <li class="list-group-item d-flex">
                <div>
                    <h6 class="my-0">Product name</h6>
                    <small class="text-muted">New <?php echo $word; ?> Project</small>
                </div>
            </li>
            <li class="list-group-item d-flex">
                <div>
                    <h6 class="my-0">Dates</h6>
                    <small class="text-muted"><?php echo $start_date; ?> - <?php echo $end_date; ?></small>
                </div>
            </li>
            <li class="list-group-item d-flex">
                <span>Total </span>
                <strong><?php echo INITIAL_UMZUG_PACKAGE_AMOUNT; ?> CHF</strong>
            </li>
            <li class="list-group-item d-flex">
                <a href="projects.php" class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure?')" name="cancel_project">Cancel</a>
            </li>
        </ul>
    </div>
<?php
}

function step3_form($service, $start_date, $end_date)
{
?>
    <form method="post" action="projects.php">
        <input type="hidden" name="service" value="<?php echo $service; ?>" />
        <input type="hidden" name="start_date" value="<?php echo $start_date; ?>" />
        <input type="hidden" name="end_date" value="<?php echo $end_date; ?>" />
        <div class="container">
            <div class="row mt-1">
                <div class="col-md-6">
                    <label for="building_type">Gebäude *</label>
                    <select class="form-control" id="building_type" name="building_type" required="">
                        <option> </option>
                        <option>Häusern</option>
                        <option>Wohnung</option>
                        <option>Treppen</option>
                        <option>Buro</option>
                    </select>
                    <div class="invalid-feedback">Invalid Building Type *</div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-6">
                    <label for="number_of_rooms">Zimmer *</label>
                    <select class="form-control" id="number_of_rooms" name="number_of_rooms" required="">
                        <option></option>
                        <option>...</option>
                        <option>1.5</option>
                        <option>2</option>
                        <option>2.5</option>
                        <option>3</option>
                        <option>3.5</option>
                        <option>4</option>
                        <option>4.5</option>
                        <option>5</option>
                        <option>5.5</option>
                        <option>5.5 Mehr</option>
                    </select>
                    <div class="invalid-feedback">Invalid Number of Rooms *</div>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-md-6">
                    <label for="floors">Stock *</label>
                    <select class="form-control" id="floor" name="floor" required="">
                        <option></option>
                        <option>...</option>
                        <option>Erdgeschoss</option>
                        <option>1.Stock</option>
                        <option>2.Stock</option>
                        <option>3.Stock</option>
                        <option>4.Stock</option>
                        <option>5.Stock</option>
                        <option>Mehr 5</option>
                    </select>

                    <div class="invalid-feedback">Invalid Floor *</div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-6"><label for="square_meters">Qudarat Meter*</label>
                    <input type="number" step="0.01" class="form-control" id="square_meters" name="square_meters" >
                    <div class="invalid-feedback">Invalid Square meters *</div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-6"><label for="is_elevator">is elevator *</label>
                    <select class="form-control" id="is_elevator" name="is_elevator" required="">
                        <option></option>
                        <option>...</option>
                        <option>Nein</option>
                        <option>Ja</option>
                    </select>
                    <div class="invalid-feedback">Invalid is elevator *</div>
                </div>
            </div>
            <?php if ($service == "Umzug") {
            ?>
                <div class="row mt-1">
                    <div class="col-md-6">
                        <label for="ort_von">Ort Von*</label>
                        <input type="text" class="form-control" id="ort_von" name="ort_von" required="">
                        <div class="invalid-feedback">Invalid Ort *</div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-6"><label for="ort_nach">Ort nach</label>
                        <input type="text" class="form-control" id="ort_nach" name="ort_nach" required="">
                        <div class="invalid-feedback">Invalid Ort *</div>
                    </div>
                </div>
            <?php
            } ?>
            <input type="submit" name="step3" class="btn btn-primary float-right"></input>
        </div>
    </form>
<?php
}


function step3_head()
{
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>FinishExpress - Create New Project</title>
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
<?php
}
?>