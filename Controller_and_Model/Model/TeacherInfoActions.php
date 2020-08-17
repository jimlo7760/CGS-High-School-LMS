<?php
require_once "LoginCredentials.php";

/**
 * Adding new teacher to db, waiting for approval.
 *
 * @param string $chi_name Chinese name in Chinese character.
 * @param string $eng_name English name.
 * @param string $email_address Email address.
 * @param string $password Password.
 * @param int $teacher_num Teacher's school account number.
 * @param int $subject_id subject id of teaching subject.
 * @param int $role role. (pending to edit)
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 * @author Yiming Su
 *
 * Sometimes I just hate this world. ha.
 */
function InsertNewTeacher($chi_name, $eng_name, $email_address, $password, $teacher_num, $subject_id, $role) {
    $conn = createconn();
    $q = "insert into teacher_info (chi_name, eng_name, email_address, password, teacher_num, subject_id, role, create_time) values (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("sssssiis", $stmt_chi_name, $stmt_eng_name, $stmt_email_address, $stmt_password, $stmt_teacher_num, $stmt_subject_id, $stmt_role, $stmt_create_time);
    $stmt_chi_name = $chi_name;
    $stmt_eng_name = $eng_name;
    $stmt_email_address = $email_address;
    $stmt_password = $password;
    $stmt_teacher_num = $teacher_num;
    $stmt_subject_id = $subject_id;
    $stmt_role = $role;
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
 * For administrator to review a teacher's account. <br>
 *
 * 0 - Teacher account inactive <br> 1 - Active.
 *
 * @param int $teacher_id id of target teacher account.
 * @param int $audit_res result of review.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 * @author Yiming Su
 */
function UpdateTeacherById($teacher_id, $audit_res) {
    $conn = createconn();
    $q = "update teacher_info set status=? where id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("ii", $stmt_status, $stmt_id);
    $stmt_status = $audit_res;
    $stmt_id = $teacher_id;
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
 * Retrieving one teacher's information by id.
 *
 * @param $teacher_id Teacher's id to search.
 * @return array If successfully executed: [True, teacher info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * Right or wrong only exists in novels.
 */
function FetchTeacherInfoById($teacher_id) {
    $conn = createconn();
    $q = "select * from teacher_info where id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_id);
    $stmt_id = $teacher_id;
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

