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

#local
define("DB_NAME", "ch375071_admin");
define("DB_USER", "ch375071_admin");
define("DB_PASS", 'welcome3$IBM');

#server
// define("DB_NAME", "ch295301_saransol");
// define("DB_USER", "ch295301_saransol");
// define("DB_PASS", 'welcome3$IBM');

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


?>