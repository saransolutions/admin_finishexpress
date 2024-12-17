<?php

function get_main_table()
{
    $sql = "select * from " . DB_NAME . ".projects ORDER BY id DESC";
    $part1 = '
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Projekt-Info</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable"  cellspacing="0" >
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Tel-Num</th>
                        <th>Diensleitung</th>
                        <th>Gebäude</th>
                        <th>Stock</th>
                        <th>Datum</th>
                        <th>Preis</th>
                        <th>Balance</th>
                        <th>Status</th>
                    </tr>
                </thead>
               
                <tbody> ';
                $data = '';
                $rows = getFetchArray($sql);
                foreach ($rows as $result) {
                    $status = "Requested";
                    $id = $result['id'];
                    $name = $result['first_name'] . ' ' . $result['last_name'];
                    $type_of_service = $result["type_of_service"];
                    $building_type = $result["building_type"];
                    $floor = $result["floor"];
                    $number_of_rooms = $result["number_of_rooms"];
                    $square_meters = $result["square_meters"];
                    $is_elevator = $result["is_elevator"];
                    $execution_date = $result["start_date_time"];
            
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
                        <td class="w-auto p-1"><input type="checkbox" class="btn-check" name="edit_id" value="' . $id . '" autocomplete="off"></td>
                        <td><a href="projects.php?pid=' . $id . '">' . $name . '</a></td>
                        <td>' . $mobile . '</td>
                        <td>' . $type_of_service . '</td>
                        <td>' . $building_type . '</td>
                        <td>' . $floor . '</td>
                        <td>' . $execution_date . '</td>
                        <td>' . $total_price . '</td>
                        <td>' . $balance . '</td>
                       
                        <td>' . get_status(  $balance) . '</td>
                    </tr>';
                }
            
                $part3 = '
                 </tbody>
            </table>
            </div>
            </div>
       ';
    return $part1 . $data . $part3;
}

    
   
// function export($id)
// {
//     $sql = "select * from " . DB_NAME . ".projects where id=" . $id;
//     $rows = getFetchArray($sql);
//     $data = '';
//     if (count($rows) > 0) {
//         $result = $rows[0];
//         $delivery_date = $result["start_date_time"];
//         if ($delivery_date == null) {
//             return null;
//         }
//         $part1 = pdf_head() . '
//         <body>
//         ' . pdf_block($id) . '
//         <div style="text-align: right">Date: ' . date('F j, Y', strtotime($delivery_date)) . '</div>
//         <br />
//         <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">';

//         $id = $result['id'];
//         $name = $result['first_name'] . ' ' . $result['last_name'];
//         $type_of_service = $result["type_of_service"];
//         $building_type = $result["building_type"];
//         $floor = $result["floor"];
//         $number_of_rooms = $result["number_of_rooms"];
//         $square_meters = $result["square_meters"];
//         $is_elevator = $result["is_elevator"];
//         $execution_date = $result["start_date_time"];

//         $address = $result["address"];
//         $ort = $result["ort"];
//         $pin_code = $result["pin_code"];
//         $mobile = $result["mobile"];
//         $email = $result["email"];

//         $total_price = $result["total_price"];
//         $advance_amount = $result["advance_amount"];
//         $balance = $result["balance"];

//         $comments_1 = $result["comments_1"];
//         $comments_2 = $result["comments_2"];
//         $comments_3 = $result["comments_3"];

//         $data .= pdf_table_tr_th_td_span("<h3>Personal Details</h3>");

//         $data .= pdf_table_tr_th_td("Name", $name);
//         $data .= pdf_table_tr_th_td("Address", $address);
//         $data .= pdf_table_tr_th_td("Ort", $ort);
//         $data .= pdf_table_tr_th_td("Pin Code", $pin_code);
//         $data .= pdf_table_tr_th_td("Mobile", $mobile);
//         $data .= pdf_table_tr_th_td("E-Mail", $email);

