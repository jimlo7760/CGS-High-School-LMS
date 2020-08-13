<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/UserActions.php";
session_start();
if ($_POST["password"] != NULL && $_POST["email"] != NULL) {
    $school_num = get_post("email");
    $pw = get_post("password");
    $tot_res = UserAuth($school_num, $pw);
    if ($tot_res[0] && $_SESSION['school_num'] != $school_num) {
        echo "Logged in. <br> Welcome, ";
        $chi_name = $tot_res[2][1];
        $eng_name = $tot_res[2][2];
        $id = $tot_res[2][0];
        $_SESSION["school_num"] = $school_num;
        $_SESSION["chi_name"] = $chi_name;
        $_SESSION["eng_name"] = $eng_name;
        $_SESSION["id"] = $id;
        if ($tot_res[1] == 0) {
            $_SESSION["user_role"] = 0;
            UpdateLoginTime($id, 0);
            echo "Student $chi_name ($eng_name)";
        } else if ($tot_res[1] == 1) {
            $_SESSION["user_role"] = 1;
            UpdateLoginTime($id, 1);
            echo "Teacher $chi_name ($eng_name)";
        }
    } else if ($tot_res[0] && $_SESSION['school_num'] == $school_num) {
        $chi_name = $_SESSION['chi_name'];
        $eng_name = $_SESSION["eng_name"];
        echo "You have already logged in, <br> Welcome, $chi_name ($eng_name)";
    } else if ($tot_res == 0) {
        echo "Failed to login. Error:  ";
        echo $tot_res[2];
    }
} else {
    echo "please input all the boxes with *";
}
