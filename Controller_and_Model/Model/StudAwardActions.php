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
 * Fetch student awards by English name or Chinese name.
 *
 * @param String $stud_name Student's name
 * @return mixed array If successfully executed: [True, all awards entries as array] <br> If not: [False, empty array]
 */
function FetchStudAllAwardsByStudName($stud_name) {
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
                $fetch_res[] = FetchStudAllAwardsByStudId($id);
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
            $fetch_res[] = FetchStudAllAwardsByStudId($id);
        }
        return [true, $fetch_res];
    }

}

/**
 *  Fetch student awards by student number.
 *
 * @param String $stud_num Student's number
 * @return mixed array If successfully executed: [True, all awards entries as array] <br> If not: [False, empty array]
 *
 */
function FetchStudAllAwardsByStudNum($stud_num) {
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
        $fetch_res = FetchStudAllAwardsByStudId($id);
        return [true, $fetch_res];
    }
}

/**
 * Fetch students' awards by homeroom class.
 *
 * @param int $target_program The program of the homeroom class.
 * @param int $target_grade The grade of the homeroom class.
 * @param int $target_class The class of the homeroom class.
 * @return mixed array If successfully executed: [True, all award entries as array] <br> If not: [False, empty array]
 */
function FetchStudAllAwardsByHRClass($target_program, $target_grade, $target_class) {
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
            $fetch_res[] = FetchStudAllAwardsByStudId($id);
        }
        return [true, $fetch_res];
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
 * Inserting new award entry into stud_award table.
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