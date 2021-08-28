<?php
session_start();
require_once "../Model/LoginCredentials.php";
require_once "../Model/StudAwardActions.php";
if ((isset($_POST["award-title"]) && $_POST["award-title"] != NULL) &&
    (isset($_POST["award-year"]) && $_POST["award-year"] != NULL) &&
    (isset($_POST["award-id"]) && $_POST["award-id"] != NULL)) {
    $title = get_post("award-title");
    $year = get_post("award-year");
    $award_id = get_post("award-id");
    $tot_res = UpdateStudAwardDetail($_SESSION["id"], $award_id, $title, $year);
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