//         $data .= pdf_table_tr_th_td_span("<h3>Project Details</h3>");
//         $data .= pdf_table_tr_th_td("Type of Service", $type_of_service);
//         $data .= pdf_table_tr_th_td("Square meters", $square_meters);
//         $data .= pdf_table_tr_th_td("Building Type", $building_type);
//         $data .= pdf_table_tr_th_td("Floor", $floor);

//         $data .= pdf_table_tr_th_td("Number of rooms ", $number_of_rooms);
//         $data .= pdf_table_tr_th_td("is Elevator ", $is_elevator);
//         $data .= pdf_table_tr_th_td("Execution Date ", $execution_date);

//         $data .= pdf_table_tr_th_td_span("<h3>Payment Details</h3>");

//         $data .= pdf_table_tr_th_td("Total price ", $total_price);
//         $data .= pdf_table_tr_th_td("Advance amount ", $advance_amount);
//         $data .= pdf_table_tr_th_td("balance ", $balance);

//         $data .= pdf_table_tr_th_td_span("<h3>Extra Details</h3>");
//         $data .= pdf_table_tr_th_td("Comments 1 ", $comments_1);
//         $data .= pdf_table_tr_th_td("Comments 2 ", $comments_2);
//         $data .= pdf_table_tr_th_td("Comments 3 ", $comments_3);

//         $part2 = '</tbody>
//         </table>';
//         $part2 .= '</body></html>';
//         $content = $part1 . $data . $part2;
//         echo $content;
//     }
// }

function letter_pad($id)
{
    $subject=$_POST['subject'];
    $name 	 = $_POST['name'];
    $message = $_POST['message'];
   
    return pdf_head() . '<body>' . pdf_block($id) . '<h4><b>'.$subject.'</b></h4><br>'.$name.'<br><pre>'.$message.'</pre></body>';
}

