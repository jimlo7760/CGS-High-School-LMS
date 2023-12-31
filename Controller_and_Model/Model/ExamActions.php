<?php
require_once 'LoginCredentials.php';
function InsertNewExam($exam_title, $target_grades, $exam_description, $exam_type, $exam_max_score, $exam_start_date) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into exam(exam_title, target_grades,  exam_description, exam_type, max_score, exam_start_date,  create_time) values (?, ?, ?,?, ?, ?)");
    $stmt->bind_param("sisiiss", $stmt_exam_title, $stmt_target_grades, $stmt_exam_description, $stmt_exam_type, $stmt_max_score, $stmt_exam_start_date, $stmt_create_time);
    $stmt_exam_title = $exam_title;
    $stmt_target_grades = $target_grades;
    $stmt_exam_description = $exam_description;
    $stmt_exam_type = $exam_type;
    $stmt_max_score = $exam_max_score;
    $stmt_exam_start_date = $exam_start_date;
    $stmt_create_time= date("Y-m-d H:i:s");
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
    $stmt = $conn->prepare("insert into exam set exam_title = ?, target_grades= ?, subj_ids = ?, exam_start_time = ?, duration_in_days = ?, status = ? where id = ?");
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

/**
 * Fetching an exam record by its id.
 *
 * @param int $exam_id Exam record id.
 * @return array If successfully executed: [True, exam entries as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * I like womans, no matter they're from earth or not. : D
 */
function FetchExamById($exam_id) {
    $conn = createconn();
    $q = "select * from exam where id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $s_id);
    $s_id = $exam_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}

/**
 * Fetching all active exams.
 *
 * @return array If successfully executed: [True, exam entries as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * I like womans, no matter they're from earth or not. : D
 */
function FetchActiveExams() {
    $conn = createconn();
    $q = "select * from exam where status=1";
    $stmt = $conn->prepare($q);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}

/**
 * Fetching all exams.
 *
 * @return array If successfully executed: [True, exam entries as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 */
function FetchAllExams() {
    $conn = createconn();
    $q = "select * from exam";
    $stmt = $conn->prepare($q);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}

/**
 * @param int $class_id the id of class
 * @return array Scores of the students in this class
 */
function FetchExamByClassId($class_id){
    $conn = createconn();
    $q = "select * from exam where class_id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $c_id);
    $c_id = $class_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    $stmt->close();
    $conn->close();
    if (!$res){
        return [false, $res];
    }else {
        return [true, $res];
    }
}

/**
 * @param $exam_id int the id of exam
 * @return array If successfully executed: [True, deleted exam] <br> If not: [False, error info.]
 * @author Yinzoen Louh
 * @date 2021/12/8
 */
function DeleteExamByExamId($exam_id){
    $conn = createconn();
    $q = "delete from exam where id = ?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_id);
    $stmt_id = $exam_id;
    $stmt->execute();
    $res = $stmt->affected_rows;
    if($res){
        $stmt->close();
        $conn->close();
        return [True, $res];
    }else{
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        return [False, $error];
      }
}