<?php
require_once "LoginCredentials.php";
/**
 * For administrator to review entries in stud_scores. <br>
 *
 * 0 - Scores are valid. <br>
 * 1 - Scores are invalid. <br>
 *
 * @param int $stud_id Student id.
 * @param int $exam_id Exam id.
 * @param int $audit_res Value for status.
 * @return int Affected rows of MySQL query.
 * @author Yiming Su
 */
function UpdateStudExamResultsByExamIdAndStudId($stud_id, $exam_id, $audit_res) {
    $conn = createconn();
    $query = "update stud_scores set status=? where exam_id=? and stud_id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iii", $stmt_audit_res, $stmt_exam_id, $stmt_stud_id);
    $stmt_audit_res = $audit_res;
    $stmt_exam_id = $exam_id;
    $stmt_stud_id = $stud_id;
    $stmt->execute();
    $res = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    return $res;
}

/**
 * Fetching all exam entries from a student <br>
 *
 * @param int $stud_id Student id to search.
 * @return mixed All exam entries from that student.
 * @author Yiming Su
 */
function FetchStudAllScoresByStudId($stud_id) {
    $conn = createconn();
    $query = "select * from stud_scores where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $stmt_stud_id);
    $stmt_stud_id = $stud_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    $stmt->close();
    $conn->close();
    return $res;
}

/**
 * Inserting new exam results into stud_scores table.
 *
 * @param int $stud_id Student id.
 * @param int $exam_id Exam id.
 * @param string $exam_results A string containing all results for all subjects in the exam.
 * @param int $updater_id Updater id.
 * @return int Affected rows of MySQL query.
 * @author Yiming Su
 */
function InsertNewScores($stud_id, $exam_id, $exam_results, $updater_id) {
    $conn = createconn();
    $query = "insert into stud_scores (stud_id, exam_id, exam_results, create_time, updater_id, update_time) values (?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iissis", $stmt_stud_id, $stmt_exam_id, $stmt_exam_results, $stmt_create_time, $stmt_updater_id, $stmt_update_time);
    $stmt_stud_id = $stud_id;
    $stmt_exam_id = $exam_id;
    $stmt_exam_results = $exam_results;
    $stmt_create_time = date("Y-m-d");
    $stmt_updater_id = $updater_id;
    $stmt_update_time = date("Y-m-d");
    $stmt->execute();
    $res = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    return $res;
}