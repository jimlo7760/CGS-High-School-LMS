<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/UserActions.php";
session_start();
if ((isset($_POST["passport-name"]) && $_POST["passport-name"] != NULL) &&
    (isset($_POST["chinese-name"]) && $_POST["chinese-name"] != NULL) &&
    (isset($_POST["english-name"]) && $_POST["english-name"] != NULL) &&
    (isset($_POST["gender"]) && $_POST["gender"] != NULL) &&
    (isset($_POST["student-number"]) && $_POST["student-number"] != NULL) &&
    (isset($_POST["nationality"]) && $_POST["nationality"] != NULL) &&
    (isset($_POST["birth"]) && $_POST["birth"] != NULL) &&
    (isset($_POST["phone-number"]) && $_POST["phone-number"] != NULL) &&
    (isset($_POST["mother-name"]) && $_POST["mother-name"] != NULL) &&
    (isset($_POST["mother-phone"]) && $_POST["mother-phone"] != NULL) &&
    (isset($_POST["mother-job-cat"]) && $_POST["mother-job-cat"] != NULL) &&
    (isset($_POST["mother-job-tit"]) && $_POST["mother-job-tit"] != NULL) &&
    (isset($_POST["father-name"]) && $_POST["father-name"] != NULL) &&
    (isset($_POST["father-phone"]) && $_POST["father-phone"] != NULL) &&
    (isset($_POST["father-job-cat"]) && $_POST["father-job-cat"] != NULL) &&
    (isset($_POST["father-job-tit"]) && $_POST["father-job-tit"] != NULL)) {
    $pp_name = get_post("passport-name");
    $c_name = get_post("chinese-name");
    $e_name = get_post("english-name");
    $gender = get_post("gender");
    $stud_num = get_post("student-number");
    $nation = get_post("nationality");
    $birth = get_post("birth");
    $phone = get_post("phone-number");
    $mother_name = get_post("mother-name");
    $mother_phone = get_post("mother-phone");
    $mother_job_cate = get_post("mother-job-cat");
    $mother_job_title = get_post("mother-job-tit");
    $father_name = get_post("father-name");
    $father_phone = get_post("father-phone");
    $father_job_cate = get_post("father-job-cat");
    $father_job_title = get_post("father-job-tit");
    $raw_personal_info = $pp_name . "," . $c_name . "," . $e_name . "," . $gender . "," . $stud_num .
        "," . $nation . "," . $birth . "," . $phone . "," . $mother_name .
        "," . $mother_phone . "," . $mother_job_cate . "," . $mother_job_title .
        "," . $father_name . "," . $father_phone . "," . $father_job_cate .
        "," . $father_job_title;
    $tot_res = UpdateStudPersonalInfo($_SESSION["id"], $raw_personal_info);
    if ($tot_res > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    }
}
?>
