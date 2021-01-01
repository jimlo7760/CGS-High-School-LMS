<?php
require_once "LoginCredentials.php";
require_once "ExamActions.php";
/**
 * For administrator to review entries in stud_scores. <br>
 *
 * 0 - Scores are valid. <br>
 * 1 - Scores are invalid. <br>
 *
 * @param int $stud_id Student id.
 * @param int $exam_id Exam id.
 * @param int $audit_res Value for status.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
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
    if (!$res) {
        return [false, $res];
    } else if ($res == 1) {
        return [true, $res];
    }
}

/**
 * Fetching all exam entries from a student <br>
 *
 * @param int $stud_id Student id to search.
 * @return array If successfully executed: [True, all exam entries as array] <br> If not: [False, empty array]
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
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}

/**
 * Inserting new exam results into stud_scores table.
 *
 * @param int $stud_id Student id.
 * @param int $exam_id Exam id.
 * @param string $exam_results A string containing all results for all subjects in the exam.
 * @param int $updater_id Updater id.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
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
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}

/**
 * Calculate the avg score of a subject in an exam.
 *
 * @param int $exam_id Exam id.
 * @param int $subj_id Subject id.
 * @return array If successfully executed: [True, avg score] <br> If not: [False, empty array]
 *
 * @author Yiming Su
 *
 * The first function of 2021
 */
function CalculateAvgScoreForASubjectInExam($exam_id, $subj_id) {
    $conn = createconn();
    $query = "select exam_results from stud_scores where exam_id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $stmt_exam_id);
    $stmt_exam_id = $exam_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    $subj_ids = FetchExamById($exam_id)[1][0][3];
    $subj_ids = explode(",", $subj_ids);
    $i = 0;
    while ($i < count($subj_ids)) {
       if ($subj_ids[$i] == $subj_id) {
           break;
       }
       $i++;
    }
    $stud_num = count($res);
    $tot_sum = 0;
    foreach ($res as $raw_scores) {
        $scores = explode(",", $raw_scores[0]);
        $tot_sum += $scores[$i];
    }
    $avg_score = $tot_sum / $stud_num;
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $avg_score];
    }
}

/**
 * Calculate Avg Score of an Exam, the 40 one.
 *
 * @param int $exam_id Exam id.
 * @return array If successfully executed: [True, avg score] <br> If not: [False, empty array]
 *
 * @author Yiming Su
 */
function CalculateAvgScoreOfExam($exam_id) {
    $conn = createconn();
    $query = "select exam_results from stud_scores where exam_id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $stmt_exam_id);
    $stmt_exam_id = $exam_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    $tot_sum = 0;
    $stud_num = count($res);
    foreach ($res as $raw_scores) {
        $scores = explode(",", $raw_scores[0]);
        foreach ($scores as $score) {
            $tot_sum += $score;
        }
    }
    $avg_score = $tot_sum / $stud_num;
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $avg_score];
    }
}