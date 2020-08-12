<?php
require_once 'LoginCredentials.php';
function InsertNewTermTarget($stud_id, $exam_id, $expected_exam_results) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into term_target(stud_id, exam_id, expected_exam_results, create_time) values (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $stmt_stud_id, $stmt_exam_id, $stmt_expected_exam_results, $stmt_create_time);
    $stmt_stud_id = $stud_id;
    $stmt_exam_id = $exam_id;
    $stmt_expected_exam_results = $expected_exam_results;
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

function UpdateTermTarget($term_target_id, $stud_id, $exam_id, $expected_exam_results, $audit_res) {
    $conn = createconn();
    $stmt = $conn->prepare("update term_target set stud_id = ?, exam_id = ?, expected_exam_results = ?, status = ? where id = ?");
    $stmt->bind_param("iisiii", $stmt_stud_id, $stmt_exam_id, $stmt_expected_exam_results, $stmt_status, $stmt_term_target_id);
    $stmt_stud_id = $stud_id;
    $stmt_exam_id = $exam_id;
    $stmt_expected_exam_results = $expected_exam_results;
    $stmt_status = $audit_res;
    $stmt_term_target_id = $term_target_id;
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
