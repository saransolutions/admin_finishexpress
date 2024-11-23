<?php 

function pdf_table_tr_th_td($name, $value){
    return '<tr><td style="border: 0.1mm solid #888888; " width="30%"><strong>'.$name.'</strong></td><td style="border: 0.1mm solid #888888; " width="70%">'.$value.'</td></tr>';
}
function pdf_table_tr_th_td_span($name){
    return '<tr><th colspan=2 style="border: 0.1mm solid #888888; background-color:#f2f2f2 ">'.$name.'</th></tr>';
}

function pdf_block($id){
    return '<!--mpdf
    '.pdf_head_foot($id).'
    <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
    <sethtmlpagefooter name="myfooter" value="on" />
    mpdf-->';
}

function pdf_head_foot($id){
    $uid = "";
    if (strlen(HEAD_UID)>0){
        $uid = "UID : ".HEAD_UID."<br>";
    }

    $data = '<htmlpageheader name="myheader">
    <table width="100%">
        <tr>
            <td width="50%">
                <img src="img/logo_xs.jpg" />
            </td>
            <td width="50%" style="text-align: right; ">
                <span style="font-weight: bold; font-size: 14pt;">'.MAIN_TITLE.'</span><br />
                '.HEAD_ADDRESS_LINE_1.'<br />'.HEAD_ADDRESS_LINE_2.'<br />

                <a href="http://www.'.HEAD_ADDRESS_LINE_3.'" target="_blank">'.HEAD_ADDRESS_LINE_3.'</a><br>
                '.HEAD_WED_ADDRESS.'<br />
                <span style="font-family:dejavusanscondensed;">&#9742;</span> '.HEAD_PHONE.'<br>'.'
                '.$uid.'
            </td>
        </tr>
    </table>
    <hr>
    </htmlpageheader>
    
    <htmlpagefooter name="myfooter">
    <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
    Page {PAGENO} of {nb}
    </div>
    </htmlpagefooter>';
    return $data;
}

function pdf_head(){
    return '<html>
    <head>
    <style>
    body {font-family: sans-serif;
        font-size: 10pt;
    }
    p {	margin: 0pt; }
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
    </head>';
}

function pdf_document($content, $prefix){
    require_once COMPOSER_REPO . '/mpdf/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf([
        'margin_left' => 20,
        'margin_right' => 15,
        'margin_top' => 48,
        'margin_bottom' => 25,
        'margin_header' => 10,
        'margin_footer' => 10
    ]);

    $mpdf->SetProtection(array('print'));
    $mpdf->SetAuthor("author");
    $mpdf->showWatermarkText = true;
    $mpdf->watermark_font = 'DejaVuSansCondensed';
    $mpdf->watermarkTextAlpha = 0.1;
    $mpdf->SetDisplayMode('fullpage');
    $mpdf->WriteHTML($content);
    $file_name = $prefix . "_" . date("d-m-Y") . ".pdf";
    $mpdf->Output($file_name, "I");
}

function pdf_row($name, $value){
    return '<tr><td width="30%" style="text-align: left;font-size:11pt;">'.$name.'</td>
                <td width="70%" style="text-align: left;font-size:11pt;">'.$value.'</td>
            </tr>';
}
?>