function invoice($id, $lang)
{
    $row_count = 1;
    $sql = "select * from " . DB_NAME . ".projects where id=" . $id;
    $rows = getFetchArray($sql);
    $data = '';
    if (count($rows) > 0) {
        $result = $rows[0];
        $created_date = $result["created_date"];
        if ($created_date == null) {
            return null;
        }
        $id = $result['id'];
        $prefix = $result["prefix"];
        if ($prefix == "...") {
            $prefix='';

        }
        $floor = $result["floor"];
        if ($floor == "...") {
            $floor='';

        }
        $number_of_rooms = $result["number_of_rooms"];
        if ($number_of_rooms == "...") {
            $number_of_rooms='';
        }
        else {
            $number_of_rooms.="-Zimmer";
        }
       
        $square_meters = $result["square_meters"];
        if ($square_meters =! null && strlen($square_meters) >0) {
            $square_meters =$result["square_meters"]. "m2Inkl.";
        } else {
            $square_meters='';
        }
        
        $comments_line = null;
        $comments_1 = $result["comments_1"];
        if ($comments_1 =! null && strlen($comments_1) >0 ) {
            $comments_line = '<tr>
            <td width="30%" style="text-align: left;font-size:12pt;">
                Notes
            </td>
            <td width="70%" style="text-align: left;font-size:11pt;">
                '.$result["comments_1"].'<br>
                '.$result["comments_2"].'<br>
                '.$result["comments_3"].'
            </td>
        </tr>';
        }
        if ($lang == "de") {
            $part1 = pdf_head() . '
        <body>
        ' . pdf_block($id) . '
        <table width="100%" style="font-size: 9pt; border-collapse: collapse; margin-top:5%;margin-bottom:5%;" cellpadding="8">
            <tr class="blank_row">
                <td colspan="2"></td>
            </tr>
            <tr>
                <td width="50%" style="text-align: left;">
                    <div>
                    <p><span style="font-weight: normal; font-size: 10pt;">Auftrag Nr. #FE-00' . $id . ' </span></p>
                    <p><span style="font-weight: normal; font-size: 10pt;">' . date('d-m-Y', strtotime($created_date)) . ' </span></p>
                    </div>
                </td>
                <td width="50%" style="text-align: right;">
                    <div>
                        <p><span style="font-weight: normal; font-size: 12pt;">' . $prefix . ' ' . $result['first_name'] . ' ' . $result['last_name'] . '</span></p>
                        <p><span style="font-weight: normal; font-size: 12pt;">' . $result['address'] . '</span></p>
                        <p><span style="font-weight: normal; font-size: 12pt;">' . $result['pin_code'] . '  ' . $result["ort"] . ' </span></p><br>
                        <p><span style="font-weight: normal; font-size: 12pt;">Tel-Nummer : ' . $result["mobile"] . ' </span></p>
                        <p><span style="font-weight: normal; font-size: 12pt;">Mail-Id : ' . $result["email"] . ' </span></p>
                    </div>
                </td>
            </tr>
        </table>
        ';
        } else {
            $part1 = pdf_head() . '
        <body>
        ' . pdf_block($id) . '
        <table width="100%" style="font-size: 9pt; border-collapse: collapse; margin-top:5%;margin-bottom:5%;" cellpadding="8">
            <tr class="blank_row">
                <td colspan="2"></td>
            </tr>
            <tr>
                <td width="50%" style="text-align: left;">
                    <div>
                    <p><span style="font-weight: normal; font-size: 10pt;">Numéro de commande. #FE-00' . $id . ' </span></p>
                    <p><span style="font-weight: normal; font-size: 10pt;">' . date('d-m-Y', strtotime($created_date)) . ' </span></p>
                 
                    </div>
                </td>
                <td width="50%" style="text-align: right;">
                    <div>
                        <p><span style="font-weight: normal; font-size: 12pt;">' . $prefix . ' ' . $result['first_name'] . ' ' . $result['last_name'] . '</span></p>
                        <p><span style="font-weight: normal; font-size: 12pt;">' . $result['address'] . '</span></p>
                        <p><span style="font-weight: normal; font-size: 12pt;">' . $result['pin_code'] . '  ' . $result["ort"] . ' </span></p>
                    </div>
                </td>
            </tr>
        </table>
        ';
        }

      
        $name = $result['first_name'] . ' ' . $result['last_name'];
        $type_of_service = $result["type_of_service"];
        $building_type = $result["building_type"];
        
        $is_elevator = $result["is_elevator"];
        $start_date = $result["start_date_time"];
        $end_date = $result["end_date_time"];

        
        $first_name = $result["first_name"];
        $last_name = $result["last_name"];
        $address = $result["address"];
        $ort = $result["ort"];
        $pin_code = $result["pin_code"];
        $mobile = $result["mobile"];
        $email = $result["email"];
        $ort_nach = $result["ort_nach"];
        

        $total_price = $result["total_price"];
        $advance_amount = $result["advance_amount"];
        $balance = $result["balance"];
        $title = "";

        if (strpos($type_of_service, "Reinigung") !== false) {
            if ($lang == 'de'){
                $title = "Reinigung Auftragsbestätigung";
            }else {
                $title = "Nettoyage Confirmation de commande";
            }
        }
        if (strpos($type_of_service, "Umzug") !== false) {
            if ($lang == 'de'){
                $title = "Umzug";
            }else {
                $title = "Déménagement";
            }
        }

        $part2 = '';

        $part2 .= '<h1>' . $title . '</h1>';
        if ($lang == 'de') {
            $part2 .= '<div style="text-align: left;font-size:11pt;margin-top: 3%;margin-bottom: 2%;">
        <p>Sehr geehrter ' . $prefix . '' . $name . '</p>
        <p>Vielen Dank für Ihr Auftrag. Gerne bestätigen Wir Ihnen folgendes Angebot.</p>
        </div>';
        } else {
            
            $prefix = "Mr";
            if ($prefix == 'Frau') {
                $prefix = "Madame";
            }
            $part2 .=
                '<div style="text-align: left;font-size:11px;margin-top: 3%;margin-bottom: 2%;">
        <p>Cher ' . $prefix . '' . $name . '</p>
        <p>Nous vous remercions de votre commande. Nous vous confirmons volontiers le devis suivant.</p>
        </div>';
        }
        $von_nach = "Abgabegarantie Inkl. 8.1% Mwst Pauschal";
        if ($type_of_service == "Umzug"){
            $von_nach = "<b>Ort: ".$ort." - ".$ort_nach."</b>";
        }
        if ($lang == 'de') {
            $description = '<table width="100%" style="font-size:9px; border-collapse: collapse; margin-top:2%;margin-bottom:1%;" cellpadding="1">
            <tr>
                <td width="80%" style="text-align: left;font-size:12pt;">
                   <b> ' . $number_of_rooms . ' ' . $building_type . ' ' . $square_meters . '
                    '.$floor.'</b>
                    <br>
                    '.$von_nach.'
                </td>
                <td width="20%" style="text-align: right;font-size:12pt;">' . $total_price . ' CHF</td>
            </tr>
        </table>
        <hr>';
        } else {
            $building_type = "Appartement";
            if ($building_type == 'Haus') {
                $building_type == "Maison";
            }
            $von_nach = "Garantie de remise Incl. 8.1% Mwst Pauschal";
            if ($type_of_service == "Umzug"){
                $von_nach = "<b>Ort: ".$ort." - ".$ort_nach."</b>";
            }
            $description = '<table width="100%" style="font-size: 9pt; border-collapse: collapse; margin-top:5%;margin-bottom:1%;" cellpadding="15">
        <tr>
            <td width="80%" style="text-align: left;font-size:12pt;">
                ' . $number_of_rooms . ' Le Zimmer-' . $building_type . ' ' . $square_meters . '
                <br>
                '.$von_nach.'
            </td>
            <td width="20%" style="text-align: right;font-size:12pt;">' . $total_price . ' CHF</td>
        </tr>
    </table>
    <hr>';
        }
        $part2 .= $description;

        if ($lang == 'de') {
            $termin = '<table width="100%" style="font-size: 11pt; border-collapse: collapse; margin-top:1%;margin-bottom:1%;" cellpadding="7">
            <tr>
                <td width="30%" style="text-align: left;font-size:11pt;">
                    Reinigungstermin: 
                </td>
                <td width="70%" style="text-align: left;font-size:11pt;">
                    ' . date('d-m-Y', strtotime($start_date)) . '
                </td>
            </tr>
            <tr>
                <td width="30%" style="text-align: left;font-size:11pt;">
                    Begin bei Kunde  
                </td>
                <td width="70%" style="text-align: left;font-size:11pt;">
                    ' . date('H:i', strtotime($start_date)) . '
                </td>
            </tr>
            <tr>
                <td width="30%" style="text-align: left;font-size:11pt;">
                    Reinigung Abgabe:
                </td>
                <td width="70%" style="text-align: left;font-size:11pt;">
                    ' . date('d-m-Y', strtotime($end_date)) . ' ' . date('H:i', strtotime($end_date)) . '
                </td>
            </tr>
            <tr><td colspan="2">'.is_repeat($id, $lang).'</td></tr>
            <tr>
                <td width="30%" style="text-align: left;font-size:11pt;">
                    Zahlungskondition
                </td>
                <td width="70%" style="text-align: left;font-size:11pt;">
                    Barzahlung nach Abgabetermin an den Teamchef
                </td>
            </tr>
              
            '.$comments_line.'
            <tr>
                <td colspan="2" style="text-align: left;font-size:11pt;">
                <br><br>Bei Fragen Unklarheiten stehen Wir Ihnen gerne zur Verfügung</i>.
                </td>
            </tr>
        </table>
        ';

        } else {
            $termin = '<table width="100%" style="font-size: 11pt; border-collapse: collapse; margin-top:3%;margin-bottom:3%;" cellpadding="15">
            <tr>
                <td width="30%" style="text-align: left;font-size:12pt;">
                Date de nettoyage: 
                </td>
                <td width="70%" style="text-align: left;font-size:12pt;">
                    ' . date('d-m-Y', strtotime($start_date)) . '
                </td>
            </tr>
            <tr>
                <td width="30%" style="text-align: left;font-size:12pt;">
                Début chez le client  
                </td>
                <td width="70%" style="text-align: left;font-size:12pt;">
                    ' . date('h:i A', strtotime($start_date)) . '
                </td>
            </tr>
            <tr>
                <td width="30%" style="text-align: left;font-size:12pt;">
                Nettoyage Remise:
                </td>
                <td width="70%" style="text-align: left;font-size:12pt;">
                    ' . date('l F j, Y', strtotime($end_date)) . ' ' . date('h:i A', strtotime($end_date)) . '
                </td>
            </tr>
            <tr>
                <td width="30%" style="text-align: left;font-size:12pt;">
                Condition de paiement
                </td>
                <td width="70%" style="text-align: left;font-size:12pt;">
                Paiement en espèces après la date de remise au chef des équipes
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: left;font-size:12pt;">
                <i><br><br>Nous sommes à votre disposition pour répondre à vos questions.</i>.
                </td>
            </tr>
        </table>

        ';
        }

        $part2 .= $termin;
        if ($lang == 'de') {
            $part2 .= '
            <br><br><br><br><br><br><br><br>
            <table width="100%" style="font-size: 11pt; border-collapse: collapse; margin-top:5%; cellpadding:1">
 <tr>
        <td width="30%" style="text-align: left;font-size:11pt;">
        Datum,Kunden Unterschrift :<br><br> ________________________________
        
        </td>
        <td width="70%" style="text-align: right;font-size:12pt;">
        Freundliche Grüsse<br>' . MAIN_TITLE . '
        </td>
    </tr>
   
</table>
';


        } else {
            $part2 .= '
    <table width="100%" style="font-size: 11pt; border-collapse: collapse; margin-top:3%;margin-bottom:3%;" cellpadding="15">
 <tr>
        <td width="30%" style="text-align: left;font-size:12pt;">
        Dates,Enseignement :<br><br> ________________________________
        
        </td>
        <td width="70%" style="text-align: right;font-size:12pt;">
        Cordialement, merci<br>' . MAIN_TITLE . '
        </td>
    </tr>
   
</table>
    ';
        }
        if ($balance == 0) {
            $part2 .= '<div style="text-align: center; font-style: italic;">Payment fully paid</div>';
        } else {
            $part2 .= generate_bill($id, $name, $address, $balance);
        }
        
        $part2 .= '</body></html>';
        return $part1 . $data . $part2;
    }
}
function get_status($balance)
{
    $status = '<span class="badge badge-warning">Requested</span>';
    if ($balance == 0) {
        $status = '<span class="badge badge-success">Paid</span>';
    } else {
        $status = '<span class="badge badge-danger">Unpaid</span>';
    }
    return $status;
}

