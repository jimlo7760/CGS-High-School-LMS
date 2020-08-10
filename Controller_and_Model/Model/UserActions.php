<?php
require_once "LoginCredentials.php";

/**
 * For administrator to review entries in stud_info.
 *
 * <br> For the value of reviewing result:
 * <br>
 * 0 - waiting for review. <br>
 * 1 - approved with information provided and the account is activated. <br>
 * 2 - rejected due to issues in information provided. <br>
 * 3 - account suspended due to specific reasons, e.g. Student/teacher transfered to another school. <br>
 *
 * @param int $stud_info_id <p>
 * Target stud_info id
 * </p>
 * @param int $review_result <p>
 * Value for "status" column
 * </p>
 *
 * @author Yiming Su
 *
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 *
 */
function ReviewStudInfo($stud_info_id, $review_result) {
    $conn = createconn();
    $query = "update stud_info set status=? where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $stmt_status, $stmt_id);
    $stmt_status = $review_result;
    $stmt_id = $stud_info_id;
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