<?php
session_start();
require_once "../Model/LingScoreActions.php";
require_once "../Model/LoginCredentials.php";
if ((isset($_POST["language-test-type"]) && $_POST["language-test-type"] != NULL)) {
    $test_type = get_post("language-test-type");
    $tot_res = [];
    if (!strcmp($test_type, "DUOLINGUAL")) {
        if ((isset($_POST["language-test-overall"]) && $_POST["language-test-overall"] != NULL) &&
            (isset($_POST["language-test-comment"]) && $_POST["language-test-comment"] != NULL) &&
            (isset($_POST["language-test-date"]) && $_POST["language-test-date"] != NULL) &&
            (isset($_POST["language-id"]) && $_POST["language-id"] != NULL)) {
            $overall_score = get_post("language-test-overall");
            $comments = get_post("language-test-comment");
            $test_date = get_post("language-test-date");
            $test_id = get_post("language-id");
            $tot_res = UpdateLingScoreDetail($test_id, $_SESSION["id"], $test_type, "N/A", $overall_score,
                $comments, $test_date);
        } else {
            echo "Please check your input1.";
        }
    } else {
        if ((isset($_POST["language-test-overall"]) && $_POST["language-test-overall"] != NULL) &&
            (isset($_POST["language-test-listening"]) && $_POST["language-test-listening"] != NULL) &&
            (isset($_POST["language-test-reading"]) && $_POST["language-test-reading"] != NULL) &&
            (isset($_POST["language-test-writing"]) && $_POST["language-test-writing"] != NULL) &&
            (isset($_POST["language-test-speaking"]) && $_POST["language-test-speaking"] != NULL) &&
            (isset($_POST["language-test-comment"]) && $_POST["language-test-comment"] != NULL) &&
            (isset($_POST["language-test-date"]) && $_POST["language-test-date"] != NULL) &&
            (isset($_POST["language-id"]) && $_POST["language-id"] != NULL)) {
            $overall_score = get_post("language-test-overall");
            $listening = get_post("language-test-listening");
            $reading = get_post("language-test-reading");
            $writing = get_post("language-test-writing");
            $speaking = get_post("language-test-speaking");
            $comments = get_post("language-test-comment");
            $test_date = get_post("language-test-date");
            $test_id = get_post("language-id");
            $test_score = $listening . "," . $reading . "," . $writing . "," . $speaking;
            $tot_res = UpdateLingScoreDetail($test_id, $_SESSION["id"], $test_type, $test_score, $overall_score,
                $comments, $test_date);
        }
    }
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
} else {
    echo "Please check your input2.";
}