function get_single_project($id)
{
    $sql = "select * from " . DB_NAME . ".projects where id = " . $id;
    $part1 = '<table class="table">
    <thead colspan="2" style="font"><strong style>Customer Details</strong></thead>
        <tbody>
        ';
    $data = '';
    $rows = getFetchArray($sql);
    foreach ($rows as $result) {
        $id = $result['id'];
        $name = $result['first_name'] . ' ' . $result['last_name'];
        $address = $result["address"];
        $ort = $result["ort"];
        $pin_code = $result["pin_code"];
        $mobile = $result["mobile"];
        $email = $result["email"];

        $type_of_service = $result["type_of_service"];
        $building_type = $result["building_type"];
        $floor = $result["floor"];
        $number_of_rooms = $result["number_of_rooms"];
        $square_meters = $result["square_meters"];
        $is_elevator = $result["is_elevator"];
        $execution_date = $result["start_date_time"];

        $total_price = $result["total_price"];
        $advance_amount = $result["advance_amount"];
        $balance = $result["balance"];

        $comments_1 = $result["comments_1"];
        $comments_2 = $result["comments_2"];
        $comments_3 = $result["comments_3"];
        


        $data .= '<tr><td>Name</td><td>' . $name . '</td></tr>';
        $data .= '<tr><td>Address</td><td>' . $address . '</td></tr>';
        $data .= '<tr><td>Mobile</td><td>' . $mobile . '</td></tr>';
        $data .= '<tr><td>Ort</td><td>' . $ort . '</td></tr>';
        $data .= '<tr><td>Pincode</td><td>' . $pin_code . '</td></tr>';
        $data .= '<tr><td>Email</td><td>' . $email . '</td></tr>';

        $data .= '<tr><td colspan="2"><strong>Project Details</strong></td></tr>';
        $data .= '<tr><td>Type of Service</td><td>' . $type_of_service . '</td></tr>';
        $data .= '<tr><td>Building Type</td><td>' . $building_type . '</td></tr>';
        $data .= '<tr><td>Floor</td><td>' . $floor . '</td></tr>';
        $data .= '<tr><td>Number of Rooms</td><td>' . $number_of_rooms . '</td></tr>';
        $data .= '<tr><td>Square meters</td><td>' . $square_meters . '</td></tr>';
        $data .= '<tr><td>is Elevator</td><td>' . $is_elevator . '</td></tr>';
        $data .= '<tr><td>Execution Date</td><td>' . $execution_date . '</td></tr>';

        $data .= '<tr><td colspan="2"><strong>Payment Details</strong></td></tr>';
        $data .= '<tr><td>Total Price</td><td>' . $total_price . '</td></tr>';
        $data .= '<tr><td>Advance Amount</td><td>' . $advance_amount . '</td></tr>';
        $data .= '<tr><td>Balance</td><td>' . $balance . '</td></tr>';
        $data .= '<tr><td>Status</td><td>' . get_status($balance) . '</td></tr>';


        $data .= '<tr><td colspan="2"><strong>Extra Details</strong></td></tr>';
        $data .= '<tr><td>Comments 1</td><td>' . $comments_1 . '</td></tr>';
        $data .= '<tr><td>Comments 2</td><td>' . $comments_2 . '</td></tr>';
        $data .= '<tr><td>Comments 3</td><td>' . $comments_3 . '</td></tr>';
        $rows = [];
        $task_id = getSingleValue("select id from ".DB_NAME.".repeat_tasks where parent_id=".$id);
        if ($task_id != null){
            $is_repeat = "yes";
            $rows = getFetchArray("select * from ".DB_NAME.".repeat_tasks where parent_id=".$id);
            if($rows != null && count($rows)>0){
                $data .= '<tr><td colspan="2"><strong>Repeat Details</strong></td></tr>';
                $data .= '<tr><td>Is Repeat?</td><td>' . ucwords($is_repeat) . '</td></tr>';
                foreach($rows as $row){
                    $data .= '<tr><td>Number of Cycles</td><td>' . $row['number_cycles'] . '</td></tr>';
                    $data .= '<tr><td>Task in Hours</td><td>' . $row['diff_hours'] . '</td></tr>';
                    $data .= '<tr><td>Total Hours</td><td>' . $row['total_hours'] . '</td></tr>';
                    $data .= '<tr><td>Days </td><td>' . ucwords(str_replace("_", " ", $row['days']))  . '</td></tr>';
                }
                $data .= '<tr><td colspan="2"><strong>Date Details</strong></td></tr>';
                $rows = getFetchArray("select * from ".DB_NAME.".repeat_dates where parent_id=".$task_id);
                $count = 1;
                foreach($rows as $row){
                    $data .= '<tr><td>'.$count.'</td><td>' . $row['start_date_time']  . ' - '.$row['end_date_time'].'</td></tr>';
                    $count += 1;
                }
            }
        }
    }
    $part3 = '
    </tbody>
</table>';
    return $part1 . $data . $part3;
}

