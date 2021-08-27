<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/StudAwardActions.php";
session_start();
if (isset($_POST["award-delete"]) && $_POST["award-delete"] != NULL) {
    $award_id = get_post("award-delete");
    $tot_res = UpdateStudAwardByStudId($_SESSION["id"], $award_id, 0);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
}