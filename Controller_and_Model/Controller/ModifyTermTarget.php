<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/TermTargetActions.php";
session_start();

$mid_goal = 0;
$fin_goal = 0;
$exam_ids = get_post("test-id");
$exam_ids = explode("&", $exam_ids);
$subj_id_to_find = get_post("class-id");
$first_target = get_post("mid-goal");
$first_target_id = get_post("first_target_id");
$second_target = get_post("final-goal");
$second_target_id = get_post("second_target_id");
$tot_res = UpdateTermTarget($first_target_id, $first_target);

if ($tot_res[0]) {
    if (count($exam_ids) > 1) {
        $tot_res = UpdateTermTarget($second_target_id, $second_target);
    }
    if ($tot_res[0]) {
        ob_start();
        header('Location: ' . "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
    }
}