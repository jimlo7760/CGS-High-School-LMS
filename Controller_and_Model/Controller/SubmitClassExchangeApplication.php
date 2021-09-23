<?php
require_once "../Model/SwapSubjAppActions.php";
require_once "../Model/HomeRoomClassActions.php";
require_once "../Model/SubjectClassActions.php";
require_once "../Model/LoginCredentials.php";
session_start();
if ((isset($_POST["swap-origin"]) && $_POST["swap-origin"] != NULL) &&
    (isset($_POST["swap-target"]) && $_POST["swap-target"] != NULL)) {
    $orig_class_id = get_post("swap-origin");
    $target_class_id = get_post("swap-target");
    $stud_id = $_SESSION["id"];
    $tot_res = FetchSubjClassBySubjClassId($orig_class_id);
    $origin_teacher_id = $tot_res[1][0][1];
    $tot_res = FetchSubjClassBySubjClassId($target_class_id);
    $target_teacher_id = $tot_res[1][0][1];
    $hr_class_id = get_post("hr_class_id");
    $tot_res = FetchHRClassById($hr_class_id);
    $hr_id = $tot_res[1][0][4];
    $tot_res = InsertNewSwapSubjectApplication($stud_id, $orig_class_id, $target_class_id, "N/A", $origin_teacher_id, $target_teacher_id, $hr_id);
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

