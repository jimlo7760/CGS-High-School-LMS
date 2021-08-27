<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/StudAwardActions.php";
session_start();
if ((isset($_POST["award-title"]) && $_POST["award-title"] != NULL) &&
    (isset($_POST["award-year"]) && $_POST["award-year"] != NULL)) {
    $title = get_post("award-title");
    $year = get_post("award-year");
    $tot_res = InsertNewAward($_SESSION["id"], $title, $year);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
}
