<?php
session_start();
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
                        Chinese A1
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
                    </div>

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
            <ul class="result-box-row">
                <li class="result-box-sort" value="class">
                    Class
                </li>
                <li class="result-box-name">
                    Chinese A1
                </li>
                <li class="result-box-year">
                    2019 - 2020
                </li>
            </ul>
            <ul class="result-box-row">
                <li class="result-box-sort">
                    Class
                </li>
                <li class="result-box-name">
                    English
                </li>
                <li class="result-box-year">
                    2019 - 2020
                </li>
            </ul>
            <ul class="result-box-row">
                <li class="result-box-sort">
                    Teacher
                </li>
                <li class="result-box-name">
                    Danny
                </li>
                <li class="result-box-year">

                </li>
            </ul>
            <div class="result-box-empty">
                No result found containing 'Spainish'
            </div>
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