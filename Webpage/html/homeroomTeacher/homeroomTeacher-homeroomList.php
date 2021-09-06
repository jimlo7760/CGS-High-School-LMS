

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MYP 9-1</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/homeroomTeacher/homeroomTeacher-common.css">
    <link rel="stylesheet" type="text/css"
          href="../../CSS/panel/homeroomTeacher/homeroomTeacher-homeroomList/homeroomTeacher-homeroomList.css">

    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>

    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/homeroomTeacher/homeroomTeacher-common.js">

    </script>
    <script type="text/javascript"
            src="../../js/panel/homeroomTeacher/homeroomTeacher-homeroomList/homeroomTeacher-homeroomList.js">

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
                        MYP 9-1
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
                <div class="right-return" onclick="window.location='homeroomTeacher-main.html'">
                    <span class="material-icons right-return-img">
                        chevron_left
                    </span>
                    <div class="right-return-text sts">
                        Home
                    </div>
                </div>
                <div class="right-info-left stb">
                    <div class="right-title">
                        MYP 9-1
                    </div>
                    <div class="right-subtitle">
                        Students
                    </div>
                </div>
            </div>
            <div class="right-student-list">
                <div class="right-box enrolled-student">
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
                    <input type="hidden" class="class-student-id" value="1">
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
                                elonmask@163.com
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

        </div>
        <div class="homeroomT-homeroomStudent-class">
            <input id="target-student-id" hidden="true" value="">
            <!--            store the id of clicked student-->
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

                <div class="homeroomT-studentScore" id="Chinese_A1">
                    <div class="homeroomT-studentScore-add-outer">
                        <div class="homeroomT-studentScore-add">
                            <img src="../../img/ic_add_24px.png" class="right-down-info-button-img" height="11"
                                 width="11">
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
                                         width="14">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="homeroomT-studentScore" id="English_A1">
                    <div class="homeroomT-studentScore-add-outer">
                        <div class="homeroomT-studentScore-add">
                            <img src="../../img/ic_add_24px.png" class="right-down-info-button-img" height="11"
                                 width="11">
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
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
                                    <img src="../../img/ic_delete_forever_24px@2x.png"
                                         class="right-table-content-delete"
                                         width="14">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="homeroomT-studentProfile">
                    <div class="right-person-info-row">
                        <div class="right-person-info-row-upper">
                            <div class="right-person-info-row-title stb">
                                Strength & Hobby
                            </div>
                            <div class="right-person-edit right-person-delete delete-strength stm">
                                    <span class="material-icons right-person-edit-img">
                                        delete_forever
                                    </span>
                                <div class="right-person-edit-text">
                                    Delete Strength & Hobby
                                </div>
                            </div>
                            <div class="right-person-edit right-person-add right-person-edit-interval add-strength stm">
                                    <span class="material-icons right-person-edit-img">
                                        add_circle
                                    </span>
                                <div class="right-person-edit-text">
                                    Add Strength & Hobby
                                </div>
                            </div>
                        </div>
                        <div class="right-person-info-row-downer">
                            <?php
                            require_once "../../../Controller_and_Model/Model/UserActions.php";
                            $tot_res = FetchStudInfoByStudId($_SESSION["id"]);
                            $raw_strength = $tot_res[1][0][16];
                            $strengths = explode(",", $raw_strength);
                            $count = 0;
                            foreach ($strengths as $strength) {
                                $strength_details = explode("-", $strength);
                                echo <<< END
                                        <div class="right-person-info-row-box">
                                            <div class="right-person-info-row-box-title stm">
                                                $strength_details[0]
                                            </div>
                                            <div class="right-person-info-row-box-right">
                                                <div class="right-person-info-row-box-text">
                                                    <div class="right-person-info-row-box-subtitle str">
                                                        Year Started
                                                    </div>
                                                    <div class="right-person-info-row-box-des stm">
                                                        $strength_details[1]
                                                    </div>
                                                </div>
                                                <i class="material-icons right-person-info-row-box-img">
                                                    chevron_right
                                                </i>
                                            </div>
                                            <input type="hidden" class="strength-box-id" value="$count">
                                            <input type="hidden" class="strength-box-des" value="$strength_details[2]">
                                        </div>
END;
                                $count = $count + 1;
                            }
                            ?>

                        </div>
                    </div>

                    <div class="right-person-info-row">
                        <div class="right-person-info-row-upper">
                            <div class="right-person-info-row-title stb">
                                Awards & Prizes
                            </div>
                            <div class="right-person-edit right-person-delete delete-award stm">
                                    <span class="material-icons right-person-edit-img">
                                        delete_forever
                                    </span>
                                <div class="right-person-edit-text">
                                    Delete Awards & Prizes
                                </div>
                            </div>
                            <div class="right-person-edit right-person-add right-person-edit-interval add-award stm">
                                    <span class="material-icons right-person-edit-img">
                                        add_circle
                                    </span>
                                <div class="right-person-edit-text">
                                    Add Awards & Prizes
                                </div>
                            </div>
                        </div>
                        <div class="right-person-info-row-downer profile-row-downer">
                            <?php
                            require_once "../../../Controller_and_Model/Model/StudAwardActions.php";

                            $tot_res = FetchStudAllAwardsByStudId($_SESSION["id"]);
                            $raw_award_info = $tot_res[1];
                            $award_length = count($tot_res[1]);
                            foreach ($raw_award_info as $award_info) {
                                $award_id = $award_info[0];
                                $award_name = $award_info[2];
                                $award_time = $award_info[3];
                                if ($award_info[6] == 1) {
                                    echo <<< END
                                            <div class="right-person-info-row-box">
                                                <div class="right-person-info-row-box-title stm">
                                                    $award_name
                                                </div>
                                                <div class="right-person-info-row-box-right">
                                                    <div class="right-person-info-row-box-text">
                                                        <div class="right-person-info-row-box-subtitle str">
                                                            Date Recived
                                                        </div>
                                                        <div class="right-person-info-row-box-des stm">
                                                            $award_time
                                                        </div>
                                                    </div>
                                                    <i class="material-icons right-person-info-row-box-img">
                                                        chevron_right
                                                    </i>
                                                </div>
                                                <input type="hidden" class="award-box-id" value="$award_id">
                                            </div>
END;
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="right-person-info-row">
                        <div class="right-person-info-row-upper">
                            <div class="right-person-info-row-title stb">
                                Goal University
                            </div>
                            <div class="right-person-edit delete-university right-person-delete"
                                 style="margin-right: 7px">
                                    <span class="material-icons right-person-edit-img">
                                        delete_forever
                                    </span>
                                <div class="right-person-edit-text stm">
                                    Delete Goal University
                                </div>
                            </div>
                            <div class="right-person-edit right-person-add add-university right-person-edit-interval">
                                    <span class="material-icons right-person-edit-img">
                                        add_circle
                                    </span>
                                <div class="right-person-edit-text stm">
                                    Add Goal University
                                </div>
                            </div>
                        </div>
                        <div class="right-person-info-row-downer">
                            <?php
                            require_once "../../../Controller_and_Model/Model/StudUnivActions.php";

                            $tot_res = FetchStudUniv($_SESSION["id"]);
                            foreach ($tot_res as $univ_info) {
                                $univ_id = $univ_info[0];
                                $univ_name = $univ_info[2];
                                $univ_major = $univ_info[3];
                                if ($univ_info[6] == 1) {
                                    echo <<< END
                                        <div class="right-person-info-row-box">
                                            <div class="right-person-info-row-box-title stm">
                                                $univ_name
                                            </div>
                                            <div class="right-person-info-row-box-right">
                                                <div class="right-person-info-row-box-text">
                                                    <div class="right-person-info-row-box-subtitle str">
                                                        Major
                                                    </div>
                                                    <div class="right-person-info-row-box-des stm">
                                                        $univ_major
                                                    </div>
                                                </div>
                                                <i class="material-icons right-person-info-row-box-img">
                                                    chevron_right
                                                </i>
                                            </div>
                                            <input type="hidden" class="univ-box-id" value="$univ_id">
                                        </div>
END;
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="right-person-info-row">
                        <div class="right-person-info-row-upper">
                            <div class="right-person-info-row-title stb">
                                Expected Curriculum in DP
                            </div>
                            <div class="right-person-edit delete-dp-course right-person-delete"
                                 style="margin-right: 7px">
                                    <span class="material-icons right-person-edit-img">
                                        delete_forever
                                    </span>
                                <div class="right-person-edit-text stm">
                                    Delete DP Course
                                </div>
                            </div>
                            <div class="right-person-edit right-person-add add-dp-course right-person-edit-interval">
                                    <span class="material-icons right-person-edit-img">
                                        add_circle
                                    </span>
                                <div class="right-person-edit-text stm">
                                    Add DP Course
                                </div>
                            </div>
                        </div>
                        <div class="right-person-info-row-downer profile-row-downer">
                            <?php
                            require_once "../../../Controller_and_Model/Model/ExpectedCurrActions.php";
                            $expected_currs = FetchStudExpectedCurrByStudId($_SESSION["id"])[1];
                            foreach ($expected_currs as $expected_curr) {
                                $course_id = $expected_curr[0];
                                $course_name = $expected_curr[2];
                                $raw_course_level = $expected_curr[3];
                                $course_level = "SL";
                                $status = $expected_curr[6];
                                if (!strcmp($raw_course_level, "1")) {
                                    $course_level = "HL";
                                }

                                if ($status == 1) {
                                    echo <<< END
                                            <div class="right-person-info-row-box">
                                                <div class="right-person-info-row-box-title stm">
                                                    $course_name
                                                </div>
                                                <div class="right-person-info-row-box-right">
                                                    <div class="right-person-info-row-box-text">
                                                        <div class="right-person-info-row-box-subtitle str">
                                                            Course Level
                                                        </div>
                                                        <div class="right-person-info-row-box-des stm">
                                                            $course_level
                                                        </div>
                                                    </div>
                                                    <i class="material-icons right-person-info-row-box-img">
                                                        chevron_right
                                                    </i>
                                                </div>
                                                <input type="hidden" class="dp-box-id" value="$course_id">
                                            </div>
END;
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <div class="right-person-info-row">
                        <div class="right-person-info-row-upper">
                            <div class="right-person-info-row-title stb">
                                Linguistic Test
                            </div>
                            <div class="right-person-edit delete-langauge right-person-delete"
                                 style="margin-right: 7px">
                                    <span class="material-icons right-person-edit-img">
                                        delete_forever
                                    </span>
                                <div class="right-person-edit-text stm">
                                    Delete Linguistic Score
                                </div>
                            </div>
                            <div class="right-person-edit right-person-add add-language right-person-edit-interval">
                                    <span class="material-icons right-person-edit-img">
                                        add_circle
                                    </span>
                                <div class="right-person-edit-text stm">
                                    Add Linguistic Score
                                </div>
                            </div>
                        </div>
                        <div class="right-person-info-row-downer">
                            <?php
                            require_once "../../../Controller_and_Model/Model/LingScoreActions.php";
                            $results = FetchStudLingScoreByStudId($_SESSION["id"])[1];
                            foreach ($results as $ling_score) {
                                $test_id = $ling_score[0];
                                $test_name = $ling_score[2];
                                if (strcmp($test_name, "DUOLINGUAL")) {
                                    $raw_score = $ling_score[3];
                                    $scores = explode(",", $raw_score);
                                    $listening = $scores[0];
                                    $reading = $scores[1];
                                    $writing = $scores[2];
                                    $speaking = $scores[3];
                                }

                                $overall = $ling_score[4];
                                $reflection = $ling_score[5];
                                $test_date = $ling_score[6];
                                $status = $ling_score[9];

                                if ($status == 1) {
                                    echo <<< END
                                            <div class="right-person-info-row-box">
                                                <div class="right-person-info-row-box-title stm">
                                                    $overall
                                                </div>
                                                <div class="right-person-info-row-box-right">
                                                    <div class="right-person-info-row-box-text">
                                                        <div class="right-person-info-row-box-subtitle str">
                                                            Test Date
                                                        </div>
                                                        <div class="right-person-info-row-box-des stm">
                                                            $test_date
                                                        </div>
                                                    </div>
                                                    <i class="material-icons right-person-info-row-box-img">
                                                        chevron_right
                                                    </i>
                                                </div>
                                                <input type="hidden" class="language-type" value="$test_name">
                                                <input type="hidden" class="language-listening" value="$listening">
                                                <input type="hidden" class="language-reading" value="$reading">
                                                <input type="hidden" class="language-speaking" value="$speaking">
                                                <input type="hidden" class="language-writing" value="$writing">
                                                <input type="hidden" class="language-reflect" value="$reflection">
                                                <input type="hidden" class="language-box-id" value="$test_id">
                                            </div>
END;
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <div class="right-person-info-row">
                        <div class="right-person-info-row-upper">
                            <div class="right-person-info-row-title stb" style="color: #DD3444;!important;">
                                Detentions
                            </div>
                            <div class="right-person-edit detention-apply right-person-delete"
                                 style="margin-right: 7px">
                                    <span class="material-icons right-person-edit-img">
                                        create
                                    </span>
                                <div class="right-person-edit-text stm">
                                    Apply Detention Removal
                                </div>
                            </div>
                        </div>
                        <div class="right-person-info-row-downer">
                            <?php
                            require_once "../../../Controller_and_Model/Model/StudViolationActions.php";

                            $tot_res = FetchStudViolationsByStudId($_SESSION["id"]);
                            foreach ($tot_res as $violation_info) {
                                $violation_name = $violation_info[3];
                                $violation_time = $violation_info[5];
                                echo <<< END
                                <div class="right-person-info-row-box">
                                    <div class="right-person-info-row-box-title stm">
                                        $violation_name
                                    </div>
                                    <div class="right-person-info-row-box-right">
                                        <div class="right-person-info-row-box-text">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Date Recived
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $violation_time
                                            </div>
                                        </div>
                                        <i class="material-icons right-person-info-row-box-img">
                                            chevron_right
                                        </i>
                                    </div>
                                </div>
END;
                            }
                            ?>
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

    <div class="share-box homeroomT-addScore-box" value="">
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
                    <textarea type="text" class="edit-box-innerbox-input edit-comment-box" name="add-score-comment"
                              placeholder="Write your comment here..."></textarea>
                </div>
                <div class="edit-box-innerbox str">
                    <div class="edit-box-innerbox-title">
                        Score
                    </div>
                    <input type="text" class="edit-box-innerbox-input" name="add-score-val"
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
                        <input type="file" name="add-score-attachment" capture="camera" class="click-hidden-input"
                               placeholder="Click to upload an attachment">
                        <!--  input标签调用调用上传方法                      -->
                    </div>
                </div>
                <input class="edit-box-green stb" type="submit" value="Save">
            </div>
        </form>
    </div>


    <div class="share-box strength-box-add">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Strength & Hobby
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/SubmitNewStrength.php">
            <div class="edit-box-downer">
                <div class="strength-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            Strength & Hobby
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="strength-title"
                               placeholder="Add a new strength or hobby...">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Year Started
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="strength-start-year"
                               placeholder="When start...">
                    </div>
                </div>
                <div class="edit-box-innerbox str">
                    <div class="edit-box-innerbox-title">
                        Strength & Hobby Description
                    </div>
                    <textarea type="text" class="edit-box-innerbox-input edit-comment-box str"
                              name="strength-comment"
                              placeholder="Write your description here..."></textarea>
                </div>
                <input type="submit" class="edit-box-green stb" value="Add">
            </div>
        </form>
    </div>
    <div class="share-box strength-box-delete">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Delete Strength & Hobby
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/DeleteStrength.php">
            <div class="edit-box-downer">
                <!--                    require_once is required-->
                <div class="class-adding-subtitle str">
                    Select Strength & Hobby
                </div>
                <?php
                require_once "../../../Controller_and_Model/Model/UserActions.php";
                $tot_res = FetchStudInfoByStudId($_SESSION["id"]);
                $raw_strength = $tot_res[1][0][16];
                $strengths = explode(",", $raw_strength);
                $count = 0;
                foreach ($strengths as $strength) {
                    $strength_details = explode("-", $strength);
                    echo <<< END
                            <div class="class-deleting-row share-box-fully-select">
                                <input type="checkbox" class="class-adding-checkbox class-adding-img" name="strength-select"
                                       value=$count style="">
                                <div class="class-adding-text str">
                                    $strength_details[0]
                                </div>
                            </div>
END;
                    $count = $count + 1;
                }
                ?>
                <input type="submit" value="Delete" class="edit-box-red stb">
            </div>
        </form>
    </div>
    <div class="share-box strength-box-edit">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Edit Strength & Hobby
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/ModifyStrength.php">
            <div class="edit-box-downer">
                <div class="strength-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            Strength & Hobby
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="strength-title"
                               placeholder="Add a new strength or hobby...">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Year Started
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="strength-start-year"
                               placeholder="When start...">
                    </div>
                </div>
                <div class="edit-box-innerbox str">
                    <div class="edit-box-innerbox-title">
                        Strength & Hobby Description
                    </div>
                    <textarea type="text" class="edit-box-innerbox-input edit-comment-box str"
                              name="strength-comment"
                              placeholder="Write your description here..."></textarea>
                </div>
                <input type="hidden" class="student-id" value="<?php echo $_SESSION['id'] ?>" name="stud_id">
                <input type="hidden" class="strength-id" value="" name="strength_id">
                <input type="submit" class="edit-box-green stb" value="Save">
            </div>
        </form>
    </div>

    <div class="share-box award-box-delete">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Delete Awards & Prizes
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/DeleteAward.php">
            <div class="edit-box-downer">
                <div class="class-adding-subtitle str">
                    Select Awards & Prizes
                </div>
                <?php
                require_once "../../../Controller_and_Model/Model/StudAwardActions.php";
                $tot_res = FetchStudAllAwardsByStudId($_SESSION["id"]);
                $awards = $tot_res[1];
                foreach ($awards as $award) {
                    if ($award[6] == 1)
                        echo <<< END
                            <div class="class-deleting-row share-box-fully-select">
                                <input type="checkbox" class="class-adding-checkbox class-adding-img" name="award-delete"
                                       value=$award[0] style="">
                                <div class="class-adding-text str">
                                    $award[2]
                                </div>
                            </div>
END;
                }

                ?>
                <input type="submit" value="Delete" class="edit-box-red stb">
            </div>
        </form>
    </div>
    <div class="share-box award-box-add">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Awards & Prizes
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form action="../../../Controller_and_Model/Controller/SubmitNewAward.php" method="post">
            <div class="edit-box-downer">
                <div class="award-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            Award or Prize Title
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="award-title"
                               placeholder="Add a new award or prize…">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Date Received
                        </div>
                        <input type="date" class="edit-box-innerbox-input str" name="award-year">
                    </div>
                </div>
                <input type="submit" class="edit-box-green stb" value="Add Awards & Prizes">
            </div>
        </form>
    </div>
    <div class="share-box award-box-edit">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Edit Awards & Prizes
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form action="../../../Controller_and_Model/Controller/ModifyAward.php" method="post">
            <div class="edit-box-downer">
                <div class="award-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            Award or Prize Title
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="award-title"
                               placeholder="Add a new award or prize…">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Date Received
                        </div>
                        <input type="date" class="edit-box-innerbox-input str" name="award-year">
                    </div>
                </div>
                <input type="hidden" value="" name="award-id" class="award-id">
                <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="stud_id">
                <input type="submit" class="edit-box-green stb" value="Save Awards & Prizes">
            </div>
        </form>
    </div>

    <div class="share-box university-box-add">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Goal University
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/SubmitNewGoalUniversities.php">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            University
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="university-name"
                               placeholder="Input your goal university here...">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Major
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="university-major">
                    </div>
                </div>
                <input class="edit-box-green stb" type="submit" value="Add">
            </div>
        </form>
    </div>
    <div class="share-box university-box-delete">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Delete Goal University
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/DeleteGoalUniversities.php">
            <div class="edit-box-downer">
                <div class="class-adding-subtitle str">
                    Select Goal University
                </div>
                <?php
                require_once "../../../Controller_and_Model/Model/StudUnivActions.php";
                $raw_stud_univ = FetchStudUniv($_SESSION["id"]);
                foreach ($raw_stud_univ as $univ) {
                    $univ_name = $univ[2];
                    $univ_id = $univ[0];
                    $status = $univ[6];
                    if ($status == 1) {
                        echo <<< END
                                <div class="class-deleting-row share-box-fully-select">
                                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="goal-univ"
                                           value=$univ_id style="">
                                    <div class="class-adding-text str">
                                        $univ_name
                                    </div>
                                </div>
END;
                    }

                }
                ?>
                <input type="submit" value="Delete" class="edit-box-red stb">
            </div>
        </form>
    </div>
    <div class="share-box university-box-edit">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Edit Goal University
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/ModifyGoalUniversities.php">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            University
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="university-name"
                               placeholder="Input your goal university here...">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Major
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="university-major">
                    </div>
                </div>
                <input type="hidden" class="univ-id" value="" name="univ-id">
                <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="stud_id">
                <input class="edit-box-green stb" type="submit" value="Save">
            </div>
        </form>
    </div>

    <div class="share-box dp-box-add">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add DP Course
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/SubmitNewExpectedCurr.php">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox award-box-big str" style="width: 290px">
                        <div class="edit-box-innerbox-title">
                            Course Title
                        </div>
                        <select type="text" class="edit-box-innerbox-select str" name="dp-course-title">
                            <option>Chinese</option>
                            <option>English</option>
                            <option>Mathematics: Analysis and Approach</option>
                            <option>Mathematics: Application and Interpretation</option>
                            <option>Economics</option>
                            <option>Business</option>
                            <option>Psychology</option>
                            <option>Computer Science</option>
                            <option>Physics</option>
                            <option>Chemistry</option>
                            <option>Biology</option>
                            <option>History</option>
                        </select>
                    </div>
                    <div class="edit-box-innerbox award-box-small str" style="width: 120px">
                        <div class="edit-box-innerbox-title">
                            Course Level
                        </div>
                        <select type="text" class="edit-box-innerbox-select str" name="dp-course-level">
                            <option>HL</option>
                            <option>SL</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="edit-box-green stb" value="Add">
            </div>
        </form>
    </div>
    <div class="share-box dp-box-delete">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Delete DP Course
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/DeleteExpectedCurr.php">
            <div class="edit-box-downer">
                <div class="class-adding-subtitle str">
                    Select DP Course
                </div>
                <?php
                require_once "../../../Controller_and_Model/Model/ExpectedCurrActions.php";
                $expected_currs = FetchStudExpectedCurrByStudId($_SESSION["id"])[1];
                foreach ($expected_currs as $expected_curr) {
                    $course_id = $expected_curr[0];
                    $course_name = $expected_curr[2];
                    $status = $expected_curr[6];
                    if ($status == 1) {
                        echo <<< END
                            <div class="class-deleting-row share-box-fully-select">
                                <input type="checkbox" class="class-adding-checkbox class-adding-img" name="dp-course-select"
                                       value=$course_id style="">
                                <div class="class-adding-text str">
                                    $course_name
                                </div>
                                <input type="hidden" class="expected-box-id" value="">
                            </div>
END;
                    }
                }
                ?>
                <input type="submit" value="Delete" class="edit-box-red stb">
            </div>
        </form>
    </div>
    <div class="share-box dp-box-edit">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Edit DP Course
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/ModifyExpectedCurr.php">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox award-box-big str" style="width: 290px">
                        <div class="edit-box-innerbox-title">
                            Course Title
                        </div>
                        <select type="text" class="edit-box-innerbox-select str" name="dp-course-title">
                            <option>Chinese</option>
                            <option>English</option>
                            <option>Mathematics: Analysis and Approach</option>
                            <option>Mathematics: Application and Interpretation</option>
                            <option>Economics</option>
                            <option>Business</option>
                            <option>Psychology</option>
                            <option>Computer Science</option>
                            <option>Physics</option>
                            <option>Chemistry</option>
                            <option>Biology</option>
                            <option>History</option>
                        </select>
                    </div>
                    <div class="edit-box-innerbox award-box-small str" style="width: 120px">
                        <div class="edit-box-innerbox-title">
                            Course Level
                        </div>
                        <select type="text" class="edit-box-innerbox-select str" name="dp-course-level">
                            <option>HL</option>
                            <option>SL</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" value="" name="course-id" class="dp-id">
                <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="stud_id">
                <input type="submit" class="edit-box-green stb" value="Save">
            </div>
        </form>
    </div>

    <div class="share-box language-box-add">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Linguistic Test Score
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/SubmitNewLingScore.php">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox language-box-half str">
                        <div class="edit-box-innerbox-title">
                            Test Type
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-type">
                            <option>IELTS</option>
                            <option>TOEFL</option>
                            <option>DUOLINGUAL</option>
                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-half str">
                        <div class="edit-box-innerbox-title">
                            Overall Score
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-overall">

                        </select>
                    </div>
                </div>
                <div class="edit-box-row">
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Listening Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-listening">

                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Reading Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-reading">

                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Writing Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-writing">

                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Speaking Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-speaking">

                        </select>
                    </div>
                </div>
                <div class="edit-box-innerbox str">
                    <div class="edit-box-innerbox-title">
                        Test Reflection
                    </div>
                    <textarea type="text" class="edit-box-innerbox-input edit-comment-box str"
                              name="language-test-comment"
                              placeholder="Write your description here..."></textarea>
                </div>
                <div class='edit-box-innerbox str'>
                    <div class="edit-box-innerbox-title">
                        Test Date
                    </div>
                    <input type="date" class="edit-box-innerbox-input" name="language-test-date">
                </div>
                <input type="submit" class="edit-box-green stb" value="Add">
            </div>
        </form>
    </div>
    <div class="share-box language-box-delete">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Delete Linguistic Test Score
            </div>
            <span class="material-icons edit-box-close">
                            close
                        </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/DeleteLingScore.php">
            <div class="edit-box-downer">
                <div class="class-adding-subtitle str">
                    Select Linguistic Score
                </div>
                <?php
                require_once "../../../Controller_and_Model/Model/LingScoreActions.php";
                $results = FetchStudLingScoreByStudId($_SESSION["id"])[1];
                foreach ($results as $ling_score) {
                    $test_id = $ling_score[0];
                    $test_name = $ling_score[2];
                    $status = $ling_score[9];
                    if ($status == 1) {
                        echo <<< END
                                <div class="class-deleting-row share-box-fully-select">
                                    <input type="checkbox" class="class-adding-checkbox class-adding-img"
                                           name="linguistic-score-select"
                                           value=$test_id style="">
                                    <div class="class-adding-text str">
                                        $test_name
                                    </div>
                                </div>
END;
                    }
                }
                ?>
                <input type="submit" value="Delete" class="edit-box-red stb">
            </div>
        </form>
    </div>
    <div class="share-box language-box-edit">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Edit Linguistic Test Score
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/ModifyLingScore.php">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox language-box-half str">
                        <div class="edit-box-innerbox-title">
                            Test Type
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-type">
                            <option>IELTS</option>
                            <option>TOEFL</option>
                            <option>DUOLINGUAL</option>
                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-half str">
                        <div class="edit-box-innerbox-title">
                            Overall Score
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-overall">

                        </select>
                    </div>
                </div>
                <div class="edit-box-row">
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Listening Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-listening">

                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Reading Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-reading">

                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Writing Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-writing">

                        </select>
                    </div>
                    <div class="edit-box-innerbox language-box-quater">
                        <div class="edit-box-innerbox-title">
                            Speaking Test
                        </div>
                        <select class="edit-box-innerbox-select str" name="language-test-speaking">

                        </select>
                    </div>
                </div>
                <div class="edit-box-innerbox str">
                    <div class="edit-box-innerbox-title">
                        Test Reflection
                    </div>
                    <textarea type="text" class="edit-box-innerbox-input edit-comment-box str"
                              name="language-test-comment"
                              placeholder="Write your description here..."></textarea>
                </div>
                <div class='edit-box-innerbox str'>
                    <div class="edit-box-innerbox-title">
                        Test Date
                    </div>
                    <input type="date" class="edit-box-innerbox-input" name="language-test-date">
                </div>
                <input type="hidden" class="language-id" name="language-id" value="">
                <input type="submit" class="edit-box-green stb" value="Save">
            </div>
        </form>
    </div>

</div>

</body>
</html>