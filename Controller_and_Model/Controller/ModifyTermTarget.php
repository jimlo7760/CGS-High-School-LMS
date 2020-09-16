<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/TermTargetActions.php";
session_start();
$conn = createconn();
$mid_goal = 0;
$fin_goal = 0;
$exam_ids = get_get("test-id");
$exam_ids = explode("a", $exam_ids);
$subj_id_find = get_get("class-id");


$tot_res = FetchTermTargetsByExamIdAndStudId($exam_ids[0], $_SESSION["id"]);
if ($tot_res[0] == 1) {
    $tot_res = $tot_res[1][0];
}
$term_target_id = $tot_res[0];
$subj_ids = explode(",", $tot_res[3]);
$subj_idx = 0;
foreach ($subj_ids as $subj_id) {
    if ($subj_id == $subj_id_find) {
        break;
    }
    $subj_idx ++;
}

if ($_GET["mid-goal"] == NULL) {
    $mid_goal = $_SESSION[$subj_idx][0];
} else {
    $mid_goal = get_get("mid-goal");
}

if ($_GET["mid-goal"] == NULL) {
    $fin_goal = $_SESSION[$subj_idx][1];
} else {
    $fin_goal = get_get("finao-goal");
}

$targets = explode(",", $tot_res[4]);
$targets[$subj_idx] = $mid_goal;
$fin = implode(",", $targets);
UpdateTermTarget($term_target_id, $_SESSION["id"], $exam_ids[0], $fin, 1);




$tot_res = FetchTermTargetsByExamIdAndStudId($exam_ids[1], $_SESSION["id"]);
if ($tot_res[0] == 1) {
    $tot_res = $tot_res[1][0];
}
$term_target_id = $tot_res[0];
$subj_ids = explode(",", $tot_res[3]);
$subj_idx = 0;
foreach ($subj_ids as $subj_id) {
    if ($subj_id == $subj_id_find) {
        break;
    }
    $subj_idx ++;
}
$targets = explode(",", $tot_res[4]);
$targets[$subj_idx] = $fin_goal;
$fin = implode(",", $targets);
UpdateTermTarget($term_target_id, $_SESSION["id"], $exam_ids[1], $fin, 1);