function generate_bill($id, $name, $address, $balance)
{
    return
        '   <br>

<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; margin-top:5%;margin-bottom:5%;" cellpadding="8"><tbody>
    <tr>
        <td width="30%">
            <h2>Empfangsschein</h2>
            <br>
            <h4>Konto / Zahlbar an</h4>
            <h5>' . MAIN_ACCOUNT_NUMBER . '</h5>
            <p>' . MAIN_TITLE . '</p>
            <p>' . HEAD_ADDRESS_LINE_1 . '</p>
            <p>' . HEAD_ADDRESS_LINE_2 . '</p>
            <br>
            <p>Referencez</p>
            <p>FE-00' . $id . '</p>
            <br>
            Zahlbar durch<br>
            ' . $name . '
            <br>
            ' . $address . '
            <br>
            <br>
            <h4>CHF ' . $balance . '</h4>
        </td>
        <td width="35%" style="border:0">
            <h2>Zahlteil</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>    
            <h4>Währung CHF </h4>
            <h4>Betrag ' . $balance . '</h4>
            <br>
        </td>
        <td width="35%" style="border:0">
            <h4>Konto / Zahlbar an</h4>
            <h5>' . MAIN_ACCOUNT_NUMBER . '</h5>
            <p>' . MAIN_TITLE . '</p>
            <p>' . HEAD_ADDRESS_LINE_1 . '</p>
            <p>' . HEAD_ADDRESS_LINE_2 . '</p>
            <br>
            Zusätzliche Informationen
            <br>
            Rechnungskonto: FE-00' . $id . ' <br>
            Monat: <br>
            Zahlbar bis:  <br>
            
            <br>
            <p>Referencez</p>
            <p>FE-00' . $id . '</p>
            <br>
            Zahlbar durch<br>
            ' . $name . '
            <br>
            ' . $address . '
            <br>
        </td>
        </tr>
    </tbody>
   
</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table width="100%" style="font-size: 11pt; border-collapse: collapse; margin-top:3%;margin-bottom:3%;" cellpadding="15">
<tr>
       <td width="30%" style="text-align: left;font-size:12pt;">
       Ort,Datum:<br><br> ________________________________<br><br><br><br>
       
       
       </td>
       <td width="70%" style="text-align: right;font-size:12pt;">
      
       
       </td>
   </tr>
   <tr>
       <td width="30%" style="text-align: left;font-size:12pt;">
       Unterschrift Kunden<br><br> ________________________________
       
       
       </td>
       <td width="70%" style="text-align: right;font-size:12pt;">
       Unterschrift Teamchef<br><br> ________________________________
       </td>
   </tr>
</table>';
}

