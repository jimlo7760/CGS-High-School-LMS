<?php
require_once "LoginCredentials.php";

/**
 * Fetching all award entries from a student <br>
 *
 * @param int $stud_id Student id to search.
 * @return array If successfully executed: [True, all award entries as array] <br> If not: [False, empty array]
 * @author Yiming Su
 */
function FetchStudAllAwardsByStudId($stud_id) {
    $conn = createconn();
    $query = "select * from stud_award where stud_id=?";
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
 * For administrator to review entries in stud_award. <br>
 *
 * 0 - Award are invalid. <br>
 * 1 - Award are valid. <br>
 *
 * @param int $stud_id Student id.
 * @param int $award_id award id.
 * @param int $audit_res Value for status.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 * @author Yiming Su
 */
function UpdateStudAwardByExamIdAndStudId($stud_id, $award_id, $audit_res) {
    $conn = createconn();
    $query = "update stud_award set status=? where id=? and stud_id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iii", $stmt_audit_res, $stmt_award_id, $stmt_stud_id);
    $stmt_audit_res = $audit_res;
    $stmt_award_id = $award_id;
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
 * Inserting new award extry into stud_award table.
 *
 * @param int $stud_id Student id.
 * @param int $comp_name Name of the competition
 * @param string $award_name Title of the award.
 * @param int $comp_time Time when the award is awarded.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 * @author Yiming Su
 */
function InsertNewAward($stud_id, $comp_name, $award_name, $comp_time) {
    $conn = createconn();
    $query = "insert into stud_award (stud_id, comp_name, award_name, comp_time, create_time, update_time) values (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("isssss", $stmt_stud_id, $stmt_comp_name, $stmt_award_name, $stmt_comp_time, $stmt_create_time, $stmt_update_time);
    $stmt_stud_id = $stud_id;
    $stmt_comp_name = $comp_name;
    $stmt_award_name = $award_name;
    $stmt_comp_time = $comp_time;
    $stmt_create_time = date("Y-m-d");
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