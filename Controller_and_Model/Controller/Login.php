<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/UserActions.php";
require_once "../Model/HomeRoomClassActions.php";
require_once "../Model/SubjectClassActions.php";

session_start();
if (!isset($_SESSION['school_num'])) {
    $_SESSION['school_num'] = 0;
}

if ($_POST["password"] != NULL && $_POST["email"] != NULL) {
    $school_num = get_post("email");
    $pw = get_post("password");
    $tot_res = UserAuth($school_num, $pw);
    if ($tot_res[0] && $_SESSION['school_num'] != $school_num) { // When "dashboard" is ready, make sure to jump user to dash board if already login, not to log in again.
        echo "Logged in. <br> Welcome, ";
        $chi_name = $tot_res[2][1];
        $eng_name = $tot_res[2][2];
        $id = $tot_res[2][0];

        $_SESSION["school_num"] = $school_num;
        $_SESSION["id"] = $id;
        $_SESSION["chi_name"] = $chi_name;
        $_SESSION["eng_name"] = $eng_name;
        $_SESSION["email_address"] = $tot_res[2][3];
        $_SESSION["logged_in"] = true;

        if ($tot_res[1] == 0) {
            $_SESSION["user_role"] = 0;
            UpdateLoginTime($id, 0);
            echo "Student $chi_name ($eng_name)";
            $_SESSION["award_id"] = $tot_res[2][4];
            $_SESSION["univ_id"] = $tot_res[2][5];
            $_SESSION["violation_id"] = $tot_res[2][6];
            $_SESSION["status"] = $tot_res[2][15];

            $tot_res = FetchAllStudIdAndHRClasses();
            $all_info = $tot_res[1];
            $stud_id = $_SESSION["id"];
            foreach ($all_info as $class_info) {
//                print_r($class_info);
                $grade = $class_info[0];
                $program = $class_info[1];
                $class_num = $class_info[2];
                $stud_ids = $class_info[3];
                $class_id = $class_info[4];
                $stud_ids = explode(",", $stud_ids);
                foreach ($stud_ids as $db_id) {
                    if ($db_id == $stud_id) {
                        $_SESSION["grade"] = $grade;
                        $_SESSION["program"] = $program;
                        $_SESSION["class_num"] = $class_num;
                        $_SESSION["class_id"] = $class_id;
                        break;
                    }
                }
            }

            $tot_res = FetchAllStudIdAndSubjectClasses();
            $subj_class_ids = array();
            if ($tot_res[0] == $_SESSION["id"]) {
                $term_target = $tot_res[1];
                foreach ($term_target as $exam_target) {
                    $id = $exam_target[0];
                    $subj_teacher_id = $exam_target[1];
                    $subj_id = $exam_target[2];
                    $stud_ids = explode(",", $exam_target[3]);
                    foreach ($stud_ids as $stud_id) {
                        if ($stud_id == 1) { //
                            $subj_class_ids[] = $subj_id;
                            break;
                        }
                    }
                }
                $_SESSION["subj_class_ids"] = $subj_class_ids;
                $_SESSION["subj_class_id_idxs"] = array();
            }


        } else if ($tot_res[1] == 1) {
            $_SESSION["user_role"] = 1;
            UpdateLoginTime($id, 1);
            echo "Teacher $chi_name ($eng_name)";
            $_SESSION["subject_id"] = $tot_res[2][6];
        }
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-main.php");
        ob_end_flush();
        die();
    } else if ($_SESSION["logged_in"]) {
        $chi_name = $_SESSION['chi_name'];
        $eng_name = $_SESSION["eng_name"];
        echo "You have already logged in, <br> Welcome, $chi_name ($eng_name)";
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-main.php");
        ob_end_flush();
        die();
    } else if ($tot_res == 0) {
        echo "Failed to login. Error:  ";
        echo $tot_res[2];
    }
} else {
    echo "please input all the boxes with *";
}
