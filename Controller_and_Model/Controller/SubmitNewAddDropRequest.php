<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/AddDropSubjApplicationActions.php";
require_once "../Model/SubjectClassActions.php";
require_once "../Model/HomeRoomClassActions.php";
session_start();
$input = false;
$action = -1;
$stud_id = $_SESSION["id"];
$subj_class_id = -1;
if (isset($_POST["course-select"]) && $_POST["course-select"] != NULL) {
    $subj_class_id = get_post("course-select");
    $stud_id = $_SESSION["id"];
    $action = 1;
    $input = true;
} else if (isset($_POST["course-delete"]) && $_POST["course-delete"] != NULL) {
    $subj_class_id = get_post("course-delete");
    $stud_id = $_SESSION["id"];
    $action = 0;
    $input = true;
}
if ($input) {
    $tot_res = FetchSubjClassBySubjClassId($subj_class_id);
    $target_tea_id = $tot_res[1][0][1];
    $hr_class_id = $_SESSION["class_id"];
    $tot_res = FetchHRClassById($hr_class_id);
    $target_hr_tea_id = $tot_res[1][0][4];
    $tot_res = InsertNewAddDropApp($stud_id, $subj_class_id, $hr_class_id, $target_tea_id, $target_hr_tea_id, $action);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input1.";
    }
} else {
    echo "Please check your input2.";
}
