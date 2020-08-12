<?php
require_once 'LoginCredentials.php';
    /**
    * For student to insert the university he/she wants to go
    * QWQ
    *
    * @param string $univ_country <p>
    * Student's chosen university's location (country)
    * </p>
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
    function InsertNewUniv($univ_country, $univ_name, $stud_id){
        $conn = createconn();
        $stmt = $conn->prepare('Insert into stud_univ(univ_country, univ_name, create_time, stud_id) values (?,?,?,?,?)');
        $stmt->bind_param('sssi', $insertUnivCountry, $insertUnivName, $insertCreateTime, $insertStudId);
        $insertUnivCountry = $univ_country;
        $insertUnivName = $univ_name;
        $insertCreateTime = date('Y-m-d H:i:s');
        $insertStudId = $stud_id;
        $stmt->execute();
        $result = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        return $result;
    }
    /**
    * For student to update the university he/she wants to go
    *
    *
    * @param string $univ_country <p>
    * Student's chosen university's location (country)
    * </p>
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

    function UpdateStudUniv($univ_country, $univ_name, $stud_id){
        $conn = createconn();
        $stmt = $conn->prepare('update stud_univ set univ_country = ?, $univ_name = ?, update_time = ? where stud_id = ?');
        $stmt->bind_param('sss', $updateUnivCountry, $updateUnivName, $updateUpdateTime, $updateStudId);
        $updateUnivCountry = $univ_country;
        $updateUnivName = $univ_name;
        $updateUpdateTime = date('Y-m-d H:i:s');
        $updateStudId = $stud_id;
        $stmt->execute();
        $result = $stmt->affected_rows;
        if($result>0){
            $stmt->close();
            $conn->close();
            return $result;
        }else{
            $error = $stmt->error;
            $stmt->close();
            $conn->close();
            return $error;
        }
    }


    /**
    * Fetching all University he/she plan to go from a student <br>
    *
    * @param int $stud_id Student id to search.
    * @return mixed All all University he/she plan to go.
    * @author Binghe Yi
    */
    function SearchStudUniv($stud_id){
        $conn = createconn();
        $stmt = $conn->prepare('select * from stud_univ where stud_id = ?');
        $stmt->bind_param('i', $searchStudId);
        $searchStudId = $stud_id;
        $result = $stmt->get_result();
        $stmt->close();
        $conn->close();
        return $result;
    }
