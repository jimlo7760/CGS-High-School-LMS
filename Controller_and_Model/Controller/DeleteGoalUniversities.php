<?php
session_start();
require_once "../Model/StudUnivActions.php";
require_once "../Model/LoginCredentials.php";
if ((isset($_POST["goal-univ"]) && $_POST["goal-univ"] != NULL)) {
    $goal_univ_id = get_post("goal-univ");
    $tot_res = UpdateGoalUnivStatus($goal_univ_id, $_SESSION["id"], 0);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
}