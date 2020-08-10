<?php
require_once 'LoginCredentials.php';
/**
 * For students to submit their information
 * QWQ
 *
 * @param string $Chi_Name, $Eng_Name, $Student_Numb, $Reg_time, $Password <p>
 * Student inputted Chinese name
 * </p>
 * @return int $result <p>
 * If insert success, $result return 1, else result return 0
 * </p>
 * @author Binghe Yi
 */
function Submit_Student_info($Chi_Name, $Eng_Name, $Student_Numb, $Reg_time, $Password){
    $conn = createconn();
        $stmt = $conn->prepare('Insert into stud_info(chi_name,eng_name,reg_time,stud_number,password,create_time) values (?,?,?,?,?,?)');
        $stmt->bind_param("ssssss", $insert_Chi_Name, $insert_Eng_Name, $insert_Reg_time, $insert_Stu_Numb, $insert_Password, $insert_Crea_time );
        $insert_Chi_Name = $Chi_Name;
        $insert_Eng_Name = $Eng_Name;
        $insert_Stu_Numb = $Student_Numb;
        $insert_Reg_time = $Reg_time;
        $insert_Password = $Password;
        $insert_Crea_time = date('Y-m-d');
        $stmt->execute();
        $result = $stmt->affected_rows;
        return $result;
}
