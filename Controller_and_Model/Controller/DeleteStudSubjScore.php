<?php
require_once '../Model/StudScoreActions.php';
session_start();
if($_POST['exam_id'] &&  $_POST['stud_id']){
    $exam_id = $_POST['exam_id'];
    $stud_id = $_POST['stud_id'];
    $tot_res = DeleteStudSubjScore($exam_id, $stud_id);
    if($tot_res[0]){
        ob_start();
        header('Location: ' . "../../Webpage/html/subjectTeacher/subjectTeacher-student.php");
        ob_end_flush();
        die();
    }else{
        print_r($tot_res);
    }
}else{
    echo "Cannot complete your request due to network problem";
}