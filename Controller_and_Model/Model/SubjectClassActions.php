<?php
require_once 'LoginCredentials.php';
function InsertNewSubjectClass($subj_teacher_id, $subj_id, $stud_ids, $stud_num_limit, $grade) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into subject_class(subj_teacher_id, subj_id, stud_ids, stud_num_limt, grade, create_time) values (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisiii", $stmt_subj_teacher_id, $stmt_subj_id, $stmt_stud_ids, $stmt_num_limit, $stmt_grade, $stmt_create_time );
    $stmt_subj_id = $subj_id;
    $stmt_subj_teacher_id = $subj_teacher_id;
    $stmt_stud_ids = $stud_ids;
    $stmt_num_limit = $stud_num_limit;
    $stmt_grade = $grade;
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

function updateSubjectClass($subj_class_id, $subj_teacher_id, $subj_id, $stud_ids, $stud_num_limit, $grade, $avg_grade, $subj_ranking, $audit_res){
    $conn = createconn();
    $stmt = $conn->prepare("update subject_class set subj_teacher_id = ? subj_id = ?, stud_ids = ?, stud_num_limit = ?, grade = ?, avg_grade = ?, subj_ranking = ?, status = ? where id = ?");
    $stmt->bind_param('iisiidsii', $stmt_subj_teacher_id, $stmt_subj_id, $stmt_stud_ids, $stmt_num_limit, $stmt_grade, $stmt_avg_grade, $stmt_subj_ranking, $stmt_status, $stmt_subject_class_id);
    $stmt_subj_id = $subj_id;
    $stmt_subj_teacher_id = $subj_teacher_id;
    $stmt_stud_ids = $stud_ids;
    $stmt_num_limit = $stud_num_limit;
    $stmt_grade = $grade;
    $stmt_avg_grade = $avg_grade;
    $stmt_subj_ranking = $subj_ranking;
    $stmt_status = $audit_res;
    $stmt_subject_class_id = $subj_class_id;
    $res = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}