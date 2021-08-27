<?php
require_once 'LoginCredentials.php';
/**
 * For student to insert the university he/she wants to go
 * QWQ
 *
 * @param string $univ_name <p>
 * Student's chosen university's name
 * </p>
 * @param int $stud_id <p>
 * Student's id (reference to their profile)
 * </p>
 * @return array $result <p>
 * If insert success, $result return 1, else result return 0
 * </p>
 * @author Binghe Yi
 */
function InsertNewUniv($univ_name, $major, $stud_id) {
    $univ_num = count(FetchStudUniv($stud_id));
    if ($univ_num == 4) {
        return [false, "Limit reached"];
    } else {
        $conn = createconn();
        $stmt = $conn->prepare('Insert into stud_univ(univ_name, create_time, major, stud_id) values (?,?,?,?)');
        $stmt->bind_param('sssi',  $insertUnivName, $insertCreateTime, $insertMajor, $insertStudId);
        $insertUnivName = $univ_name;
        $insertCreateTime = date('Y-m-d H:i:s');
        $insertMajor = $major;
        $insertStudId = $stud_id;
        $stmt->execute();
        $result = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return [true, $result];
    }
}

/**
 * For student to update the university he/she wants to go
 *
 *
 * @param string $univ_name <p>
 * Student's chosen university's name
 * </p>
 * @param int $stud_id <p>
 * Student's id (reference to their profile)
 * </p>
 * @return int $result <p>
 * If insert success, $result return 1, else result return 0
 * </p>
 * @author Binghe Yi
 */

function UpdateStudUniv($univ_name, $stud_id)
{
    $conn = createconn();
    $stmt = $conn->prepare('update stud_univ set $univ_name = ?, update_time = ? where stud_id = ?');
    $stmt->bind_param('ssi',  $updateUnivName, $updateUpdateTime, $updateStudId);
    $updateUnivName = $univ_name;
    $updateUpdateTime = date('Y-m-d H:i:s');
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
 * Fetching all University he/she plans to go from a student <br>
 *
 * @param int $stud_id Student id to search.
 * @return mixed All all University he/she plan to go.
 * @author Binghe Yi
 */
function FetchStudUniv($stud_id)
{
    $conn = createconn();
    $stmt = $conn->prepare('select * from stud_univ where stud_id = ?');
    $stmt->bind_param('i', $searchStudId);
    $searchStudId = $stud_id;
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all();
    $stmt->close();
    $conn->close();
    return $result;
}

/**
 * Update the status of a goal university.
 *
 * @param int $univ_id the id in the table.
 * @param int $stud_id student's id.
 * @param int $status the status. 0 - deleted. 1 - active.
 * @return array
 */
function UpdateGoalUnivStatus($univ_id, $stud_id, $status) {
    $conn = createconn();
    $stmt = $conn->prepare("update stud_univ set status = ? where id = ? and stud_id = ?");
    $stmt->bind_param("iii", $stmt_status, $stmt_id, $stmt_stud_id);
    $stmt_status = $status;
    $stmt_id = $univ_id;
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
