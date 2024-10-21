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
      <script>
         $(function() {
            $("#end_date").on("change", function() {
               let end_date = $("#end_date").val();
               let start_date = $("#start_date").val();
               let service = $("#service").val();
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
                     "service": service
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
                           <a class="nav-item nav-link active" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                              <div class="wizard-step-text mt-4">
                                 <div class="wizard-step-text-name">Step <span class="badge badge-light">2 </span></div>
                              </div>
                           </a>
                           <!-- Wizard navigation item 3-->
                           <a class="nav-item nav-link" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
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
                  <div class="row" style="padding:10px;">
                     <div class="col-md-12 col-lg-9">
                        <div class="card text-center">
                           <div class="card-body">
                              <h1>New <?php echo $word; ?> Project</h1>
                              <h3 style="padding:10px;">Select Date</h3>
                              <div class="row" style="padding-left:25%;">
                                 <input type="hidden" id="service" value="<?php echo $service; ?>"></input>

                                 <div class="form-group">
                                    <div class="col-md-12 mb-6">
                                       <label for="start_date">Von *</label>
                                       <input type="datetime-local" min="<?php echo date("Y-m-d"); ?>" class="form-control" id="start_date" name="start_date" required="">
                                       <div class="invalid-feedback">Invalid Execution Date *</div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-12 mb-6">
                                       <label for="end_date">Bis *</label>
                                       <input type="datetime-local" min="<?php echo date("Y-m-d"); ?>" class="form-control" id="end_date" name="end_date" required="">
                                       <div class="invalid-feedback">Invalid Execution Date *</div>
                                    </div>
                                 </div>
                              </div>
                              <div id="response_body" class="container-sm"></div>
                           </div>
                        </div>
                     </div>

                     <!-- start of cart -->
                     <div class="col-sm">
                        <div class="col-md-12 col-lg-9 order-md-last">
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
                                 <span>Total </span>
                                 <strong><?php echo INITIAL_UMZUG_PACKAGE_AMOUNT; ?> CHF</strong>
                              </li>
                              <li class="list-group-item d-flex">
                                 <a href="projects.php" class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure?')" name="cancel_project">Cancel</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- end of cart -->
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
               ' . ERR_1_INVALID_DATE . '
            </div>';
   }
   $diff = strtotime($end_date) - strtotime($start_date);
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
      return $warning . ' 
            <div class="row" style="padding-left:35%;">
               <form method="post" action="projects.php" class="form-inline">
                  <input type="hidden" name="service" value="' . $service . '"></input>
                  <input type="hidden" name="start_date" value="' . $start_date . '"></input>
                  <input type="hidden" name="end_date" value="' . $end_date . '"></input>
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

?>