<?php
session_start();
require_once "../../../Controller_and_Model/Model/LoginCredentials.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hi Danny</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/student/student-class/student-class.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/student/student-class/student-class.js">

    </script>
</head>
<body>
<div class="all">
    <div class="left-content">
        <div class="left-box">
            <div class="left-content-title stm">
                MYP Student Management System
            </div>
            <div class="left-content-navi">
                <div class="left-content-navi-item">
                    <div class="left-content-navi-title stb">
                        MANAGE
                    </div>
                    <div class="left-content-navi-content">
                        <i class="material-icons left-content-navi-img">
                            keyboard_arrow_up
                        </i>
                    </div>
                </div>
                <div class="left-content-manu stb">
                    <div class="left-content-manu-nevi">
                        <div class="left-content-manu-year">
                            Overview
                        </div>
                    </div>
                    <div class="left-content-manu-nevi-cur">
                        <div class="left-content-manu-year">
                            Exams & Tests
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-content">
        <div class="right-top">
            <div class="right-top-left">
                <div class="right-top-research">
                    <i class="material-icons right-top-research-img">
                        search
                    </i>
                    <input class="right-top-research-text pointer-alt stm" placeholder="Search by course name"
                           type="text"
                           maxlength="50">
                </div>
            </div>
            <div class="right-top-right">
                <i class="material-icons right-top-noti">
                    notifications
                </i>
                <div class="right-top-noti-cir">

                </div>
                <div class="right-top-person">
                    <div class="right-top-person-name stm">
                        <?php
                        echo $_SESSION["eng_name"];
                        ?>
                    </div>
                    <img src="../../img/图像 1@2x.png" height="45" width="45" class="right-top-person-portrait"/>
                    <i class="material-icons right-top-person-arrow">
                        keyboard_arrow_down
                    </i>
                </div>
            </div>
        </div>
        <div class="right-down">
            <div class="right-info">
                <div class="right-return" onclick="window.location='student-main.php'">
                    <span class="material-icons right-return-img">
                        chevron_left
                    </span>
                    <div class="right-return-text sts">
                        Home
                    </div>
                </div>
                <div class="right-info-left stb">
                    <div class="right-title">
                        <?php
                        require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                        $required_subj_id = get_get("subj_id");
                        $subj_class_ids = $_SESSION["subj_class_ids"];
                        $i = 0;
                        $notInClass = True;
                        while ($i < count($subj_class_ids)) {
                            if ($required_subj_id == $subj_class_ids[$i]) {
                                $notInClass = False;
                                $tot_res = FetchSubjById($required_subj_id);
                                if ($tot_res[0]) {
                                    $tot_res = $tot_res[1][0][1];
                                    echo $tot_res;
                                } else {
                                    echo "unexpected error happened";
                                }
                            }
                            $i ++;
                        }

                        if ($notInClass == True) {
                            echo "You are not in this class";
                        }
                        ?>
                    </div>
                    <div class="right-subtitle">
                        Exam & Tests
                    </div>
                </div>
                <div class="right-info-right">
                    <div class="right-info-box">
                        <div class="right-info-box-title str">
                            Homeroom Teacher
                        </div>
                        <div class="right-info-box-content stb">
                            <?php
                            require_once "../../../Controller_and_Model/Model/HomeRoomClassActions.php";
                            require_once "../../../Controller_and_Model/Model/TeacherInfoActions.php";
                            $tot_res = FetchHRClassById($_SESSION["class_id"]);
                            $all_info = $tot_res[1][0];
                            $hr_teacher_id = $all_info[4];
                            $raw_teacher_info = FetchTeacherInfoById($hr_teacher_id);
                            if ($raw_teacher_info[0]) {
                                $teacher_info = $raw_teacher_info[1][0];
                                $teacher_eng_name = $teacher_info[2];
                                echo $teacher_eng_name;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="right-info-box">
                        <div class="right-info-box-title str">
                            Actions
                        </div>
                        <div class="right-info-box-last">
                            <i class="material-icons right-info-box-img">
                                message
                            </i>
                            <i class="material-icons right-info-box-img">
                                email
                            </i>
                            <i class="material-icons right-info-box-img">
                                local_phone
                            </i>
                        </div>
                    </div>
                    <div class="right-info-button stb">
                        SHARE THIS TABLE
                    </div>
                </div>
            </div>
            <div class="right-table">
                <div class="right-table-title sts">
                    <div class="right-table-title-file">
                        Title
                    </div>
                    <div class="right-table-title-grade">
                        Grade
                    </div>
                    <div class="right-table-title-type">
                        Type
                    </div>
                    <div class="right-table-title-date">
                        Date
                    </div>
                </div>
                <div class="right-table-content stb">
                    <?php
                    require_once "../../../Controller_and_Model/Model/ExamActions.php";
                    require_once "../../../Controller_and_Model/Model/StudScoreActions.php";

                    $raw_all_exam = FetchAllExams();
                    $raw_all_exam = $raw_all_exam[1];
                    $required_exam_id = array();
                    $required_exam_name = array();
                    $required_exam_type = array();
                    $required_exam_date = array();
                    $i = 0;
                    while ($i < count($raw_all_exam)) {
                        $exam_id = $raw_all_exam[$i][0];
                        $raw_subj_ids = $raw_all_exam[$i][3];
                        $subj_ids = explode(",", $raw_subj_ids);
                        $j = 0;
                        while ($j < count($subj_ids)) {
                            if ($subj_ids[$j] == $required_subj_id) {
                                $required_exam_id[] = $exam_id;
                            }
                            $j ++;
                        }
                        $i ++;
                        $_SESSION["required_exam_ids"] = $required_exam_id;
                    }
                    $stud_all_score = FetchStudAllScoresByStudId($_SESSION["id"]);
                    $stud_all_score = $stud_all_score[1];
                    $required_score = array();
                    $i = 0;
                    while ($i < count($required_exam_id)) {
                        $exam_result_info = FetchScoresByStudIdAndExamId($_SESSION["id"], $required_exam_id[$i]);
                        if ($exam_result_info[0]) {
                            $exam_result_info = $exam_result_info[1][0];
                            $subj_id_to_find = $required_subj_id;
                            $tot_res = FetchExamById($required_exam_id[$i]);
                            if ($tot_res[0] == 1) {
                                $tot_res = $tot_res[1][0];
                            }
                            $required_exam_name[] = $tot_res[1];

                            $required_exam_date[] = $tot_res[7];;
                            if ($tot_res[6] == "0") {
                                $required_exam_type[] = "Midterm Exam";
                            } else if ($tot_res[6] == "1") {
                                $required_exam_type[] = "Final Exam";
                            }

                            $subj_ids = explode(",", $tot_res[3]);
                            $subj_idx = 0;
                            foreach ($subj_ids as $subj_id) {
                                if ($subj_id == $subj_id_to_find) {
                                    break;
                                }
                                $subj_idx ++;
                            }

                            $raw_scores = $exam_result_info[3];
                            $scores = explode(",", $raw_scores);
                            $required_score[] = $scores[$subj_idx];

                        }
                        $i ++;
                    }
//                    print_r($required_exam_type);
                    $i = 0;
                    while ($i < count($required_score)) {
                        echo <<< END
                    <div class="right-table-content-row">
                        <div class="right-table-content-title">
                            $required_exam_name[$i]
                        </div>
                        <div class="right-table-content-grade">
                            $required_score[$i] / 8
                        </div>
                        <div class="right-table-content-type">
                            $required_exam_type[$i]
                        </div>
                        <div class="right-table-content-date">
                            $required_exam_date[$i]
                        </div>
                    </div>
END;

                        $i ++;
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="personal-panel">
            <div class="personal-panel-top">
                <img src="../../img/图像 1@2x.png" height="30" width="30" class="personal-panel-portrait"/>
                <div class="personal-panel-des">
                    <div class="personal-panel-name stb">
                        <?php
                        echo $_SESSION["eng_name"];
                        ?>
                    </div>
                    <div class="personal-panel-mail str">
                        <?php
                        echo $_SESSION["email_address"];
                        ?>
                    </div>
                </div>
            </div>
            <div class="personal-panel-bottom">
                <div class="personal-panel-row str" onclick="window.location='student-setting.php'">
                    My Profile
                </div>
                <div class="personal-panel-row str">
                    Add / Drop Class
                </div>
                <div class="personal-panel-row str">
                    Goal Score
                </div>
                <div class="personal-panel-row-last str" onclick="window.location='../login/index.html'">
                    Sign Out
                </div>
            </div>
        </div>
        <div class="grey-bg">

        </div>
        <div class="result-box">
        </div>
        <div class="share-box table-sharing">
            <div class="share-box-title stm">
                Share this table with...
            </div>
            <div class="share-box-content stb">
                <div class="share-box-method method-link" style="color: #1BA2B9;">
                    <i class="material-icons share-box-method-link">
                        link
                    </i>
                    <div class="share-box-method-text">
                        Direct Link
                    </div>
                </div>
                <div class="share-box-method method-file" style="color: #0A7AFA">
                    <i class="material-icons share-box-method-link">
                        description
                    </i>
                    <div class="share-box-method-text">
                        .docx
                    </div>
                </div>
                <div class="share-box-method method-pdf" style="color: #DD3444">
                    <i class="material-icons share-box-method-link">
                        picture_as_pdf
                    </i>
                    <div class="share-box-method-text">
                        .pdf
                    </div>
                </div>
            </div>
            <div class="share-box-bottom stb">
                <div class="share-box-button-download">
                    Download
                </div>
                <div class="share-box-button-cancel">
                    Cancel
                </div>
            </div>
        </div>
    </div>
</div>
</body>