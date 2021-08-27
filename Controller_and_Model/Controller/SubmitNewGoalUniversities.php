<?php
session_start();
require_once "../Model/StudUnivActions.php";
require_once "../Model/LoginCredentials.php";
if ((isset($_POST["university-name"]) && $_POST["university-name"] != NULL) &&
    (isset($_POST["university-major"]) && $_POST["university-major"] != NULL)) {
    $univ_name = get_post("university-name");
    $univ_major = get_post("university-major");
    $stud_id = $_SESSION["id"];
    $tot_res = InsertNewUniv($univ_name, $univ_major, $stud_id);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
}
