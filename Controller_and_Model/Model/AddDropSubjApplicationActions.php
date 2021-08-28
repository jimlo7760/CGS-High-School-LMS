<?php
require_once "../Model/LoginCredentials.php";
/**
 * Submitting a new add/drop request.
 *
 * @param int $stud_id student's id.
 * @param int $target_subj_class_id the target class id of add/drop action.
 * @param int $action the action, 1 - add, 0 - drop.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, empty array]
 * @author Yiming Su
 */
function InsertNewAddDropApp(int $stud_id, int $target_subj_class_id, int $action) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into add_drop_subj_application (stud_id, target_subj_class_id, 
                            add_drop, create_time, update_time) values (?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiss", $stmt_stud_id, $stmt_target_subj_class_id, $stmt_add_drop,
                      $stmt_create_time, $stmt_update_time);
    $stmt_stud_id = $stud_id;
    $stmt_target_subj_class_id = $target_subj_class_id;
    $stmt_add_drop = $action;
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
 * Fetch all add/ddrop applications from a given student id.
 *
 * @param int $stud_id student's id.
 * @return array If successfully executed: [True, select results] <br> If not: [False, empty array]
 * @author Yiming Su
 */
function FetchStudAddDropApp(int $stud_id) {
    $conn = createconn();
    $stmt = $conn->prepare("select * from add_drop_subj_application where stud_id = ?");
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
 * For admins to review an add/drop request.
 *
 * @param int $app_id the application id.
 * @param int $stud_id student id.
 * @param string $comment comment of admin.
 * @param int $status Status of request <br>
 * 0 - Awaiting subject teacher approval <br>
 * 1 - Awaiting homeroom teacher approval <br>
 * 2 - subject teacher disapproved <br>
 * 3 - Awaiting department's approval <br>
 * 4 - Subject teacher approved, but HR teacher disapproved <br>
 * 5 - Subject teacher, HR teacher, and department all approved. <br>
 * 6 - Subject teacher and HR teacher approved, but department disapproved.
 * @return array
 */
function UpdateStudAddDropStatus(int $app_id, int $stud_id, string $comment, int $status) {
    $conn = createconn();
    $stmt = $conn->prepare("update add_drop_subj_application set admin_comment = ?, status = ?, update_time = ?
                           where id = ? and stud_id = ?");
    $stmt->bind_param("sisii", $stmt_admin_comment, $stmt_status, $stmt_update_time, $stmt_id,
                      $stmt_stud_id);
    $stmt_admin_comment = $comment;
    $stmt_status = $status;
    $stmt_update_time = date('Y-m-d H:i:s');
    $stmt_id = $app_id;
    $stmt_stud_id = $stud_id;
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
