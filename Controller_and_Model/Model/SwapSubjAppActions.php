<?php
require_once "LoginCredentials.php";

/**
 * For students to submit subject-changing requests.
 *
 * @param int $stud_id Student's id
 * @param int $orig_subj_class_id Original class's id
 * @param int $target_subj_class_id Target class's id.
 * @param string $reason_of_swapping Reason of swapping.
 * @param int $origin_teacher_id origin teacher's id.
 * @param int $target_teacher_id target teacher's id.
 * @param int $hr_id homeroom teacher's id.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, affected rows]
 * @author Yiming Su
 *
 * The world is simple, humans are complicated.
 */
function InsertNewSwapSubjectApplication(int $stud_id, int $orig_subj_class_id, int $target_subj_class_id, string $reason_of_swapping, int $origin_teacher_id, int $target_teacher_id, int $hr_id)
{
    $conn = createconn();
    $q = "insert into swap_subj_application (stud_id, orig_subj_class_id, target_subj_class_id, reason_of_swapping, create_time, 
                                   required_origin_subj_teacher, required_tar_subj_teacher, required_HR) values (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("iiissiii", $stmt_stud_id, $stmt_orig_subj_class_id, $stmt_target_subj_class_id, $stmt_reason_of_swapping, $stmt_create_time,
        $stmt_required_origin_subj_teacher, $stmt_required_tar_subj_teacher, $stmt_required_HR);
    $stmt_stud_id = $stud_id;
    $stmt_orig_subj_class_id = $orig_subj_class_id;
    $stmt_target_subj_class_id = $target_subj_class_id;
    $stmt_reason_of_swapping = $reason_of_swapping;
    $stmt_create_time = date("Y-m-d H:i:s");
    $stmt_required_origin_subj_teacher = $origin_teacher_id;
    $stmt_required_tar_subj_teacher = $target_teacher_id;
    $stmt_required_HR = $hr_id;
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
 * @author Yiming Su
 */
function UpdateSwapApplicationById($app_id, $updater_id, $audit_res)
{
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
 * Retrieving one application's information by application id.
 *
 * @param int $app_id Application id
 * @return array If successfully executed: [True, application info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 */
function FetchSwapSubjAppById($app_id)
{
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

/**
 * Retrieving one application's information by student id.
 *
 * @param int $stud_id Student id.
 * @return array If successfully executed: [True, application info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 */
function FetchSwapSubjAppByStudId($stud_id)
{
    $conn = createconn();
    $q = "select * from swap_subj_application where stud_id=?";
    $stmt = $conn->prepare($q);
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
 * @param $orig_teacher_id int ID of origin teacher
 * @return array If fetch successfully: [True, affected_rows]; <br> If unsuccessfully: [False, error_information]
 */
function FetchSwapAppByOrigSubjTeaId($orig_teacher_id)
{
    $conn = createconn();
    $q = "select * from swap_subj_application where required_origin_subj_teacher=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_origin_teacher_id);
    $stmt_origin_teacher_id = $orig_teacher_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    if ($res) {
        $stmt->close();
        $conn->close();
        return [True, $res];
    } else {
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        return [False, $error];
    }
}

/**
 * @param $tar_teacher_id int ID target teacher
 * @return array If fetch successfully: [True, affected_rows]; <br> If unsuccessfully: [False, error_information]
 */
function FetchSwapAppByTarSubjTeaId($tar_teacher_id)
{
    $conn = createconn();
    $q = "select * from swap_subj_application where required_HR=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_tar_teacher_id);
    $stmt_tar_teacher_id = $tar_teacher_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    if ($res) {
        $stmt->close();
        $conn->close();
        return [True, $res];
    } else {
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        return [False, $error];
    }
}

/**
 * @param $HR_teacher_id
 * @return array
 */
function FetchSwapAppByHRTeaId($HR_teacher_id)
{
    $conn = createconn();
    $q = "select * from swap_subj_application where required_HR=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $stmt_HR_teacher_id);
    $stmt_HR_teacher_id = $HR_teacher_id;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    if ($res) {
        $stmt->close();
        $conn->close();
        return [True, $res];
    } else {
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        return [False, $error];
    }
}