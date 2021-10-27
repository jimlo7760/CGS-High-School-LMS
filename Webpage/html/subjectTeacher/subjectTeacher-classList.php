<!DOCTYPE html>
<?php
if (!session_id()) {
    session_start();
}

if($_POST['subj_class_id']){
    $subj_class_id = $_POST['subj_class_id'];
    $_SESSION['subj_class_id'] = $subj_class_id;

}else{
    $subj_class_id = $_SESSION['subj_class_id'];
}

require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
$tot_res = FetchSubjClassBySubjClassId($subj_class_id);
$subj_class_grade = $tot_res[1][0][5];
if(!$_SESSION['subj_class_grade']){
    $_SESSION['subj_class_grade'] = $subj_class_grade;
}
$subj_class_subj_id = $tot_res[1][0][2];
$subj_class_name = $tot_res[1][0][7];
if(!$_SESSION['subj_class_name']){
    $_SESSION['subj_class_name'] = $subj_class_name;
}
$subj_class_stud_ids = $tot_res[1][0][3];

require_once '../../../Controller_and_Model/Model/SubjectActions.php';
$tot_res = FetchSubjById($subj_class_subj_id);
$subj_class_subj = $tot_res[1][0][1];

$subj_class_combine = 'G' . $subj_class_grade . ' - ' . $subj_class_subj . ' ' . $subj_class_name;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        echo $subj_class_combine;
        ?>
    </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/subjectTeacher/subjectTeacher-common.css">
    <link rel="stylesheet" type="text/css"
          href="../../CSS/panel/subjectTeacher/subjectTeacher-classList/subjectTeacher-classList.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/subjectTeacher/subjectTeacher-common.js">

    </script>
    <script type="text/javascript"
            src="../../js/panel/subjectTeacher/subjectTeacher-classList/subjectTeacher-classList.js">

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
                        SCHOOL YEAR
                    </div>
                    <div class="left-content-navi-content">
                        <span class="material-icons left-content-navi-img initial_transform">
                            keyboard_arrow_up
                        </span>
                    </div>
                </div>
                <div class="left-content-manu stb">
                    <div class="left-content-manu-nevi" name="20201">
                        <div class="left-content-manu-year">
                            2019 - 2020
                        </div>
                        <div class="left-content-manu-current">
                            CURRENT
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="20192">
                        <div class="left-content-manu-year">
                            2018 - 2019
                        </div>
                        <div class="left-content-manu-current no-select">
                            CURRENT
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="20191">
                        <div class="left-content-manu-year">
                            2018 - 2019
                        </div>
                        <div class="left-content-manu-current no-select">
                            CURRENT
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-box-add">
            <div class="left-content-navi">
                <div class="left-content-navi-item">
                    <div class="left-content-navi-title stb">
                        <?php
                        echo $subj_class_combine;
                        ?>
                    </div>
                    <div class="left-content-navi-content">
                        <span class="material-icons left-content-navi-img initial_transform">
                            keyboard_arrow_up
                        </span>
                    </div>
                </div>
                <div class="left-content-manu navi-manage-student stb">
                    <div class="left-content-manu-nevi" name="student" id="student-nevi">
                        <div class="left-content-manu-year">
                            Students
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="exam" id="exam-nevi">
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
                    <span class="material-icons right-top-research-img">
                        search
                    </span>
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
                        Danny Xu
                    </div>
                    <img src="../../img/图像 1@2x.png" height="45" width="45" class="right-top-person-portrait"/>
                    <i class="material-icons right-top-person-arrow initial_transform">
                        keyboard_arrow_down
                    </i>
                </div>
            </div>
        </div>
        <div class="right-down student-crew-list">
            <div class="right-info student-info">
                <div class="right-return" onclick="window.location='subjectTeacher-main.php'">
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
                        echo $subj_class_combine;
                        ?>
                    </div>
                    <div class="right-subtitle">
                        Students
                    </div>
                </div>
                <div class="right-info-right-button">
                    <span class="material-icons right-info-right-button-img">
                        add
                    </span>
                    <div class="right-info-right-button-text stb">
                        ADD
                    </div>
                </div>
            </div>
            <div class="right-student-list">
                <?php
                require_once '../../../Controller_and_Model/Model/UserActions.php';

                $raw_stud_ids = explode(',', $subj_class_stud_ids);
                foreach ($raw_stud_ids as $subj_class_stud_id){
                    $tot_res = FetchStudInfoByStudId($subj_class_stud_id);
                    $stud_id = $tot_res[1][0][0];

                    $stud_chi_name = $tot_res[1][0][1];
                    $stud_eng_name = $tot_res[1][0][2];
                    $stud_chi_eng_combine = $stud_chi_name . ' ' . $stud_eng_name;
                    $stud_email = $tot_res[1][0][3];
                    $stud_num = $tot_res[1][0][8];

                    echo <<< END
<div class="right-box enrolled-student" name="$subj_class_id">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            $stud_chi_eng_combine
                        </div>
                        <span class="material-icons right-box-arrow">
                            chevron_right
                        </span>
                    </div>
                    <div class="right-box-downer">
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                ID
                            </div>
                            <div class="right-box-detail-name stm">
                                $stud_num
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Email
                            </div>
                            <div class="right-box-detail-name stm">
                                $stud_email
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="enrolled-student-class" value="$subj_class_name">
                    <input type="hidden" class="enrolled-student-depart" value="MYP">
                    <input type="hidden" class="enrolled-student-grade" value="$subj_class_grade">
                    <input type="hidden" class="enrolled-student-id"value="$stud_id">
                </div>
END;

                }
                ?>
            </div>

            <div class="subjectT-test">
                <div class="right-table">
                    <div class="right-table-title sts">
                        <div class="right-table-title-title">
                            Title
                        </div>
                        <div class="right-table-title-type">
                            Type
                        </div>
                        <div class="right-table-title-date">
                            Date
                        </div>
                        <div class="right-table-title-action">
                            Action
                        </div>
                    </div>
                    <div class="right-table-content stb">
                            <?php

                            require_once '../../../Controller_and_Model/Model/ExamActions.php';
                            require_once '../../../Controller_and_Model/Model/StudScoreActions.php';
                            require_once '../../../Controller_and_Model/Model/SubjectClassActions.php';
                            require_once '../../../Controller_and_Model/Model/UserActions.php';

                            $tot_res = FetchExamByClassId($subj_class_id);
                            if($tot_res[0]){
                                foreach ($tot_res[1] as $exam_info){
                                    $exam_id = $exam_info[0];
                                    $exam_title = $exam_info[1];
                                    $exam_date = $exam_info[3];
                                    $exam_class_id = $exam_info[4];
                                    $exam_comment = $exam_info[10];
                                    $exam_des = $exam_info[8];
                                    $exam_type = $exam_info[5];
                                    $exam_max_score = $exam_info[9];
                                    $included_stud = "";
                                    $exam_class_raw = FetchSubjClassBySubjClassId($exam_class_id);
                                    if($exam_class_raw[0]){
                                        $exam_stud_ids = $exam_class_raw[1][0][3];
                                        $exam_stud_ids = explode(',', $exam_stud_ids);
                                        foreach ($exam_stud_ids as $exam_stud_id){
                                            $included_stud_raw = FetchStudInfoByStudId($exam_stud_id);
                                            if($included_stud_raw[0]){
                                                foreach ($included_stud_raw[1] as $included_stud_fetch){
                                                    $included_stud_id = $included_stud_fetch[0];
                                                    $included_stud_name = $included_stud_fetch[1] . $included_stud_fetch[2];
                                                    $raw_stud_score = FetchScoresByStudIdAndExamId($included_stud_id, $exam_id);
                                                    if($raw_stud_score[0]){
                                                        $stud_exam_score = $raw_stud_score[1][0][3];
                                                        $included_stud .= $included_stud_id . '-' . $included_stud_name . '-' . $stud_exam_score . ' ';
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    echo <<< END
                        <div class="right-table-content-row">
                            <input type="hidden" class="current-test-student" value="$included_stud">
                            <input type="hidden" class="current-test-id" value="exam_id" name="exam_id">
                            <input type="hidden" class="current-test-comment" value="$exam_comment" name="exam_comment">
                            <input type="hidden" class="current-test-des" value="$exam_des" name="exam_des">
                            <input type="hidden" class="current-test-max-score" value="$exam_max_score" name="exam_max_score">
                            <div class="right-table-content-title">
                                $exam_title
                            </div>
                            <div class="right-table-content-type">
END;
                                if($exam_type == 0){
                                    echo 'Monthly Examination';
                                }else if($exam_type == 1){
                                    echo "Mid-term Examination";
                                }else if($exam_type == 2){
                                    echo "Final Examination";
                                }
                                echo <<< END
                            </div>
                            <div class="right-table-content-date">
                                $exam_date
                            </div>
                            <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                            </div>
                        </div>
END;
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="subjectT-student-class">
            <div class="right-down">
                <div class="right-info test-info">
                    <div class="right-return return-from-student">
                    <span class="material-icons right-return-img">
                        chevron_left
                    </span>
                        <div class="right-return-text sts">
                            Students
                        </div>
                    </div>
                    <div class="right-info-row">
                        <img src="../../img/图像%201@2x.png" height="70" width="70" class="right-info-portrait">
                        <div class="right-info-left stb">
                            <div class="right-title">

                            </div>
                            <div class="right-subtitle">

                            </div>
                        </div>
                        <div class="right-info-right">
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    ID
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    0108703
                                </div>
                            </div>
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    Department
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    MYP
                                </div>
                            </div>
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    Grade
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    7
                                </div>
                            </div>
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    Class
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    18
                                </div>
                            </div>
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    Email
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    dannyxu@163.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-nevi str">
                    <div class="right-navi-item navi-current">
                        Chinese A1
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        English A1
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        French A1
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        Information Technology B2
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        Biology A1
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        Physics HL A1
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        TOK
                    </div>
                    <div class="right-navi-gap-large">
                        &nbsp;
                    </div>

                </div>
                <div class="subjectT-studentScore" id="Chinese_A1">
                    <div class="subjectT-studentScore-add-outer">
                        <div class="subjectT-studentScore-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

                            <div class="right-down-info-button-text stb">
                                ADD
                            </div>
                        </div>
                    </div>
                    <div class="right-table">
                        <div class="right-table-title sts">
                            <div class="right-table-title-title">
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
                            <div class="right-table-title-action">
                                Action
                            </div>
                        </div>
                        <div class="right-table-content stb">
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Unit 5 Exam
                                </div>
                                <div class="right-table-content-grade">
                                    6 / 7
                                </div>
                                <div class="right-table-content-type">
                                    Mid-term Examination
                                </div>
                                <div class="right-table-content-date">
                                    2019-09-22
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
<!--                                <input type="hidden" class="current-test-student" value="1-Danny-6 2-Ken-7">-->
                                <input type="hidden" class="current-test-des" value="awful">
                                <input type="hidden" class="current-test-comment" value="this is a wonderful test">
                                <input type="hidden" class="current-test-id" value="123123">
                                <input type="hidden" class="current-test-max-score" value="7">
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subjectT-studentScore" id="TOK">
<!--                    editing: adding action field-->
                    <div class="subjectT-studentScore-add-outer">
                        <div class="subjectT-studentScore-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>
                            <div class="right-down-info-button-text stb">
                                ADD
                            </div>
                        </div>
                    </div>
                    <div class="right-table">
                        <div class="right-table-title sts">
                            <div class="right-table-title-title">
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
                            <div class="right-table-title-action">
                                Action
                            </div>
                        </div>
                        <div class="right-table-content stb">
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Unit 5 Exam
                                </div>
                                <div class="right-table-content-grade">
                                    6 / 7
                                </div>
                                <div class="right-table-content-type">
                                    Mid-term Examination
                                </div>
                                <div class="right-table-content-date">
                                    2019-09-22
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
<!--                                <input type="hidden" class="test-box-student" value="1-Danny-6 2-Ken-7">-->
                                <input type="hidden" class="test-box-des" value="awful">
                                <input type="hidden" class="test-box-comment" value="this is a wonderful test">
                                <input type="hidden" class="current-test-id" value="123123">
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    Vendor support ending for Collaborate CV
                                </div>
                                <div class="right-table-content-grade">
                                    80 / 100
                                </div>
                                <div class="right-table-content-type">
                                    Exam
                                </div>
                                <div class="right-table-content-date">
                                    Apr 29, 2020 11:00 AM
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subjectT-test-detail">
            <div class="right-down">
                <div class="right-info test-detail">
                    <div class="right-return return-from-test-detail">
                        <input type="hidden" class="test-detail-access-from" value="">
                    <span class="material-icons right-return-img">
                        chevron_left
                    </span>
                        <div class="right-return-text sts">
                            Chinese A1 Exam & Tests
                        </div>
                    </div>
                    <div class="right-info-left stb">
                        <div class="right-title">

                        </div>
                    </div>
                    <div class="right-person-edit right-person-add edit-test-detail stm">
                                    <span class="material-icons right-person-edit-img">
                                        create
                                    </span>
                        <div class="right-person-edit-text">
                            Edit Exam / Tests
                        </div>
                    </div>
                </div>
                <div class="test-detail-mid">
                    <div class="test-detail-mid-left">
                        <div class="test-detail-mid-box-small">
                            <div class="test-detail-mid-box-small-title stb">
                                Type
                            </div>
                            <div class="test-detail-mid-box-small-des str">

                            </div>
                        </div>
                        <div class="test-detail-mid-box-small">
                            <div class="test-detail-mid-box-small-title stb">
                                Due Date
                            </div>
                            <div class="test-detail-mid-box-small-des str">

                            </div>
                        </div>
                        <div class="test-detail-mid-box-small">
                            <div class="test-detail-mid-box-small-title stb">
                                Score Out Of
                            </div>
                            <div class="test-detail-mid-box-small-des str" style="color: #DD3444">
                                7
                            </div>
                        </div>
                    </div>
                    <div class="test-detail-mid-right">
                        <div class="test-detail-mid-box-big">
                            <div class="test-detail-mid-box-big-title stb">
                                Description
                            </div>
                            <div class="test-detail-mid-box-big-des str">

                            </div>
                        </div>
                        <div class="test-detail-mid-box-big">
                            <div class="test-detail-mid-box-big-title stb">
                                Comments
                            </div>
                            <div class="test-detail-mid-box-big-des str">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="current-test-id">
                </div>
                <div class="right-table">
                    <div class="right-table-title sts">
                        <div class="right-table-title-title">
                            Student
                        </div>
                        <div class="right-table-title-grade">
                            Score
                        </div>
                        <div class="right-table-title-type">
                            Date
                        </div>
                        <div class="right-table-title-date">
                            Action
                        </div>
                    </div>
                    <div class="right-table-content stb">

                    </div>
                </div>
            </div>
        </div>

        <div class="personal-panel">
            <div class="personal-panel-top">
                <img src="../../img/图像 1@2x.png" height="30" width="30" class="personal-panel-portrait"/>
                <div class="personal-panel-des">
                    <div class="personal-panel-name stb">
                        Danny Xu
                    </div>
                    <div class="personal-panel-mail str">
                        dannyxu@163.com
                    </div>
                </div>
            </div>
            <div class="personal-panel-bottom">
                <div class="personal-panel-row str">
                    My Profile
                </div>
                <div class="personal-panel-row-last str" onclick="window.location='../../../Controller_and_Model/Controller/Logout.php'">
                    Sign Out
                </div>
            </div>
        </div>

        <div class="grey-bg">

        </div>
        <div class="result-box">

        </div>
        <div class="share-box subjectT-addTest-box" value="">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Add New Exam / Test
                </div>
                <span class="material-icons edit-box-close">
                    close
                </span>
            </div>
            <form method="post">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Title
                        </div>
                        <input class="edit-box-innerbox-input str" name="add-test-title">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Descriptions
                        </div>
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box str" name="add-test-description"
                                  placeholder="Write your description here..."></textarea>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Type
                        </div>
                        <select name="add-test-type" class="edit-box-innerbox-select subjectT-addCourse-box-select">
                            <option>Monthly Examination</option>
                            <option>Mid-term Examination</option>
                            <option>Final Examination</option>
                        </select>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Score Out Of
                        </div>
                        <input class="edit-box-innerbox-input str" name="add-test-ceiling">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Due Date
                        </div>
                        <input class="edit-box-innerbox-input str" name="add-test-date" type="date">
                    </div>
                    <input class="edit-box-green stb" type="submit" value="Save">
                </div>
            </form>
        </div>

        <div class="share-box subjectT-editTest-box" value="">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Edit Exam / Test
                </div>
                <span class="material-icons edit-box-close">
                    close
                </span>
            </div>
            <form method="post">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Title
                        </div>
                        <input class="edit-box-innerbox-input str" name="add-test-title">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Descriptions
                        </div>
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box str" name="add-test-description"
                                  placeholder="Write your description here..."></textarea>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Type
                        </div>
                        <select name="add-test-type" class="edit-box-innerbox-select subjectT-addCourse-box-select">
                            <option>Monthly Examination</option>
                            <option>Mid-term Examination</option>
                            <option>Final Examination</option>
                        </select>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Score Out Of
                        </div>
                        <input class="edit-box-innerbox-input str" name="add-test-ceiling">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Due Date
                        </div>
                        <input class="edit-box-innerbox-input str" name="add-test-date" type="date">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            After Exam / Test Comment
                        </div>
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box str" name="add-test-description"
                                  placeholder="Write your comment here..."></textarea>
                    </div>
                    <input class="edit-box-green stb" type="submit" value="Save">
                </div>
            </form>
        </div>

    </div>
</div>

</body>
</html>