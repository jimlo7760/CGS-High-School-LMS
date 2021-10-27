<?php
require_once '../Model/StudScoreActions.php';
session_start();
if ($_POST['edit-score-stud'] && $_POST['edit-exam-id'] && $_POST['edit-score-comment'] && $_POST['edit-test-score']) {
    $stud_id = $_POST['edit-score-stud'];
    $exam_id = $_POST['edit-exam-id'];
    $score = $_POST['edit-test-score'];
    $comment = $_POST['edit-score-comment'];
    $tot_res = UpdateStudExamResultsByExamIdAndStudId($stud_id, $exam_id, $score, $comment, $_SESSION['id']);
    ob_start();
    header('Location: ' . "../../Webpage/html/subjectTeacher/subjectTeacher-student.php");
    ob_end_flush();
    die();
}else{
    echo "Fail to edit due to network problem. ";
}