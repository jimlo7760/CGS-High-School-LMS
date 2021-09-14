<?php
require_once 'LoginCredentials.php';
function InsertNewHomeRoomClass($grade, $program, $class, $home_room_teacher_id, $stud_ids, $num_of_stud) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into homeroom_class(grade, program, class, homeroom_teacher_id, stud_ids, num_of_stud, create_time) values (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiisis", $stmt_grade, $stmt_program, $stmt_class, $stmt_home_room_teacher_id, $stmt_stud_id, $stmt_num_of_stud, $stmt_create_time);
    $stmt_grade = $grade;
    $stmt_program = $program;
    $stmt_class = $class;
    $stmt_home_room_teacher_id = $home_room_teacher_id;
    $stmt_stud_id = $stud_ids;
    $stmt_num_of_stud = $num_of_stud;
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

function updateHomeroomClass($homeroom_class_id, $grade, $program, $class, $home_room_teacher_id, $stud_ids, $num_of_stud, $class_num, $ranking, $updater_id, $audit_res){
    $conn = createconn();
    $stmt = $conn->prepare("update homeroom_class set grade = ?, program = ?, class = ?, homeroom_teacher_id = ?, stud_ids=?, num_of_stud = ?, class_num = ?, ranking = ?, updater_id = ?, update_time = ?, status=? where id = ?");
    $stmt->bind_param("iiiisiisisii", $stmt_grade, $stmt_program, $stmt_class, $stmt_home_room_teacher_id, $stmt_stud_ids, $stmt_num_of_stud, $class_num, $stmt_ranking, $stmt_updater_id, $stmt_update_time, $stmt_status, $stmt_homeroom_class_id);
    $stmt_grade = $grade;
    $stmt_program = $program;
    $stmt_class = $class;
    $stmt_home_room_teacher_id = $home_room_teacher_id;
    $stmt_stud_ids = $stud_ids;
    $stmt_num_of_stud = $num_of_stud;
    $stmt_class_num = $class_num;
    $stmt_ranking = $ranking;
    $stmt_updater_id = $updater_id;
    $stmt_update_time = date("Y-m-d H:i:s");
    $stmt_status = $audit_res;
    $stmt_homeroom_class_id = $homeroom_class_id;
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
 * Fetch a homeroom class by its teacher's id.
 *
 * @param int $hr_teacher_id Homeroom teacher's id.
 * @return array If successfully executed: [True, homeroom class info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * Sometimes, it's better to keep your clothes on.
 */
function FetchHRClassByHRTeacherId($hr_teacher_id) {
    $conn = createconn();
    $q = "select * from homeroom_class where homeroom_teacher_id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $s_hr_teacher_id);
    $s_hr_teacher_id = $hr_teacher_id;
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
 * Fetch a homeroom class by its  id.
 *
 * @param int $hr_id Homeroom class id.
 * @return array If successfully executed: [True, homeroom class info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 *
 * Sometimes, it's better to keep your clothes off.
 */

function FetchHRClassById($hr_id) {
    $conn = createconn();
    $q = "select * from homeroom_class where id=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("i", $s_id);
    $s_id = $hr_id;
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
 * Fetching all student ids and all related class info.
 *
 * @return array If successfully executed: [True, homeroom class info as array] <br> If not: [False, empty array]
 * @author Yiming Su
 */
function FetchAllStudIdAndHRClasses() {
    $conn = createconn();
    $q = "select grade, program, class, stud_ids, id from homeroom_class;";
    $stmt = $conn->prepare($q);
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

