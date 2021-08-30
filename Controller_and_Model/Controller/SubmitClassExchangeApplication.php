<?php
require_once "../Model/SwapSubjAppActions.php";
require_once "../Model/LoginCredentials.php";
session_start();
if ((isset($_POST["swap-origin"]) && $_POST["swap-origin"] != NULL) &&
    (isset($_POST["swap-target"]) && $_POST["swap-target"] != NULL)) {
    $orig_class_id = get_post("swap-origin");
    $target_class_id = get_post("swap-target");
    $stud_id = $_SESSION["id"];
    $tot_res = InsertNewSwapSubjectApplication($stud_id, $orig_class_id, $target_class_id, "N/A");
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
} else {
    echo "Please check your input.";
}