function reports_form()
{ ?>
    <!-- Add New Modal -->
    <div class="modal fade" id="reports_form_modal" tabindex="-1" role="dialog" aria-labelledby="reports_form_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reports_form_modalLabel">Reports</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="reports_modal">
                    <div class=" row justify-content-center">
                        <div class="col-md-8 order-md-1">
                            <form method="post" action="projects.php">
                                <span class="badge badge-pill badge-primary">Yearly Report</span>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <l6abel for="report_month">Select Year *</l6abel>
                                        <input type="number" class="form-control" id="report_year" name="report_year" required="" placeholder="select year" min="2024" max="2030">
                                        <div class="invalid-feedback">Invalid Year *</div>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-success">Monthly Report</span>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="report_month">Select Month *</label>
                                        <input type="month" class="form-control" id="report_month" name="report_month" required="">
                                        <div class="invalid-feedback">Invalid Execution Date *</div>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-danger">Daily Report</span>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="report_date">Select Date *</label>
                                        <input type="date" class="form-control" id="report_date" name="report_date" required="">
                                        <div class="invalid-feedback">Invalid Execution Date *</div>
                                        <button type="submit" name="run_report" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </div>
                                <button type="submit" name="run_report" class="btn btn-primary float-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Add New Modal -->

<?php }

function is_repeat($id, $lang){
    $result="";
    $rows = getFetchArray("select * from ".DB_NAME.".repeat_tasks where parent_id=".$id);
    if($rows != null && count($rows)>0){
        $result .= '<table width="100%" style="background:#f2f2f2;">';
        $result .= pdf_row("is Repeat?", "Yes");
        foreach($rows as $row){
            $result .= pdf_row("Number of Cycles", $row['number_cycles']);
            $result .= pdf_row("Total Hours", $row['total_hours']);
            $result .= pdf_row("Days", ucwords(str_replace("_", " ", $row['days'])));
            // $rows = getFetchArray("select * from ".DB_NAME.".repeat_dates where parent_id=".$row['id']);
            // $count = 1;
            // foreach($rows as $row){
            //     $result .= pdf_row("Slot ".$count, $row['start_date_time']);
            //     $count += 1;
            // }
        }
        $result .= "</table>";
    }
    return $result;
}

?>