<?php
define("MAIN_TITLE", "FinishExpress");
define("MAIN_LOGO_IMG", "logo.png");

define("MAIN_ACCOUNT_NUMBER", "CH86 0900 0000 1636 3866 5");
define("HEAD_ADDRESS_LINE_1", "Orpundstrasse 31");
define("HEAD_ADDRESS_LINE_2", "2504 Biel");
define("HEAD_ADDRESS_LINE_3", "finishexpress.ch");
define("HEAD_PHONE", "076 488 36 89 <br>078 215 80 30");
define("HEAD_MOBILE", " ");
define("HEAD_WED_ADDRESS", "info@finishexpress.ch");
define("HEAD_LOGO", "img/logo.png");
define("HEAD_UID", "CHE-45.7.949.122");
define("HEAD_FIRST_NAME", "Dawid");
define("HEAD_LAST_NAME", "Jhon");
define("HEAD_PREFIX", "");
define("HEAD_LOGO_STYLE", "float:right;");
define("ALBUM_PATH", "./album");

define("INITIAL_UMZUG_PACKAGE_AMOUNT","500");
define("ERR_1_INVALID_DATE", "Error : Invalid date :(");
define("ERR_2_MORE_THAN_10_DAYS", "Error : Project duration is more than 10 days :(");
define("ERR_3_ALREADY_OCCUPIED", "Warning : Dates already occupied");


define("FOOT_MSG", 'Rathusstr, 63,CH – 4410 LIESTAL, Tel: 061 272 23 01 Fax: 061 272 23 04 Mobile: 076 570 50 03
www.kayathri.ch info@kayathri.ch Credit Suisse IBAN: CH85 0483 5172 4580 6100 0');


define("PDF_FOOTER_SARAN_SOLUTIONS", '<div><p style="margin-left:70%;font-size: 8pt;">Developed By <font style="font-style:italic;text-decoration: underline;">www.saransolutions.in</font></p></div>');

function load_env(){
	$env = file_get_contents(__DIR__."/../.env");
	$lines = explode("\n",$env);
	foreach($lines as $line){
		preg_match("/([^#]+)\=(.*)/",$line,$matches);
		if(isset($matches[2])){
			putenv(trim($line));
		}
	}
}

function checkUserLoggedIn(){
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
    } elseif(isset($_GET['logoff']))
    {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: login.php');
    }
}

define("PDF_STYLE_TABLE_ITEMS", '
<style>
        table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
        </style>
');
load_env();
define("DB_NAME", getenv("DB_NAME"));
define("COMPOSER_REPO", getenv("COMPOSER_REPO"));

function set_repeat($data){
	$dates = [];
	$result = "";
	$days = null;
    $number_cycles = 0;
    $number_tracks = 0;
    $diff_hours = 0;
    $is_repeat = $data["is_repeat"];
	$result .= '<input type="hidden" name="is_repeat" value="'.$is_repeat.'" />';
    if ($is_repeat == "yes"){
        $total_hours = 0;
        $number_cycles = $data["number_cycles"];
        $days = $data["days"];
		$price_per_hour = $data["price_per_hour"];
        $number_tracks = $data["number_tracks"];
        $diff_hours = $data["diff_hours"];
        for ($i=0;$i<$number_tracks;$i++){
            for ($j=0;$j<$number_cycles;$j++){
                if(isset($data["tc_".$i."_slot_".$j])){
					$dates[] = $data["tc_".$i."_slot_".$j];
                    $total_hours += $diff_hours;
					$result .= '<input type="hidden" name="tc_'.$i.'_slot_'.$j.'" value="'.$data["tc_".$i."_slot_".$j].'" />';
                }
            }
        }
		$result .= '<input type="hidden" name="days" value="'.$days.'" />';
		$result .= '<input type="hidden" name="number_tracks" value="'.$number_tracks.'" />';
		$result .= '<input type="hidden" name="number_cycles" value="'.$number_cycles.'" />';
		$result .= '<input type="hidden" name="price_per_hour" value="'.$price_per_hour.'" />';
		$result .= '<input type="hidden" name="diff_hours" value="'.$diff_hours.'" />';
		$result .= '<input type="hidden" name="total_hours" value="'.$total_hours.'" />';
    }
	return [$result, $dates, $total_hours, $number_cycles, $days,$price_per_hour];
}

function get_repeat($number_cycles, $days, $dates, $total_hours, $price_per_hour){
	$result = "";
    $result .= get_repeat_single("Number of Cycles", $number_cycles);
	$result .= get_repeat_single("Days", str_replace("_", " ", $days));
	$result .= get_repeat_single("Preis pro Stunde", $price_per_hour);
    $dates_r = "";
    foreach($dates as $row){
    	$dates_r .= '<small class="text-muted">'.$row.'</small><br>';
    }
	#$result .= get_repeat_single("Slots", $dates_r);
    $result .= get_repeat_single("Total Hours", $total_hours);
	return $result;
}

function get_repeat_single($key, $value){
	$result = 
'<li class="list-group-item d-flex">
	<div>
		<h6 class="my-0">'.$key.'</h6>
		<small class="text-muted">
			'.$value.'
		</small>
	</div>
</li>';
	return $result;

}



?>