<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chinese A1 - 001</title>
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
                        Chinese A1
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
                        Chinese A1
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
                <div class="right-box enrolled-student" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
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
                                0108721
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Email
                            </div>
                            <div class="right-box-detail-name stm">
                                dannyxu@163.com
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-box enrolled-student" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Steve Jobs
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
                                0108722
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Email
                            </div>
                            <div class="right-box-detail-name stm">
                                stevejobs@gmail.com
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-box enrolled-student" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Elon Musk
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
                                0108723
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Email
                            </div>
                            <div class="right-box-detail-name stm">
                                elonmusk@163.com
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-box enrolled-student" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
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
                                0108724
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Email
                            </div>
                            <div class="right-box-detail-name stm">
                                dannyxu@163.com
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-box enrolled-student" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
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
                                0108725
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Email
                            </div>
                            <div class="right-box-detail-name stm">
                                dannyxu@163.com
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-box enrolled-student" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
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
                                0108726
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Email
                            </div>
                            <div class="right-box-detail-name stm">
                                dannyxu@163.com
                            </div>
                        </div>
                    </div>
                </div>
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
                        <div class="right-table-content-row">
                            <input type="hidden" class="current-test-id" value="123123" name="test_id">
                            <input type="hidden" class="current-test-comment" value="great" name="test_comment">
                            <input type="hidden" class="current-test-des" value="hard test" name="test_des">
                            <input type="hidden" class="current-test-max-score" value="7" name="test_max_score">
                            <div class="right-table-content-title">
                                Vendor support ending for Collaborate CV
                            </div>
                            <div class="right-table-content-type">
                                Mid-term Examination
                            </div>
                            <div class="right-table-content-date">
                                2020-04-29
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
                                Danny Xu
                            </div>
                            <div class="right-subtitle">
                                许丹阳
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
                    <div class="right-navi-item-right">
                        Profile
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
                    <span class="material-icons right-return-img">
                        chevron_left
                    </span>
                        <div class="right-return-text sts">
                            Chinese A1 Exam & Tests
                        </div>
                    </div>
                    <div class="right-info-left stb">
                        <div class="right-title">
                            Unit 5 Exam
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
                                Mid-term Examination
                            </div>
                        </div>
                        <div class="test-detail-mid-box-small">
                            <div class="test-detail-mid-box-small-title stb">
                                Due Date
                            </div>
                            <div class="test-detail-mid-box-small-des str">
                                2019-02-26
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
                                BACABC
                            </div>
                        </div>
                        <div class="test-detail-mid-box-big">
                            <div class="test-detail-mid-box-big-title stb">
                                Comments
                            </div>
                            <div class="test-detail-mid-box-big-des str">
                                QWEQWE
                            </div>
                        </div>
                    </div>
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
                        <div class="right-table-content-row">
                            <div class="right-table-content-title">
                                Danny
                            </div>
                            <div class="right-table-content-grade">
                                6
                            </div>
                            <div class="right-table-content-type">
                                Exam
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
                        </div>
                        <div class="right-table-content-row">
                            <div class="right-table-content-title">
                                Danny
                            </div>
                            <div class="right-table-content-grade">
                                6
                            </div>
                            <div class="right-table-content-type">
                                Exam
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
                        </div>
                        <div class="right-table-content-row">
                            <div class="right-table-content-title">
                                Danny
                            </div>
                            <div class="right-table-content-grade">
                                6
                            </div>
                            <div class="right-table-content-type">
                                Exam
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
                <div class="personal-panel-row-last str" onclick="window.location='../login/index.php'">
                    Sign Out
                </div>
            </div>
        </div>

        <div class="grey-bg">

        </div>
        <div class="result-box">

        </div>
        <div class="share-box subjectT-addScore-box" value="">
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
                        <input id="test-stud-id" hidden="true" value="">
                        <div class="edit-box-innerbox-title">
                            Choose an Exam / Test
                        </div>
                        <select name="add-score-name" class="edit-box-innerbox-select subjectT-addCourse-box-select">
                            <option>2020 First semester mid-term examination</option>
                            <option>2020 Second semester mid-term examination</option>
                            <option>2021 First semester final examination</option>
                            <option>2021 Second semester first monthly examination</option>
                        </select>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Comment
                        </div>
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box str" name="add-score-comment"
                                  placeholder="Write your comment here..."></textarea>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Score
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="add-score-val"
                               placeholder="">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Attachment
                        </div>
                        <div class="edit-box-click-row">
                            <button class="edit-box-innerbox-input click-button str" type="file">
                                Click here to upload an attachment
                            </button>
                            <span class="material-icons click-icon">
                                add
                            </span>
                            <input type="file" name="add-score-attachment" capture="camera" class="click-hidden-input str"
                                   placeholder="Click to upload an attachment">
                            <!--  input标签调用调用上传方法                      -->
                        </div>
                    </div>
                    <input class="edit-box-green stb" type="submit" value="Save">
                </div>
            </form>
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
                    Edit New Exam / Test
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