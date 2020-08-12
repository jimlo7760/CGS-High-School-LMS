<?php
require_once 'LoginCredentials.php';
function InsertNewExam($exam_title, $target_grades, $subj_ids, $exam_start_time, $duration_in_days) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into exam(exam_title, target_grades, subj_ids, exam_start_time, duration_in_days, create_time) values (?, ?, ?,?, ?, ?)");
    $stmt->bind_param("sissss", $stmt_exam_title, $stmt_target_grades, $stmt_subj_ids, $stmt_exam_start_time, $stmt_duration_in_days, $stmt_create_time);
    $stmt_exam_title = $exam_title;
    $stmt_target_grades = $target_grades;
    $stmt_subj_ids = $subj_ids;
    $stmt_exam_start_time = $exam_start_time;
    $stmt_duration_in_days = $duration_in_days;
    $stmt_create_time = date("Y-m-d H:i:s");
    $stmt->execute();
    $res = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}

function UpdateExam($exam_id, $exam_title, $target_grades, $subj_ids, $exam_start_time, $duration_in_days, $audit_res) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into exam set exam_title = ?, target_grades= ?, subj_ids = ?, exam_start_time = ?, duration_in_days = ? status = ? where id = ?");
    $stmt->bind_param("sissssi", $stmt_exam_title, $stmt_target_grades, $stmt_subj_ids, $stmt_exam_start_time, $stmt_duration_in_days, $stmt_status, $stmt_exam_id);
    $stmt_exam_id = $exam_id;
    $stmt_exam_title = $exam_title;
    $stmt_target_grades = $target_grades;
    $stmt_subj_ids = $subj_ids;
    $stmt_exam_start_time = $exam_start_time;
    $stmt_duration_in_days = $duration_in_days;
    $stmt_status = $audit_res;
    $stmt->execute();
    $res = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}
