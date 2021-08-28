<?php
require_once 'LoginCredentials.php';
/**
 * Insert new expected course for a student.
 *
 * @param int $stud_id the student's id.
 * @param string $course_name Name of the course.
 * @param int $level course level, 0: SL, 1: HL.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, empty array]
 */
function InsertNewExpectedCourse(int $stud_id, string $course_name, int $level) { // level: 0: SL, 1: HL
    $conn = createconn();
    $stmt = $conn->prepare("insert into expected_curr (stud_id, course_name, level, create_time, 
                           update_time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiss", $stmt_stud_id, $stmt_course_name, $stmt_level, $stmt_create_time,
                      $stmt_update_time);
    $stmt_stud_id = $stud_id;
    $stmt_course_name = $course_name;
    $stmt_level = $level;
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
 * Fetch all expected course from a student.
 *
 * @param int $stud_id the student's id.
 * @return mixed|string If successfully executed: [True, select results] <br> If not: [False, empty array]
 */
function FetchStudExpectedCurrByStudId(int $stud_id) {
    $conn = createconn();
    $stmt = $conn->prepare("select * from expected_curr where stud_id = ?");
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
 * Update a course entry's detail.
 *
 * @param int $stud_id student's id.
 * @param string $course_name Name of the course.
 * @param int $level course level, 0: SL, 1: HL.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, empty array]
 */
function UpdateExpectedCourseDetail(int $stud_id, string $course_name, int $level) {
    $conn = createconn();
    $stmt = $conn->prepare("update expected_curr set course_name = ?, level = ?, update_time = ? where
                           stud_id = ?");
    $stmt->bind_param("sisi", $stmt_course_name, $stmt_level, $stmt_update_time, $stmt_stud_id);
    $stmt_course_name = $course_name;
    $stmt_level = $level;
    $stmt_update_time = date('Y-m-d H:i:s');
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

/**
 * Update a course entry's status.
 *
 * @param int $stud_id student's id.
 * @param int $course_id ID of the course entry in table.
 * @param int $status Status of course, 0: deactivated, 1: active.
 * @return array If successfully executed: [True, affected rows] <br> If not: [False, empty array]
 */
function UpdateExpectedCourseStatus(int $stud_id, int $course_id, int $status) {
    $conn = createconn();
    $stmt = $conn->prepare("update expected_curr set status = ? where stud_id = ? and id = ?");
    $stmt->bind_param("iii", $stmt_status, $stmt_stud_id, $stmt_id);
    $stmt_status = $status;
    $stmt_stud_id = $stud_id;
    $stmt_id = $course_id;
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

