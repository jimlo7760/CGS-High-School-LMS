<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/UserActions.php";
session_start();
if ((isset($_POST["strength-title"]) && $_POST["strength-title"] != NULL) &&
    (isset($_POST["strength-start-year"]) && $_POST["strength-start-year"] != NULL) &&
    (isset($_POST["strength-comment"]) && $_POST["strength-comment"] != NULL) &&
    (isset($_POST["strength_id"]) && $_POST["strength_id"] != NULL)) {
    $title = get_post("strength-title");
    $year = get_post("strength-start-year");
    $comment = get_post("strength-comment");
    $strength_idx = get_post("strength_id");
    $raw_strengths = FetchStudInfoByStudId($_SESSION["id"])[1][0][16];
    $update_string = $title . "-" . $year . "-" . $comment;
    $strengths = explode(",", $raw_strengths);
    $strengths[$strength_idx] = $update_string;
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
    echo "Please check your input.";
}