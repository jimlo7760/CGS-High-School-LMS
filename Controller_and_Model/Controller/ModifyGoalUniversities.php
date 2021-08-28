<?php
session_start();
require_once "../Model/LoginCredentials.php";
require_once "../Model/StudUnivActions.php";
if ((isset($_POST["university-name"]) && $_POST["university-name"] != NULL) &&
    (isset($_POST["university-major"]) && $_POST["university-major"] != NULL) &&
    (isset($_POST["univ-id"]) && $_POST["univ-id"] != NULL)) {
    $name = get_post("university-name");
    $major = get_post("university-major");
    $univ_id = get_post("univ-id");
    $stud_id = $_SESSION["id"];
    $tot_res = UpdateStudUnivDetail($name, $univ_id, $major, $stud_id); // Function written by Binghe Yi
    if ($tot_res > 0) {
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