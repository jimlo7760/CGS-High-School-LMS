<?php
require_once 'LoginCredentials.php';
/**
 * For teacher to insert student's violation
 * QWQ
 *
 * @param string $level_severity <p>
 * Student's violation level range from 0 - 10 (0 is minimum, 10 is maximum)
 * </p>
 * @param string $title_of_violation <p>
 * Student's violation name
 * </p>
 * @param string $content_of_violation <p>
 * Place where student did this violation
 * </p>
 * @param string $time_of_violation <p>
 * time where student did this violation
 * </p>
 * @return int $result <p>
 * If insert success, $result return 1, else result return 0
 * </p>
 * @author Binghe Yi
 */
function InsertNewViolation($level_severity, $title_of_violation, $content_of_violation, $time_of_violation, $stud_id) {
    $conn = createconn();
    $stmt = $conn->prepare('Insert into stud_violation(level_of_severity, title_of_violation, content_of_violation, time_of_violation, create_time, stud_id) values (?,?,?,?,?,?)');
    $stmt->bind_param('issssi', $insertLevelSeversity, $insertTitleOfViolation, $insertContentOfViolation, $insertTimeOfViolation, $insertCreateTime, $insertStudId);
    $insertLevelSeversity = $level_severity;
    $insertTitleOfViolation = $title_of_violation;
    $insertContentOfViolation = $content_of_violation;
    $insertTimeOfViolation = $time_of_violation;
    $insertCreateTime = date('Y-m-d H:i:s');
    $insertStudId = $stud_id;
    $stmt->execute();
    $result = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    return $result;
}

/**
 * For teacher to update student's violation
 *
 *
 * @param string $level_severity <p>
 * Student's violation level range from 0 - 10 (0 is minimum, 10 is maximum)
 * </p>
 * @param string $title_of_violation <p>
 * Student's violation name
 * </p>
 * @param string $content_of_violation <p>
 * Place where student did this violation
 * </p>
 * @param string $time_of_violation <p>
 * time where student did this violation
 * </p>
 * @return int $result <p>
 * If update success, $result return 1, else result return 0
 * </p>
 * @author Binghe Yi
 */
function UpdateStudVio($level_severity, $title_of_violation, $content_of_violation, $time_of_violation, $stud_id, $status)
{
    $conn = createconn();
    $stmt = $conn->prepare('update stud_violation set level_of_severity = ?, title_of_violation = ?, content_of_violation = ?, time_of_violation = ?, update_time = ?, status = ? where stud_id = ?');
    $stmt->bind_param('issssii', $updateLevelOfSevreity, $updateTitleOfVio, $updateConteOfVio, $updateTimeOfVio, $updateUpdateTime, $updateStatus, $updateStudId);
    $updateLevelOfSevreity = $level_severity;
    $updateTitleOfVio = $title_of_violation;
    $updateConteOfVio = $content_of_violation;
    $updateTimeOfVio = $time_of_violation;
    $updateUpdateTime = date('Y-m-d H:i:s');
    $updateStatus = $status;
    $updateStudId = $stud_id;
    $stmt->execute();
    $result = $stmt->affected_rows;
    if ($result > 0) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        return $error;
    }
}

/**
 * Fetching All violations he/she did from a student <br>
 *
 * @param int $stud_id Student id to search.
 * @return mixed All violations a student did.
 * @author Binghe Yi
 */
function FetchStudViolationsByStudId($stud_id)
{
    $conn = createconn();
    $stmt = $conn->prepare('select * from stud_violation where stud_id = ?');
    $stmt->bind_param('i', $searchStudId);
    $searchStudId = $stud_id;
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all();
    if ($result > 0) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        return $error;
    }
}

/**
 * Fetch student violation by English name or Chinese name.
 *
 * @param String $stud_name Student's name
 * @return mixed array If successfully executed: [True, all violations entries as array] <br> If not: [False, empty array]
 */
function FetchStudViolationsByStudName($stud_name) {
    $conn = createconn();
    $query = "select id from stud_info where chi_name=?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $stmt_chi_name);
    $stmt_chi_name = $stud_name;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    if (!$res) {
        $query = "select id from stud_info where eng_name=?;";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $stmt_eng_name);
        $stmt_eng_name = $stud_name;
        $stmt->execute();
        $res = $stmt->get_result()->fetch_all();
        $stmt->close();
        $conn->close();
        if (!$res) {
            return [false, $res];
        } else {
            $fetch_res = [];
            foreach ($res as $id_array) {
                $id = $id_array[0];
                $fetch_res[] = FetchStudViolationsByStudId($id);
            }
            return [true, $fetch_res];
        }
    } else {
        $stmt->close();
        $conn->close();
//        return [true, $res];
        $fetch_res = [];
        foreach ($res as $id_array) {
            $id = $id_array[0];
            $fetch_res[] = FetchStudViolationsByStudId($id);
        }
        return [true, $fetch_res];
    }

}

/**
 *  Fetch student violation by student number.
 *
 * @param String $stud_num Student's number
 * @return mixed array If successfully executed: [True, all violations entries as array] <br> If not: [False, empty array]
 *
 */
function FetchStudViolationByStudNum($stud_num) {
    $conn = createconn();
    $query = "select id from stud_info where stud_number=?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $stmt_stud_number);
    $stmt_stud_number = $stud_num;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    if (!$res) {
        $stmt->close();
        $conn->close();
        return [false, $res];
    } else {
//        return [true, $res];
        $stmt->close();
        $conn->close();
        $id = $res[0][0];
        $fetch_res = FetchStudViolationsByStudId($id);
        return [true, $fetch_res];
    }
}

/**
 * Fetch student violations by homeroom class.
 *
 * @param int $target_program The program of the homeroom class.
 * @param int $target_grade The grade of the homeroom class.
 * @param int $target_class The class of the homeroom class.
 * @return mixed array If successfully executed: [True, all violations entries as array] <br> If not: [False, empty array]
 */
function FetchStudViolationByHRClass($target_program, $target_grade, $target_class) {
    $conn = createconn();
    $q = "select stud_ids from homeroom_class where program=? and grade=? and class=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("iii", $stmt_program, $stmt_grade, $stmt_class);
    $stmt_program = $target_program;
    $stmt_grade = $target_grade;
    $stmt_class = $target_class;
    $stmt->execute();
    $res = $stmt->get_result()->fetch_all();
    if (!$res) {
        $stmt->close();
        $conn->close();
        return [false, $res];
    } else {
        $raw_stud_ids = $res[0][0];
        $stud_ids = explode(",", $raw_stud_ids);
//        return [true, $stud_ids];
        $fetch_res = [];
        foreach ($stud_ids as $id) {
            $fetch_res[] = FetchStudViolationsByStudId($id);
        }
        return [true, $fetch_res];
    }
}