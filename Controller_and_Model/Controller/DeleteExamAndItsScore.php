<?php
require_once '../Model/LoginCredentials.php';
require_once '../Model/ExamActions.php';
require_once '../Model/StudScoreActions.php';
session_start();
if(isset($_POST['stud_score_id'])){
    $stud_score_id = $_POST['stud_score_id'];
    $tot_res = DeleteExamByExamId($stud_score_id);
    print_r($tot_res);
}