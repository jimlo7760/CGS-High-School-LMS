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

/**
 * Authentication of User. <br>
 *
 * user_role: <br>
 * 0 - student. <br>
 * 1 - teacher. <br>
 *
 * @param int $school_num school account number.
 * @param int $password password.
 * @return array If user authenticated: [true, user_role, entry in db] <br> if not: [false, user_role, error]
 * @author Yiming Su
 */
function UserAuth($school_num, $password) {
    $isStu = false;
    $isTea = false;
    $conn = createconn();
    $q = "select * from teacher_info where teacher_num=?"; // First query, check if user is teacher
    $stmt = $conn->prepare($q);
    $stmt->bind_param("s", $stmt_teacher_num);
    $stmt_teacher_num = $school_num;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    if (count($res) > 0) {
        $isTea = true;
        $db_pw = $res[0][4];
        if ($db_pw === $password) {
            $stmt->close();
            $conn->close();
            return [true, 1, $res[0]];
            // update login time.
        } else {
            $stmt->close();
            $conn->close();
            return [false, 1, "Wrong password."];
            // back to login screen.
        }
    } else {
       $q = "select * from stud_info where stud_number=?"; // Second query, check if user is student
       $stmt = $conn->prepare($q);
       $stmt->bind_param("s", $stmt_stud_number);
       $stmt_stud_number = $school_num;
       $stmt->execute();
       $res = $stmt->get_result()->fetch_all();
       if (count($res) > 0) {
           $isStu = true;
           $db_pw = $res[0][9];
           if ($db_pw === $password) {
               $stmt->close();
               $conn->close();
               return [true, 0, $res[0]];
               // update login time.
           } else {
               $stmt->close();
               $conn->close();
               return [false, 0, "Wrong password."];
               // back to login screen.
           }
       }
    }
    if ($isStu == false && $isTea == false) { // If not above, then something wrong in the account num provided.
        $stmt->close();
        $conn->close();
        return [false, -1, "Wrong school account number."];
    }
}

/**
 * Updating the last login time for an user. <br>
 *
 * 0 - Student table. <br>
 * 1 - Teacher table <br>
 *
 * @param int $id user id
 * @param int $user_role user role used to determine table
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 * @author Yiming Su
 */
function UpdateLoginTime($id, $user_role) {
    $conn = createconn();
    $q = "";
    if ($user_role == 0) {
        $q = "update stud_info set last_login_time=? where id=?";
    } else if ($user_role == 1) {
        $q = "update teacher_info set last_login_time=? where id=?";
    }
    $stmt = $conn->prepare($q);
    $stmt->bind_param("si", $stmt_last_login_time, $stmt_id);
    $stmt_last_login_time = date("Y-m-d H:i:s");
    $stmt_id = $id;
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
 * Update the email and avatar by student id.
 *
 * @param int $stud_id Student's id.
 * @param String $email Student's email address.
 * @param String $avatar_file_name Avatar's file name only.
 * @param int $updator_id Updater's id.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 *
 * @author Yiming Su
 */
function UpdateEmailAndAvatar($stud_id, $email, $avatar_file_name, $updator_id) {
    $conn = createconn();
    $query = "update stud_info set avatar_address=?, email_address=?, updater_id=?, update_time=? where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssisi", $stmt_avatar_file_name, $stmt_email_address, $stmt_updater_id, $stmt_update_time, $stmt_stud_id);
    $stmt_avatar_file_name = $avatar_file_name;
    $stmt_email_address = $email;
    $stmt_updater_id = $updator_id;
    $stmt_update_time = date("Y-m-d H:i:s");
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
 * Fetch a student's info by student id.
 *
 * @param int $stud_id Student id.
 * @return array If successfully executed: [True, Term target info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 */
function FetchStudInfoByStudId($stud_id) {
    $conn = createconn();
    $query = "select * from stud_info where id=?";
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

