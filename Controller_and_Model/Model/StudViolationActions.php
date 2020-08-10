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
    *  @param string  $time_of_violation <p>
    * time where student did this violation
    * </p>
    * @return int $result <p>
    * If insert success, $result return 1, else result return 0
    * </p>
    * @author Binghe Yi
    */
function InsertNewViolation($level_severity, $title_of_violation, $content_of_violation, $time_of_violation, $stud_id){
    $conn = createconn();
    $stmt = $conn->prepare('Insert into stud_violation(level_severity, title_of_violation, content_of_violation, time_of_violation, create_time, stud_id) values (?,?,?,?,?,?)');
    $stmt->bind_param('issssi', $insertLevelSeversity, $insertTitleOfViolation, $insertContentOfViolation, $insertTimeOfViolation, $insertCreateTime, $insertStudId);
    $insertLevelSeversity = $level_severity;
    $insertTitleOfViolation = $title_of_violation;
    $insertContentOfViolation = $content_of_violation;
    $insertTimeOfViolation = $time_of_violation;
    $insertCreateTime = date('Y-m-d');
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
    *  @param string  $time_of_violation <p>
    * time where student did this violation
    * </p>
    * @return int $result <p>
    * If update success, $result return 1, else result return 0
    * </p>
    * @author Binghe Yi
    */
function UpdateStudVio($level_severity, $title_of_violation, $content_of_violation, $time_of_violation, $stud_id){
    $conn = createconn();
    $stmt = $conn->prepare('update stud_violation set level_severity = ?, title_of_violation = ?, content_of_violation = ?, time_of_violation = ?, update_time = ? where stud_id = ?');
    $stmt->bind_param('issssi', $updateLevelOfSevreity, $updateTitleOfVio, $updateConteOfVio, $updateTimeOfVio, $updateUpdateTime, $updateStudId);
    $updateLevelOfSevreity = $level_severity;
    $updateTitleOfVio = $title_of_violation;
    $updateConteOfVio = $content_of_violation;
    $updateTimeOfVio = $time_of_violation;
    $updateUpdateTime = date('Y-m-d');
    $updateStudId = $stud_id;
    $stmt->execute();
    $result = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    return $result;
}
    /**
    * Fetching All violations he/she did from a student <br>
    *
    * @param int $stud_id Student id to search.
    * @return mixed All violations a student did.
    * @author Binghe Yi
    */
function SearchStudVio($stud_id){
    $conn = createconn();
    $stmt = $conn->prepare('select * from stud_violation where stud_id = ?');
    $stmt->bind_param('i', $searchStudId);
    $searchStudId = $stud_id;
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
}