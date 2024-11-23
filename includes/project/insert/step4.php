<?php
function step4($data)
{
    $service = $data["service"];
    $word = str_replace("_", " ", $service);
?>
    <?php echo step4_head(); ?>

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
                        <!-- start card - steps -->
                        <div class="container-fluid">

                  
<!-- step start -->
<div class="row">

   <!-- step 1 -->
   <div class="col-lg-2 col-md-6 mb-4">
     <div class="card border-left-Info shadow h-75 py-2">
         <div class="card-body">
             <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-Info text-uppercase mb-1">
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
     <div class="card border-left-danger border-bottom-danger shadow h-75 py-2">
         <div class="card-body">
             <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-danger text-uppercase mb-2">
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
                        <!-- end card - steps -->
        <!-- Content Row -->
<div class="row">

<div class="col-xl-8 col-lg-7">

    <!-- Area Chart -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Gebäude-Info</h6>
            <?php echo step4_form($data); ?>
             <div id="response_body" class="container-sm"></div>
        </div>
        
    </div>

</div>

<!-- Added Service -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-2">
            <h6 class="m-0 font-weight-bold text-primary">Diensleitung-info</h6>
        </div>
        <div class="row mt-4">
        <div class="col-lg">
        <?php echo step4_cart($data); ?>
                        </div>
                        </div>
        <!-- Card Body -->
       
    </div>
</div>
</div>

</div>

</div>
<!-- /.container-fluid -->
                        <!-- start of form + cart -->
                        
                        <!-- end of form + cart -->
                    </div>
                    <!-- /page-content -->
                </div>
                </div>
                <!-- End of Main Content -->
                <!-- <?php echo get_footer(); ?> -->

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



function step4_cart(
    $data
) {
    $service = $data["service"];
    $word = str_replace("_", " ", $service);
    $start_date = $data["start_date"];
    $end_date = $data["end_date"];

    $building_type = $data["building_type"];
    $number_of_rooms = $data["number_of_rooms"];
    $floor = $data["floor"];
    $square_meters = $data["square_meters"];
    $is_elevator = $data["is_elevator"];
    $ort_von = "";
    if (isset($data["ort_von"])) {
        $ort_von = $data["ort_von"];
    }

    $ort_nach = "";
    if (isset($data["ort_nach"])) {
        $ort_nach = $data["ort_nach"];
    }
    $is_repeat = $data["is_repeat"];
    if ($is_repeat == "yes"){
        list($result, $dates, $total_hours, $number_cycles, $days,$price_per_hour) = set_repeat($data);
    }
?>
     <div class="card-body">
        
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
                <div>
                    <h6 class="my-0">Platz</h6>
                    <small class="text-muted"><?php echo $building_type . " (" . $number_of_rooms . " zimmer) (" . $floor . ")- " . $square_meters . " m2"; ?></small>
                </div>
            </li>
            <?php
            if ($word == "Umzug") {
            ?>
                <li class="list-group-item d-flex">
                    <div>
                        <h6 class="my-0">Umzug</h6>
                        <small class="text-muted"><?php echo $ort_von . " - " . $ort_nach; ?></small>
                    </div>
                </li>
            <?php
            }
            ?>
            <li class="list-group-item d-flex">
                <div>
                    <h6 class="my-0">Is Repeat?</h6>
                    <small class="text-muted"><?php echo $is_repeat; ?></small>
                    <?php if ($is_repeat == "yes"){
                        echo get_repeat($number_cycles, $days, $dates, $total_hours,$price_per_hour);
                    }?>
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

function step4_form(
    $data
) {
    $service = $data["service"];
    $start_date = $data["start_date"];
    $end_date = $data["end_date"];

    $building_type = $data["building_type"];
    $number_of_rooms = $data["number_of_rooms"];
    $floor = $data["floor"];
    $square_meters = $data["square_meters"];
    $is_elevator = $data["is_elevator"];
    $ort_von = "";
    $is_repeat = $data["is_repeat"];
    if (isset($data["ort_von"])) {
        $ort_von = $data["ort_von"];
    }

    $ort_nach = "";
    if (isset($data["ort_nach"])) {
        $ort_nach = $data["ort_nach"];
    }
    $is_repeat = $data["is_repeat"];
    if ($is_repeat == "yes"){
        list($result, $dates, $total_hours, $number_cycles, $days, $price_per_hour) = set_repeat($data);
    }
?>
    <form method="post" action="projects.php">
        <input type="hidden" name="service" value="<?php echo $service; ?>" />
        <input type="hidden" name="start_date" value="<?php echo $start_date; ?>" />
        <input type="hidden" name="end_date" value="<?php echo $end_date; ?>" />

        <input type="hidden" name="building_type" value="<?php echo $building_type; ?>" />
        <input type="hidden" name="number_of_rooms" value="<?php echo $number_of_rooms; ?>" />
        <input type="hidden" name="floor" value="<?php echo $floor; ?>" />
        <input type="hidden" name="square_meters" value="<?php echo $square_meters; ?>" />
        <input type="hidden" name="is_elevator" value="<?php echo $is_elevator; ?>" />
        <input type="hidden" name="ort_von" value="<?php echo $ort_von; ?>" />
        <input type="hidden" name="ort_nach" value="<?php echo $ort_nach; ?>" />
        <input type="hidden" name="is_repeat" value="<?php echo $is_repeat; ?>" />
        <?php
            if ($is_repeat == "yes"){
                echo $result;
            }
        ?>
        <div class="container-sm">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="prefix">Präfix *</label>
                    <select class="form-control" id="prefix" name="prefix" required="">
                    <option >...</option>
                        <option>Herr</option>
                        <option>Frau</option>
                    </select>
                    <div class="invalid-feedback">Invalid Prefix *</div>
                </div>
                <div class="col-md-5 mb-3"><label for="first_name">Name *</label><input type="text" class="form-control" id="first_name" name="first_name" required="">
                    <div class="invalid-feedback">Invalid First Name *</div>
                </div>
                <div class="col-md-4 mb-3"><label for="last_name">Vorname *</label><input type="text" class="form-control" id="last_name" name="last_name" required="">
                    <div class="invalid-feedback">Invalid Last Name *</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3"><label for="address">Addresse *</label><input type="text" class="form-control" id="address" name="address" required="">
                    <div class="invalid-feedback">Invalid Address *</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3"><label for="mobile">Handy*</label><input type="text" class="form-control" id="mobile" name="mobile" required="">
                    <div class="invalid-feedback">Invalid Mobile *</div>
                </div>
            </div>

            <?php
            if ($service == "Umzug") {
            ?>
                <div class="row">
                    <div class="col-md-4 mb-3"><label for="ort">Ort *</label><input type="text" class="form-control" id="ort" name="ort" readonly value="<?php echo $ort_von; ?>">
                        <div class="invalid-feedback">Invalid Ort *</div>
                    </div>
                </div>
            <?php } else {
            ?>
                <div class="row">
                    <div class="col-md-4 mb-3"><label for="ort">Ort *</label><input type="text" class="form-control" id="ort" name="ort" required="">
                        <div class="invalid-feedback">Invalid Ort *</div>
                    </div>
                </div>
            <?php
            }

            ?>
            <div class="row">
                <div class="col-md-4 mb-3"><label for="pin_code">PLZ *</label><input type="text" class="form-control" id="pin_code" name="pin_code" required="">
                    <div class="invalid-feedback">Invalid Pin Code *</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3"><label for="email">Email</label><input type="text" class="form-control" id="email" name="email">
                    <div class="invalid-feedback">Invalid Email</div>
                </div>
            </div>
            <input type="submit" name="step4" class="btn btn-primary float-right"></input>
        </div>
    </form>
<?php
}


function step4_head()
{
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo MAIN_TITLE ?> - Create New Project</title>
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