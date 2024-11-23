<?php

function run_report($input, $type){
    $part1 = '
  

    <!-- Page Heading -->
     <!-- DataTales Example -->
       
        <div class="card-body">
        <div class="table-responsive">
  <table class="table table-bordered" id="dataTable"  cellspacing="0">
  <thead>
  <tr>
  <th>S.No</th>
  <th>Name</th>
  <th>Mobile</th>
  <th>Diensleitung</th>
  <th>Gebäude</th>
  <th>Stock</th>
  <th>Datum</th>
  <th>Preis</th>
  <th>Status</th>
      
  </tr>
</thead>
<tbody>
';
$sql = 'SELECT * FROM '.DB_NAME.'.projects WHERE';
if ($type == "year"){
    $sql .= " date_format(start_date_time, '%Y') = ".$input;
}
elseif ($type == "month" ){
    $sql .= " date_format(start_date_time, '%Y-%m') = '".$input."'";
}else{
    $sql .= " start_date_time = '".$input."'";
}

$rows = getFetchArray($sql);
if($rows == null){
    return;
}
$data = '';
$count = 1;
foreach ($rows as $result) {
    $id = $result['id'];
    $status = "Requested";
    $id = $result['id'];
    $name = $result['first_name'] . ' ' . $result['last_name'];
    $type_of_service = $result["type_of_service"];
    $building_type = $result["building_type"];
    $floor = $result["floor"];
    $number_of_rooms = $result["number_of_rooms"];
    $square_meters = $result["square_meters"];
    $is_elevator = $result["is_elevator"];
    $start_date_time = $result["start_date_time"];

    $first_name = $result["first_name"];
    $last_name = $result["last_name"];
    $address = $result["address"];
    $ort = $result["ort"];
    $pin_code = $result["pin_code"];
    $mobile = $result["mobile"];
    $email = $result["email"];

    $total_price = $result["total_price"];
    $advance_amount = $result["advance_amount"];
    $balance = $result["balance"];
    
    $data = $data . '<tr>
        <td class="w-auto p-1">'.$count.'</td>
        <td><a href="projects.php?pid=' . $id . '">' . $name . '</a></td>
        <td>' . $mobile . '</td>
        <td>' . $type_of_service . '</td>
        <td>' . $building_type . '</td>
        <td>' . $floor . '</td>
        <td>' . $start_date_time . '</td>
        <td>' . $total_price . '</td>
        <td>' . get_status($total_price, $advance_amount, $balance) . '</td>
    </tr>';
    $count = $count + 1;

}
$part3 = '

</tbody>


  </table>
      
</div>
</div>
';
return $part1 . $data . $part3;
}  
 
function report_form($data, $value, $type)
{
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo MAIN_TITLE;?> - Reports</title>
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

<!-- Content Row -->
<div class="row">

    <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Berichte</h6>
            </div>
            <div class="card-body">
                
            <form action="projects.php" method="POST">
            <?php if($type=="month"){
                                               
                                            
                                               echo '  <div class="card-body">

                                                     <div class="form-group">
                                                    <label for="month">Select Month</label>
                                                    <input type="hidden" name="type" value="month">
                                                     <input type="month" value="'.$value.'" class="form-control" id="input_value" name="input_value" aria-describedby="monthHelp" placeholder="Select Month">
                                                     </div>
                                                     </div>

                                    <div class="card-body">
                                    <div class="form-group">
                                    <div class="col-md-12 mb-6">
                                       <label for="start_date">Für Buchhaltung *</label>
                                       <select name="buchhaltung" id="buchhaltung">
                                          <option value="no">No</option>
                                          <option value="yes">Yes</option>
                                       </select>
                                    </div>
                                 </div>  
                                   
                
            </div>
            ';
        }else{
            echo ' 
            <div class="card-body">

                                                     <div class="form-group">
                                                     <label for="month">Select Year</label>
                                                     <input type="hidden" name="type" value="year">
                                                     <select class="form-select form-select-lg mb-3" name="input_value">
                                                         <option value="2024" selected>2024</option>
                                                         <option value="2025">2025</option>
                                                         <option value="2026">2026</option>
                                                         <option value="2027">2027</option>
                                                     </select>
                                                     </div>
                                                     </div>
                                                     <div class="card-body">
                                                     <div class="form-group">
                                                     <div class="col-md-12 mb-6">
                                                        <label for="start_date">Für Buchhaltung *</label>
                                                        <select name="buchhaltung" id="buchhaltung">
                                                           <option value="no">No</option>
                                                           <option value="yes">Yes</option>
                                                        </select>
                                                     </div>
                                                  </div>  '
                                                     ;
                                            } ?>
                                          
                                        <button type="submit" name="report" class="btn btn-primary">Submit</button>
                                    </form>
               
            </div>
        </div>

         <!-- end column -->

    </div>

  
</div>

</div>

                <div class="container-fluid">
                   
                    <?php echo $data;?>
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

function export_report($input, $type,$buchhaltung){
// Start the output buffer.
ob_start();

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Monthly_report_'.$input.'.csv');
ob_end_clean();
$output = fopen( 'php://output', 'w' );

$headers = "id, created_date, type_of_service, building_type, floor, number_of_rooms, square_meters, is_elevator, prefix, first_name, last_name, address, ort, pin_code, mobile, email, start_date_time, end_date_time, total_price, advance_amount, balance, ort_nach";
if ($buchhaltung=="yes") {
    $headers = "id, created_date, type_of_service,  prefix, first_name, last_name, total_price";
}
$header_array = explode(",", $headers);
$csv_header_array=array();
foreach ($header_array as $row){
    $csv_header_array[] = str_replace("_", " ", strtoupper($row));
}

$sql = 'SELECT '.$headers.' FROM '.DB_NAME.'.projects WHERE';
if ($type == "year"){
    $sql .= " date_format(start_date_time, '%Y') = ".$input;
}elseif ($type == "month"){
    $sql .= " date_format(start_date_time, '%Y-%m') = '".$input."'";
}
else{
    $sql .= " start_date_time = '".$input."'";
}

$conn=getDBConnection();
$result= mysqli_query($conn, $sql);
if ($result != null){
    fputcsv( $output, $csv_header_array );
}
foreach ($result as $row){
    $row = array_map("utf8_decode", $row);
    fputcsv( $output, $row );
}

fclose( $output );
exit;
}
?>