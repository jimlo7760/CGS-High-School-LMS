<?php
require_once "LoginCredentials.php";

/**
 * For students to submit subject-changing requests.
 *
 * @param int $stud_id Student's id
 * @param int $orig_subj_class_id Original class's id
 * @param int $target_subj_class_id Target class's id.
 * @param string $reason_of_swapping Reason of swapping.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 * @author Yiming Su
 *
 * The world is simple, humans are complicated.
 */
function InsertNewSwapSubjectApplication($stud_id, $orig_subj_class_id, $target_subj_class_id, $reason_of_swapping) {
    $conn = createconn();
    $q = "insert into swap_subj_application (stud_id, orig_subj_class_id, target_subj_class_id, reason_of_swapping, create_time) values (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("iiiss", $stmt_stud_id, $stmt_orig_subj_class_id, $stmt_target_subj_class_id, $stmt_reason_of_swapping, $stmt_create_time);
    $stmt_stud_id = $stud_id;
    $stmt_orig_subj_class_id = $orig_subj_class_id;
    $stmt_target_subj_class_id = $target_subj_class_id;
    $stmt_reason_of_swapping = $reason_of_swapping;
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

/**
 * For administrator to review a subject-changing request. <br>
 *
 * 0 - Not reviewed yet. <br> 1 - Approved. <br> 2 - Rejected. <br>
 *
 * @param int $app_id Application id.
 * @param int $updater_id Updater's id.
 * @param int $audit_res Result of reviewing.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 */
function UpdateSwapApplicationById($app_id, $updater_id, $audit_res) {
    $conn = createconn();
    $q = "update swap_subj_application set updater_id=?, update_time=?, status=? where id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("isii", $s_updater_id, $s_update_time, $s_status, $s_id);
    $s_updater_id = $updater_id;
    $s_update_time = date("Y-m-d H:i:s");
    $s_status = $audit_res;
    $s_id = $app_id;
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
 * Retrieving one application's information by id.
 *
 * @param int $app_id
 * @return array If successfully executed: [True, application info as array] <br> If not: [False, empty array]
 */
function FetchSwapSubjAppById($app_id) {
    $conn = createconn();
    $q = "select * from swap_subj_application where id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_id);
    $stmt_id = $app_id;
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