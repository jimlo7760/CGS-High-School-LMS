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

//function UpdateTermTarget($term_target_id, $stud_id, $exam_id, $expected_exam_results, $audit_res) {
//    $conn = createconn();
//    $stmt = $conn->prepare("update term_target set stud_id = ?, exam_id = ?, expected_exam_results = ?, status = ? where id = ?");
//    $stmt->bind_param("iisii", $stmt_stud_id, $stmt_exam_id, $stmt_expected_exam_results, $stmt_status, $stmt_term_target_id);
//    $stmt_stud_id = $stud_id;
//    $stmt_exam_id = $exam_id;
//    $stmt_expected_exam_results = $expected_exam_results;
//    $stmt_status = $audit_res;
//    $stmt_term_target_id = $term_target_id;
//    $stmt->execute();
//    $res = $stmt->affected_rows;
//    $stmt->close();
//    $conn->close();
//    if (!$res) {
//        return [false, $res];
//    } else {
//        return [true, $res];
//    }
//}

function UpdateTermTarget($target_id, $expected_exam_results){
    echo $target_id . '-';
    echo $expected_exam_results . '-';
    $conn = createconn();
    $q = "update term_target set expected_exam_results = ? where id = ?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("ii", $stmt_expected_exam_results, $stmt_target_id);
    $stmt_expected_exam_results = $expected_exam_results;
    $stmt_target_id = $target_id;
    $stmt->execute();
    $res = $stmt->affected_rows;
    echo $res;
    $stmt->close();
    $conn->close();
    return [True, $res];
}

/**
 * Fetch term target from a student. By student's id.
 *
 * @param int $stud_id Student's id.
 * @return array If successfully executed: [True, Term target info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * I like cats with dogs' attitude.
 */
function FetchTermTargetsByStudId($stud_id) {
    $conn = createconn();
    $q = "select * from term_target where stud_id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_id);
    $stmt_id = $stud_id;
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
 * Fetch term target by exam's id.
 *
 * @param int $exam_id exam's id.
 * @return array If successfully executed: [True, Term target info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * I like cats with dogs' attitude.
 */
function FetchTermTargetsByExamId($exam_id) {
    $conn = createconn();
    $q = "select * from term_target where exam_id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_id);
    $stmt_id = $exam_id;
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
 * Fetch term target by exam's id and a stud id.
 *
 * @param int $exam_id exam's id.
 * @param int $stud_id stud's id
 * @return array If successfully executed: [True, Term target info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * I like cats with dogs' attitude.
 */
function FetchTermTargetsByExamIdAndStudId($exam_id, $stud_id) {
    $conn = createconn();
    $q = "select * from term_target where exam_id=? and stud_id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("ii", $s_exam_id, $s_stud_id);
    $s_exam_id = $exam_id;
    $s_stud_id = $stud_id;
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
