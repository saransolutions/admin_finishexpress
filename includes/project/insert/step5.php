<?php
function step5($data)
{
    $service = $data["service"];
    $word = str_replace("_", " ", $service);   

?>
    <?php echo step5_head(); ?>

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
     <div class="card border-left-danger border-bottom-danger shadow h-75 py-2">
         <div class="card-body">
             <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-danger text-uppercase mb-2">
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
                <?php echo step5_form($data); ?>
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
            <div class="col-sm">
                                <!-- cart -->
                                <?php echo step5_cart($data); ?>
                                <!-- cart -->
                            </div>
           
        </div>
    </div>
</div>

</div>

</div>
<!-- /.container-fluid -->

                        <!-- main content -->
                    </div>
                    <!-- /.container-fluid -->
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

function step5_cart($data) {
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


    $prefix = $data["prefix"];
    $first_name = $data["first_name"];
    $last_name = $data["last_name"];
    $address = $data["address"];
    $ort = $data["ort"];
    $pin_code = $data["pin_code"];
    $mobile = $data["mobile"];
    $email = $data["email"];

    $is_repeat = $data["is_repeat"];
    if ($is_repeat == "yes"){
        list($result, $dates, $total_hours, $number_cycles, $days,$price_per_hour) = set_repeat($data);
    }
?>
     <div class="card-body"></div>
        <h4 class="">
            <span class="text-primary">Your cart</span>
            <span class="badge badge-dark bg-primary rounded-pill">1</span>
        </h4>
        <ul class="list-group">
            <li class="list-group-item d-flex">
                <div>
                    <h6 class="my-0"> <?php echo $word; ?></h6>
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
                    <h6 class="my-0">Kunden</h6>
                    <small class="text-muted"><?php echo $first_name . " " . $last_name; ?></small>
                    <small class="text-muted"><?php echo $address . ", " . $ort . " " . $pin_code; ?></small>
                    <small class="text-muted"><?php echo $mobile ?></small>
                    <small class="text-muted"><?php echo $email; ?></small>
                </div>
            </li>
            <?php echo get_repeat_single("Is Repeat?", $is_repeat);?>
            <?php if ($is_repeat == "yes"){
                echo get_repeat($number_cycles, $days, $dates, $total_hours,$price_per_hour);
            }?>
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

function step5_form($data) {
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


    $prefix = $data["prefix"];
    $first_name = $data["first_name"];
    $last_name = $data["last_name"];
    $address = $data["address"];
    $ort = $data["ort"];
    $pin_code = $data["pin_code"];
    $mobile = $data["mobile"];
    $email = $data["email"];
    $is_repeat = $data["is_repeat"];
    if ($is_repeat == "yes"){
        list($result, $dates, $total_hours, $number_cycles, $days,$price_per_hour) = set_repeat($data);
    }
?>
    <form method="post" action="projects.php">
        <input type="hidden" name="type_of_service" value="<?php echo $word; ?>" />
        <input type="hidden" name="start_date" value="<?php echo $start_date; ?>" />
        <input type="hidden" name="end_date" value="<?php echo $end_date; ?>" />

        <input type="hidden" name="building_type" value="<?php echo $building_type; ?>" />
        <input type="hidden" name="number_of_rooms" value="<?php echo $number_of_rooms; ?>" />
        <input type="hidden" name="floor" value="<?php echo $floor; ?>" />
        <input type="hidden" name="square_meters" value="<?php echo $square_meters; ?>" />
        <input type="hidden" name="is_elevator" value="<?php echo $is_elevator; ?>" />
        <input type="hidden" name="ort_von" value="<?php echo $ort_von; ?>" />
        <input type="hidden" name="ort_nach" value="<?php echo $ort_nach; ?>" />

        <input type="hidden" name="prefix" value="<?php echo $prefix; ?>" />
        <input type="hidden" name="first_name" value="<?php echo $first_name; ?>" />
        <input type="hidden" name="last_name" value="<?php echo $last_name; ?>" />
        <input type="hidden" name="address" value="<?php echo $address; ?>" />
        <input type="hidden" name="ort" value="<?php echo $ort; ?>" />
        <input type="hidden" name="pin_code" value="<?php echo $pin_code; ?>" />
        <input type="hidden" name="mobile" value="<?php echo $mobile; ?>" />
        <input type="hidden" name="email" value="<?php echo $email; ?>" />
        <?php
         $total_amount=0;
            if ($is_repeat == "yes"){
                echo $result;
               $total_amount=$total_hours*$price_per_hour;

            }
        ?>

        <div class="container-sm">
        <?php
        if ($is_repeat == "yes"){?>
            <div class="row">
                <div class="col-md-6 mb-3"><label for="total_hours">Total Hours *</label>
                <input type="text" class="form-control" value="<?php echo $total_hours; ?>" readonly>
                    <div class="invalid-feedback">Invalid Total</div>
                </div>
                <div class="col-md-6 mb-3"><label for="price_per_hour">Price per Hour *</label>
                    <input type="text" class="form-control" value="<?php echo $price_per_hour; ?>" readonly>
                    <div class="invalid-feedback">Invalid Advance</div>
                </div>
            </div>
        <?php } ?>

            <div class="row">
                <div class="col-md-6 mb-3"><label for="total_price">Gesamtpreis *</label>
                <input type="text" class="form-control" id="total_price" name="total_price" value="<?php echo $total_amount; ?>" required="">
                    <div class="invalid-feedback">Invalid Total</div>
                </div>

                <div class="col-md-6 mb-3"><label for="advance_amount">Vorschuss-Betrag *</label><input type="text" class="form-control" id="advance_amount" name="advance_amount" required="">
                    <div class="invalid-feedback">Invalid Advance</div>
                </div>
            </div>

            <div class="form-group">
                <label for="comments1">Bemerkungen 1</label>
                <textarea class="form-control" id="comments1" name="comments_1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="comments1">Bemerkungen 2</label>
                <textarea class="form-control" id="comments2" name="comments_2" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="comments1">Bemerkungen 3</label>
                <textarea class="form-control" id="comments3" name="comments_3" rows="3"></textarea>
            </div>
            <input type="submit" name="step5" class="btn btn-primary"></input>
        </div>
    </form>
<?php
}


function step5_head()
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
<?php
}

function insert_project($data)
{

    $type_of_service = $data["type_of_service"];
    $building_type = $data["building_type"];
    $floor = $data["floor"];
    $number_of_rooms = $data["number_of_rooms"];
    $square_meters = $data["square_meters"];
    $is_elevator = $data["is_elevator"];

    $start_date = $data["start_date"];
    $end_date = $data["end_date"];

    $prefix = $data["prefix"];
    $first_name = $data["first_name"];
    $last_name = $data["last_name"];
    $address = $data["address"];
    $ort = $data["ort"];
    $pin_code = $data["pin_code"];
    $mobile = $data["mobile"];
    $email = $data["email"];

    $total_price = $data["total_price"];
    $advance_amount = $data["advance_amount"];
    $balance = ($total_price - $advance_amount);

    $comments_1 = $data["comments_1"];
    $comments_2 = $data["comments_2"];
    $comments_3 = $data["comments_3"];

    $ort_nach = "";
    if (isset($data["ort_nach"])) {
        $ort_nach = $data["ort_nach"];
    }


    $sql = "INSERT INTO " . DB_NAME . ".projects
    (id, created_date, type_of_service, building_type, floor, number_of_rooms, square_meters, is_elevator, prefix, first_name, last_name, address, ort, pin_code, mobile, email, start_date_time, end_date_time, total_price, advance_amount, balance, comments_1, comments_2, comments_3, ort_nach)
    VALUES (Null, CURRENT_TIMESTAMP, '" . $type_of_service . "','" . $building_type . "','" . $floor . "','" . $number_of_rooms . "','" . $square_meters . "','" . $is_elevator . "', '" . $prefix . "' ,'" . $first_name . "','" . $last_name . "','" . $address . "','" . $ort . "','" . $pin_code . "','" . $mobile . "','" . $email . "', '" . $start_date . "', '" . $end_date . "', " . $total_price . "," . $advance_amount . ", " . $balance . ", '" . $comments_1 . "','" . $comments_2 . "', '" . $comments_3 . "', '" . $ort_nach . "' )";
    executeSQL($sql);
    $id = getSingleValue("select max(id) from " . DB_NAME . ".projects");
    $is_repeat = $data["is_repeat"];

    if ($is_repeat == "yes"){
        $number_tracks = $data["number_tracks"];
        $diff_hours = $data["diff_hours"];
        $total_hours = $data["total_hours"]; 
        $number_cycles = $data["number_cycles"]; 
        $price_per_hour = $data["price_per_hour"]; 
        $days = $data["days"];

        $date = new DateTime($start_date);
        $start_time = $date->format('H:i:s');

        $date = new DateTime($end_date);
        $end_time = $date->format('H:i:s');
        
        $insert_repeat_tasks = "INSERT INTO " . DB_NAME . ".repeat_tasks (id, parent_id, number_cycles, number_tracks, days, diff_hours, total_hours,price_per_hour) 
        VALUES (NULL, '".$id."', '".$number_cycles."', '".$number_tracks."', '".$days."', '".$diff_hours."', '".$total_hours."','".$price_per_hour."')";
        executeSQL($insert_repeat_tasks);
        $task_id = getSingleValue("select max(id) from " . DB_NAME . ".repeat_tasks");
        for ($i=0;$i<$number_tracks;$i++){
            for ($j=0;$j<$number_cycles;$j++){
                if(isset($data["tc_".$i."_slot_".$j])){
                    $insert_dates = "INSERT INTO " . DB_NAME . ".repeat_dates (id, parent_id, start_date_time, end_date_time) 
                    VALUES (NULL, '".$task_id."', '".$data["tc_".$i."_slot_".$j]." ".$start_time."', '".$data["tc_".$i."_slot_".$j]." ".$end_time."')";
                    executeSQL($insert_dates);
                }
            }
        }
    }
    return $id;
}

?>