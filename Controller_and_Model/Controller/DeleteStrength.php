<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/UserActions.php";
session_start();
if ((isset($_POST["strength-select"]) && $_POST["strength-select"] != NULL)) {
    $count = get_post("strength-select");
    $tot_res = FetchStudInfoByStudId($_SESSION["id"]);
    $raw_strength = $tot_res[1][0][16];
    $strengths = explode(",", $raw_strength);
    unset($strengths[$count]);
    $strengths = implode(",", $strengths);
    $tot_res = UpdateStrength($_SESSION["id"], $strengths);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
} else {
    echo "Please select the hobby/strength that you want to remove.";
}
