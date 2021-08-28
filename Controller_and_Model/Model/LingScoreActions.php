<?php
require_once 'LoginCredentials.php';

/**
 * Inserting a new linguistic score.
 *
 * @param int $stud_id Student id.
 * @param string $test_name Test name.
 * @param string $test_score Test Score, format: L,R,W,S
 * @param string $overall_score The Overall score.
 * @param string $reflection Reflection of test.
 * @param string $test_date Test date.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, empty array]
 */
function InsertNewLingScore(int $stud_id, string $test_name, string $test_score,
                            string $overall_score, string $reflection, string $test_date) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into ling_score (stud_id, test_name, test_score, overall_score, reflection, 
                           test_date, create_time, update_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $stmt_stud_id, $stmt_test_name, $stmt_test_score, $stmt_overall_score,
                      $stmt_reflection, $stmt_test_date, $stmt_create_time, $stmt_update_time);
    $stmt_stud_id = $stud_id;
    $stmt_test_name = $test_name;
    $stmt_test_score = $test_score;
    $stmt_overall_score = $overall_score;
    $stmt_reflection = $reflection;
    $stmt_test_date = $test_date;
    $stmt_create_time = date('Y-m-d H:i:s');
    $stmt_update_time = date('Y-m-d H:i:s');
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
 * Fetch a student's linguistic scores.
 *
 * @param int $stud_id student's id.
 * @return array If successfully executed: [True, select results] <br> If not: [False, empty array]
 */
function FetchStudLingScore(int $stud_id) {
    $conn = createconn();
    $stmt = $conn->prepare("select * from ling_score where stud_id = ?");
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
 * Update the details of a score.
 *
 * @param int $stud_id Student id.
 * @param int $ling_score_id linguistic score id.
 * @param string $test_name Test name.
 * @param string $test_score Test Score, format: L,R,W,S
 * @param string $overall_score The Overall score.
 * @param string $reflection Reflection of test.
 * @param string $test_date Test date.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, empty array]
 */
function UpdateLingScoreDetail(int $ling_score_id, int $stud_id, string $test_name, string $test_score,
                               string $overall_score, string $reflection, string $test_date) {
    $conn = createconn();
    $stmt = $conn->prepare("update ling_score set test_name = ?, test_score = ?, test_date = ?, overall_score = ?,
                           update_time = ?, reflection = ? where stud_id = ? and id = ?");
    $stmt->bind_param("ssssssii", $stmt_test_name, $stmt_test_score, $stmt_test_date,
                      $stmt_overall_score, $stmt_update_time, $stmt_reflection, $stmt_stud_id, $stmt_id);
    $stmt_test_name = $test_name;
    $stmt_test_score = $test_score;
    $stmt_test_date = $test_date;
    $stmt_overall_score = $overall_score;
    $stmt_update_time = date('Y-m-d H:i:s');
    $stmt_reflection = $reflection;
    $stmt_stud_id = $stud_id;
    $stmt_id = $ling_score_id;
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
 * @param int $stud_id Student id.
 * @param int $ling_score_id linguistic score id.
 * @param int $status Status, 1 - active, 0 - deactivated.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, empty array]
 */
function UpdateLingScoreStatus(int $stud_id, int $ling_score_id, int $status) {
    $conn = createconn();
    $stmt = $conn->prepare("update ling_score set status = ? where stud_id = ? and id = ?");
    $stmt->bind_param("iii", $stmt_status, $stmt_stud_id, $stmt_id);
    $stmt_status = $status;
    $stmt_stud_id = $stud_id;
    $stmt_id = $ling_score_id;
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