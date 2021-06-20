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
                        <img src="../../img/ic_keyboard_arrow_up_24px.png" class="left-content-navi-img initial_transform" height="8"
                             width="12"/>
                    </div>
                </div>
                <div class="left-content-manu stb">
                    <div class="left-content-manu-nevi" name="first-2020">
                        <div class="left-content-manu-year">
                            2019 - 2020
                        </div>
                        <div class="left-content-manu-current">
                            CURRENT
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="second-2019">
                        <div class="left-content-manu-year">
                            2018 - 2019
                        </div>
                        <div class="left-content-manu-current no-select">
                            CURRENT
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="first-2019">
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
                        <img src="../../img/ic_keyboard_arrow_up_24px.png" class="left-content-navi-img initial_transform" height="8"
                             width="12"/>
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
        <input type="text" value="Chinese_A1" class="subjectT-lesson" contenteditable="false" style="opacity: 0">
        <!--
            class: subjectT-lesson需要输出老师教授科目的名字，前端已做好对subjectT-lesson的value进行课程权限的判断；
            如果教授科目的名字中存在空格，需要在输出前把空格用"_"（下划线）进行替换
        -->
    </div>

    <div class="right-content">
        <div class="right-top">
            <div class="right-top-left">
                <div class="right-top-research">
                    <img class="right-top-research-img" src="../../img/ic_search_24px.png" height="19" width="19"/>
                    <input class="right-top-research-text pointer-alt stm" placeholder="Search by course name"
                           type="text"
                           maxlength="50">
                </div>
            </div>
            <div class="right-top-right">
                <img src="../../img/ic_notifications_24px@2x.png" class="right-top-noti" height="20" width="16"/>
                <div class="right-top-noti-cir">

                </div>
                <div class="right-top-person">
                    <div class="right-top-person-name stm">
                        Danny Xu
                    </div>
                    <img src="../../img/图像 1@2x.png" height="45" width="45" class="right-top-person-portrait"/>
                    <img src="../../img/ic_keyboard_arrow_down_24px@2x.png" height="8" width="12"
                         class="right-top-person-arrow initial_transform"/>
                </div>
            </div>
        </div>
        <div class="right-down student-crew-list">
            <div class="right-info student-info">
                <div class="right-return" onclick="window.location='subjectTeacher-main.html'">
                    <img src="../../img/bx-chevron-left@2x.png" height="12" width="8" class="right-return-img"/>
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
                    <img src="../../img/ic_add_24px.png" height="14" width="14" class="right-info-right-button-img">
                    <div class="right-info-right-button-text">
                        ADD
                    </div>
                </div>
            </div>
            <div class="right-student-list">
                <div class="right-box enrolled-student" name="$_SESSION['course_id']">
                    <!--                    需要添加ajax：当enrolled-student被点击时，后台需要给当前subjectT-student-class界面初始化   -->
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <img src="../../img/bx-chevron-right@2x.png" height="12" width="8"
                             class="right-box-arrow"/>
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
                <div class="right-box" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <img src="../../img/bx-chevron-right@2x.png" height="12" width="8"
                             class="right-box-arrow"/>
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
                <div class="right-box" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <img src="../../img/bx-chevron-right@2x.png" height="12" width="8"
                             class="right-box-arrow"/>
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
                <div class="right-box" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <img src="../../img/bx-chevron-right@2x.png" height="12" width="8"
                             class="right-box-arrow"/>
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
                <div class="right-box" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <img src="../../img/bx-chevron-right@2x.png" height="12" width="8"
                             class="right-box-arrow"/>
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
                <div class="right-box" name="$_SESSION['course_id']">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <img src="../../img/bx-chevron-right@2x.png" height="12" width="8"
                             class="right-box-arrow"/>
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
            </div>

            <div class="subjectT-test">
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
                                <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                     width="18px">
                                <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                     width="14">
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
                                <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                     width="18px">
                                <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                     width="14">
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
                                <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                     width="18px">
                                <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                     width="14">
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
                                <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                     width="18px">
                                <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                     width="14">
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
                                <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                     width="18px">
                                <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                     width="14">
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
                                <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                     width="18px">
                                <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                     width="14">
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
                                <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                     width="18px">
                                <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                     width="14">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subjectT-student-class">
            <div class="right-down ">
                <div class="right-info test-info">
                    <div class="right-return return-from-student">
                        <img src="../../img/bx-chevron-left@2x.png" height="12" width="8" class="right-return-img"/>
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
                            <img src="../../img/ic_add_24px.png" class="right-down-info-button-img" height="11" width="11">
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
                                    <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                         width="18px">
                                    <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                         width="14">
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
                                    <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                         width="18px">
                                    <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                         width="14">
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
                                    <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                         width="18px">
                                    <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                         width="14">
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
                                    <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                         width="18px">
                                    <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                         width="14">
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
                                    <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                         width="18px">
                                    <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                         width="14">
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
                                    <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                         width="18px">
                                    <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                         width="14">
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
                                    <img src="../../img/ic_edit_24px@2x.png" class="right-table-content-action-edit"
                                         width="18px">
                                    <img src="../../img/ic_delete_forever_24px@2x.png" class="right-table-content-delete"
                                         width="14">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subjectT-studentScore" id="TOK">
                    <div class="subjectT-studentScore-add-outer">
                        <div class="subjectT-studentScore-add">
                            <img src="../../img/ic_add_24px.png" class="right-down-info-button-img" height="11" width="11">
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
        <div class="share-box subjectT-addTest-box" value="">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Add New Exam / Test
                </div>
                <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
            </div>
            <form method="post">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Choose an Exam / Test
                        </div>

                        <select name="add-test-name" class="edit-box-innerbox-select subjectT-addCourse-box-select">
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
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box" name="add-test-common"
                                  placeholder="Write your comment here..."></textarea>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Score
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="add-test-score"
                               placeholder="">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Attachment
                        </div>
                        <div class="edit-box-click-row">
                            <button class="edit-box-innerbox-input click-button" type="file">
                                Click here to upload an attachment
                            </button>
                            <img src="../../img/ic_add_24px@2x.png" height="14" width="14" class="click-icon"/>
                            <input type="file" name="test-attachment" capture="camera" class="click-hidden-input"
                                   placeholder="Click to upload an attachment">
                            <!--  input标签调用调用上传方法                      -->
                        </div>
                    </div>
                    <input class="edit-box-green stb" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>