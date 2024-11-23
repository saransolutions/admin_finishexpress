<?php
session_start();
require_once 'includes/cons.php';
require_once 'includes/db.php';
require_once 'includes/webpage.php';
require_once 'includes/pdf_page.php';
require_once 'includes/project/remove.php';

require_once 'includes/project/select.php';
require_once 'includes/project/update.php';
require_once 'includes/project/body.php';

checkUserLoggedIn();
$page_php = "projects.php";
$page_title = "Projects";


if (isset($_GET["add_new"])) {
    require_once 'includes/project/insert/step1.php';
    echo create_project_form_step_1();
} elseif (isset($_GET["add_photo_id"])) {
    require_once 'includes/album/insert/step1.php';
    $id = $_GET["add_photo_id"];
    echo add_photo_form($id);
} elseif (isset($_GET["mreport_form"])) {
    require_once 'includes/report/report.php';
    report_form(null, null, "month");
} elseif (isset($_GET["yreport_form"])) {
    require_once 'includes/report/report.php';
    report_form(null, null, "year");
} elseif (isset($_GET["export"])) {
     require_once 'includes/report/report.php';
    export_report($_GET["export"], $_GET["type"],$_GET["buchhaltung"]);
} elseif (isset($_POST["report"])) {
    require_once 'includes/report/report.php';
    $input = $_POST["input_value"];
    $type = $_POST["type"];
    $buchhaltung = $_POST["buchhaltung"];
    $data = run_report($input, $type);
    if ($data != null) {
        $button = ' <div class="card-body"><a class="btn btn-info float-right" href="projects.php?type='.$type.'&export=' . $input . '&buchhaltung=' . $buchhaltung . '" role="button">Export</a></div><br>';
        report_form($button . " " . $data, $input, $type);
    } else {
        $button = '<div class="alert alert-danger" role="alert">
                        No records found - ' . $input . '
                    </div>';
        report_form($button . " " . $data, $input, $type);
    }
} elseif (isset($_GET["gallery"])) {
    require_once 'includes/album/select/view.php';
} elseif (isset($_GET["service"])) {
   
    require_once 'includes/project/insert/step2.php';
    echo create_project_form_step_2($_GET["service"]);
} elseif (isset($_POST["action"])) {
    require_once 'includes/project/insert/step2.php';
    echo validate_dates($_POST);
} elseif (isset($_POST["step2"])) {
    require_once 'includes/project/insert/step3.php';
    echo step3($_POST);
} elseif (isset($_POST["step3"])) {
    require_once 'includes/project/insert/step4.php';
    echo step4($_POST);
} elseif (isset($_POST["step4"])) {
    require_once 'includes/project/insert/step5.php';
    echo step5($_POST);
} elseif (isset($_POST["step5"])) {
    require_once 'includes/project/insert/step5.php';
    insert_project($_POST);
    header('Location: ' . $page_php);
} elseif (isset($_POST["add_photo_project"])) {
    require_once 'includes/album/insert/step1.php';
    upload_photo($_POST, $_FILES);
    header('Location: ' . $page_php);
}/* elseif (isset($_GET["export_id"])) {
    require_once COMPOSER_REPO . '/mpdf/vendor/autoload.php';
    export($_GET["export_id"]);
}*/ elseif (isset($_GET["invoice_id"])) {
    require_once COMPOSER_REPO . '/mpdf/vendor/autoload.php';
    $id = $_GET["invoice_id"];
    $lang = $_GET["lang"];
    $content = invoice($id, $lang);
    pdf_document($content, "FE-00");
} elseif (isset($_GET["letter_pad"])) {
    $content = letter_pad(123);
    pdf_document($content, "letter-pad");
} elseif (isset($_GET["pay_id"])) {
    echo get_pay_form($_GET["pay_id"]);
} elseif (isset($_GET["edit_id"])) {
    require_once 'includes/project/edit.php';
    echo edit_form($_GET["edit_id"]);
} elseif (isset($_POST["update_project"])) {
    require_once 'includes/project/edit.php';
    edit_project($_POST);
    header('Location: ' . $page_php);
} elseif (isset($_POST["pay_project_form"])) {
    pay_project($_POST);
    header('Location: ' . $page_php);
} elseif (isset($_GET["remove_id"])) {
    $id = $_GET["remove_id"];
    echo get_remove_form($id);
} elseif (isset($_GET["pid"])) {
    require_once 'includes/project/body_single.php';
    get_single_page($_GET["pid"]);
} elseif (isset($_POST["remove-project-form"])) {
    remove_project($_POST);
    header('Location: ' . $page_php);
} elseif (isset($_GET["get_invoice_lang"])) {
    $id = $_GET['get_invoice_lang'];
    echo '
    <a class="btn btn-primary btn-sm" href="projects.php?lang=de&invoice_id=' . $id . '" target="_blank" role="button">Deutsch</a>
    <a class="btn btn-secondary btn-sm" href="projects.php?lang=fr&invoice_id=' . $id . '" target="_blank" role="button">Französisch</a>
    ';
}elseif (isset($_GET["calendar"])) {
    require_once 'includes/calendar/view.php';
    
} else {
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php echo get_head() ?>
    <?php echo get_body() ?>

    </html>
<?php } ?>