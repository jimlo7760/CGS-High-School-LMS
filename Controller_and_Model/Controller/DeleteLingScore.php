<?php
session_start();
require_once "../Model/LoginCredentials.php";
require_once "../Model/LingScoreActions.php";
if (isset($_POST["linguistic-score-select"]) && $_POST["linguistic-score-select"] != NULL) {
    $test_id = get_post("linguistic-score-select");
    $stud_id = $_SESSION["id"];
    $tot_res = UpdateLingScoreStatus($stud_id, $test_id, 0);
    if ($tot_res[1] > 0) {
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