<?php
require_once 'LoginCredentials.php';
/**
 * For students to submit their information
 *
 *
 * @param string $Chi_Name <p>
 * Student inputted Chinese name
 * </p>
 * @param string $Eng_Name <p>
 * Student inputted English name
 * </p>
 * @param string $Student_Numb <p>
 * Student inputted Student number
 * </p>
 * @param string $Reg_time <p>
 * Student inputted Register time ( time of entering the school )
 * </p>
 * @param string $Password <p>
 * Student inputted Password
 * </p>
 * @param string $Password_Confirm <p>
 * Student inputted value, in order to make sure the student remember the password he/she entered
 * </p>
 * @return int $result <p>
 * If insert success, $result return 1, else result return 0
 * </p>
 * @author Binghe Yi
 */
function Submit_Student_info($Chi_Name, $Eng_Name, $Student_Numb, $Reg_time, $Password, $Password_Confirm){
    $conn = createconn();
    if($Password==$Password_Confirm) {
        $stmt = $conn->prepare('Insert into stud_info(chi_name,eng_name,reg_time,stud_number,password,create_time) values(?,?,?,?,?,?)');
        $stmt->bind_param("ssssss", $Insert_Chi_Name, $Insert_Eng_Name, $Insert_Reg_time, $Insert_Stu_Numb, $Insert_Password, $Insert_Crea_time );
        $Insert_Chi_Name = $Chi_Name;
        $Insert_Eng_Name = $Eng_Name;
        $Insert_Stu_Numb = $Student_Numb;
        $Insert_Reg_time = $Reg_time;
        $Insert_Password = $Password;
        $Insert_Crea_time = date('Y-m-d');
        $stmt->execute();
        $result = $stmt->affected_rows;
        return $result;
    }else{
        echo 'Passwords are not the same!';
    }
}
