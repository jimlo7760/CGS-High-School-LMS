<?php
require_once '../Model/StudScoreActions.php';
session_start();
if($_POST['add-score-stud'] && $_POST['add-score-class'] && $_POST['add-exam-id'] && $_POST['add-score-comment'] && $_POST['add-score-val']){
    $stud_id = $_POST['add-score-stud'];
    $exam_id = $_POST['add-exam-id'];
    $score = $_POST['add-score-val'];
    $comment = $_POST['add-score-comment'];
    $check_res = FetchScoresByStudIdAndExamId($stud_id, $exam_id);
    if($check_res[0]){
        echo "Score existed. Please delete it first. ";
    }else {
        $tot_res = InsertNewScores($stud_id, $exam_id, $score, $comment, $_SESSION['id']);
        if ($tot_res[1] > 0) {
            ob_start();
            header('Location: ' . "../../Webpage/html/subjectTeacher/subjectTeacher-student.php");
            ob_end_flush();
            die();
        }else{
            echo "Fail to add due to illegal format";
        }
    }
}else{
    echo "Fail to add due to incomplete info. ";
}