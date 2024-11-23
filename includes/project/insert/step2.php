<?php
function create_project_form_step_2($service)
{
   $word = str_replace("_", " ", $service);
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
      <script>
         $(function() {
            $("#end_date").on("change", function() {
               let end_date = $("#end_date").val();
               let start_date = $("#start_date").val();
               let service = $("#service").val();
               let is_repeat = "no"
               is_repeat = $("#is_repeat").val();
               let number_cycles = 0;
               number_cycles = $("#number_cycles").val();
               let price_per_hour = 0;
               price_per_hour = $("#price_per_hour").val();
               var vals = "";
               if (is_repeat == "yes") {
                  if (number_cycles < 1) {
                     alert("invalid number of cycle");
                  }
                  var val = [];
                  $(':checkbox:checked').each(function(i) {
                     val[i] = $(this).val();
                     vals += "_" + val[i];
                  });
               }
               if (start_date == "") {
                  alert("fill start date");
               }
               $.ajax({
                  type: "POST",
                  url: "projects.php",
                  data: {
                     "start_date": start_date,
                     "end_date": end_date,
                     "action": "validate_dates",
                     "service": service,
                     "is_repeat": is_repeat,
                     "number_cycles": number_cycles,
                     "price_per_hour": price_per_hour,
                     "days": vals,

                  },
                  success: function(data) {
                     $("#response_body").html(data);
                  }
               });

            })
         })
      </script>
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

                  <!-- Begin Page Content -->
                  <div class="container-fluid">



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
                           <div class="card border-left-danger border-bottom-danger shadow h-75 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xl font-weight-bold text-danger text-uppercase mb-2">
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
                                       <h6 class="m-0 font-weight-bold text-primary">Diensleitung für <?php echo $word; ?></h6>
                                    </div>
                                    <?php
                                    $service = $_GET["service"];
                                    if ($service == "Unterhalt_Reinigung" or $service == "Gastronomie_Reinigung") { ?>
                                       <!-- repeat -->

                                       <div class="form-group">
                                          <div class="col-md-12 mb-6">
                                             <label for="start_date">Is Repeat *</label>
                                             <select name="is_repeat" id="is_repeat">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                             </select>
                                          </div>
                                       </div>


                                       <!-- end repeat -->
                                       <!-- tage -->


                                       <div class="form-group">
                                          <div class="col-md-12 mb-6">
                                             <label for="end_date">Welche Tage </label><br>
                                             <input type="checkbox" id="days" name="days" value="monday"> Montag </input><br>
                                             <input type="checkbox" id="days" name="days" value="tuesday"> Dienstag </input> <br>
                                             <input type="checkbox" id="days" name="days" value="wednesday"> Mittwoch </input><br>
                                             <input type="checkbox" id="days" name="days" value="thursday"> Donnerstag </input><br>
                                             <input type="checkbox" id="days" name="days" value="friday"> Fritag</input><br>
                                             <input type="checkbox" id="days" name="days" value="saturday"> Samstag </input>
                                             <div class="invalid-feedback">Invalid Execution Date *</div>
                                          </div>
                                       </div>

                                       <!-- end Tage -->
                                       <!-- how many -->
                                       <div class="form-group">
                                          <div class="col-md-12 mb-6">
                                             <label for="end_date">Number of Cycles </label>
                                             <input type="number" min="1" max="400" id="number_cycles" name="number_cycles"> </input>
                                             <div class="invalid-feedback">Invalid Execution Date *</div>
                                          </div>
                                       </div>


                                       <!-- how many -->
                                       <div class="form-group">
                                          <div class="col-md-12 mb-6">
                                             <label for="end_date">Preis pro Stunde : </label>
                                             <input type="number" id="price_per_hour" name="price_per_hour" placeholder="Preis in CHF"> </input>
                                             <div class="invalid-feedback">Invalid Execution Preis *</div>
                                          </div>
                                       </div>
                                       <!-- end how many -->

                                    <?php }
                                    ?>


                                    <!-- when-->
                                    <div class="row">

                                       <input type="hidden" id="service" value="<?php echo $service; ?>"></input>
                                       <div class="col-md-5 mb-3">
                                          <label for="start_date">Von *</label>
                                          <input type="datetime-local" min="<?php echo date("Y-m-d"); ?>" class="form-control" id="start_date" name="start_date" required="">
                                          <div class="invalid-feedback">Invalid Execution Date *</div>
                                       </div>
                                       <div class="col-md-4 mb-3">
                                          <label for="end_date">Bis *</label>
                                          <input type="datetime-local" min="<?php echo date("Y-m-d"); ?>" class="form-control" id="end_date" name="end_date" required="">
                                          <div class="invalid-feedback">Invalid Execution Date *</div>
                                       </div>
                                    </div>

                                    <!-- end how many -->


                                    <div id="response_body" class="container-sm"></div>

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
                                                <h6 class="my-0"><b><?php echo $word; ?></b></h6>
                                             </div>
                                          </li>
                                          <li class="list-group-item d-flex">
                                             <span>Total </span>
                                             <strong><?php echo INITIAL_UMZUG_PACKAGE_AMOUNT; ?> CHF</strong>
                                          </li>
                                          <li class="list-group-item d-flex">
                                             <a href="projects.php" class="btn btn-secondary btn-sm" onclick="return confirm('Sind Sie sicher?')" name="cancel_project">Abrechnen</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>

                     </div>
                     <!-- /.container-fluid -->
                     <!-- end main column -->


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

   $is_repeat = $data["is_repeat"];
   $number_cycles = $data["number_cycles"];
   $days = $data["days"];
   $price_per_hour = $data["price_per_hour"];


   if ($end_date < $start_date) {
      return '<div class="alert alert-danger" role="alert">
               ' . ERR_1_INVALID_DATE . '
            </div>';
   }
   $diff = strtotime($end_date) - strtotime($start_date);
   $diff_hours = abs(round($diff / 3600));
   $difference = abs(round($diff / 86400));
   if ($difference > 10) {
      return '<div class="alert alert-danger" role="alert">
               ' . ERR_2_MORE_THAN_10_DAYS . '
            </div>';
   } else {
      $service = $data["service"];
      $tmp = date('Y-m-d', strtotime($start_date));
      $sql = "SELECT * FROM " . DB_NAME . ".projects where DATE_FORMAT(start_date_time, '%Y-%m-%d') = '" . $tmp . "'";
      $rows = getFetchArray($sql);
      $warning = "";
      if ($rows != null) {
         $warning = '<div class="alert alert-warning" role="alert">
               ' . ERR_3_ALREADY_OCCUPIED . '
            </div>';
      }
      $repeat = "";
      if ($is_repeat == "yes") {
         $total_hours = 0;
         $tracks = explode("_", $days);
         $tc = 0;

         $days_list = "";
         foreach ($tracks as $track) {
            if (strlen($track) > 0) {
               if ($tc > 0) {
                  $date = new DateTime($start_date);
                  $date->modify('next ' . $track);
                  $tmp = $date->format('Y-m-d');
               }
               $j = 7;
               $days_list .= '<li class="list-group-item">' . ucwords($track) . ' Slots</li>';
               $days_list .= '<li class="list-group-item"><input class="form-check-input" type="checkbox" name="tc_' . $tc . '_slot_0" value="' . $tmp . '" checked>' . $tmp . '</li>';
               $total_hours += $diff_hours;
               for ($i = 1; $i < $number_cycles; $i++) {
                  $sql = "SELECT '" . $tmp . "' + INTERVAL " . $j . " DAY";
                  $value = getSingleValue($sql);
                  $value = date('Y-m-d', strtotime($value));
                  $days_list .= '<li class="list-group-item"><input class="form-check-input" type="checkbox" name="tc_' . $tc . '_slot_' . $i . '" value="' . $value . '" checked>' . $value  . '</li>';
                  $j += 7;
                  $total_hours += $diff_hours;
               }
               $tc += 1;
            }
         }
         $repeat = '
         <input type="hidden" name="number_cycles" value="' . $number_cycles . '"></input>
         <input type="hidden" name="days" value="' . $days . '"></input>
         <input type="hidden" name="price_per_hour" value="' . $price_per_hour . '"></input>
         <input type="hidden" name="number_tracks" value="' . $tc . '"></input>
         <input type="hidden" name="diff_hours" value="' . $diff_hours . '"></input>
         <li class="list-group-item"><strong>Is Repeat ? </strong>' . $is_repeat . '</li>
            <li class="list-group-item"><strong>Number of Cycles </strong>' . $number_cycles . '</li>
            <li class="list-group-item"><strong>Days </strong>' . str_replace("_", " ", $days) .
            '</li>' . $days_list . '<li class="list-group-item"><strong>Total Hours </strong>' . $total_hours . '</li>
            <li class="list-group-item"><strong>Preis pro Stunde </strong>' . $price_per_hour . '</li>';
      }

      return $warning . '
            <div class="row" style="padding-left:35%;">
               <form method="post" action="projects.php" class="form-inline">
                  <input type="hidden" name="service" value="' . $service . '"></input>
                  <input type="hidden" name="start_date" value="' . $start_date . '"></input>
                  <input type="hidden" name="end_date" value="' . $end_date . '"></input>
                  <input type="hidden" name="is_repeat" value="' . $is_repeat . '"></input>
                  <div class="card">
                     <div class="card-header">
                           Dates are available
                     </div>
                     <div class="card-body">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item"><strong>Start Date</strong> ' . $start_date . '</li>
                           <li class="list-group-item"><strong>End Date</strong> ' . $end_date . '</li>
                           <li class="list-group-item"><strong>Number of Hours </strong>' . $diff_hours . '</li>
                           ' . $repeat . '
                           <li class="list-group-item"><input type="submit" class="btn btn-primary" name="step2"></input></li>
                        </ul>
                     </div>
                  </div>
               </form>
            </div>';
   }
}

?>