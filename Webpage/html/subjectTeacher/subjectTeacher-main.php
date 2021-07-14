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
    <link rel="stylesheet" type="text/css"
          href="../../CSS/panel/subjectTeacher/subjectTeacher-main/subjectTeacher-main.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/subjectTeacher/subjectTeacher-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/subjectTeacher/subjectTeacher-main/subjectTeacher-main.js">

    </script>
</head>
<body>
<div class="all">
    <?php //get the button clicked from subjectTeacher-classList.php
    $id = "";
    if (isset($_POST['navi_id'])) {
        $id = $_POST['navi_id'];
    }
    echo "<input hidden='true' id='navi-id' value='";
    echo $id;
    echo "'>";
    ?>
<!--    <input hidden="true" id="enroll_semester" value="20201,20191,20192">-->
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
                        MANAGE
                    </div>
                    <div class="left-content-navi-content">
                        <span class="material-icons left-content-navi-img initial_transform">
                            keyboard_arrow_up
                        </span>

                    </div>
                </div>
                <div class="left-content-manu navi-manage-student stb">
                    <div class="left-content-manu-nevi" name="student-list" id="student-nevi">
                        <div class="left-content-manu-year">
                            All Students
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
                <span class="material-icons right-top-noti">
                    notifications
                </span>
                <div class="right-top-noti-cir">

                </div>
                <div class="right-top-person">
                    <div class="right-top-person-name stm">
                        Danny Xu
                    </div>

                    <img src="../../img/图像 1@2x.png" height="45" width="45" class="right-top-person-portrait"/>
                    <!--                    头像上传-->
                    <span class="material-icons right-top-person-arrow initial_transform">
                        keyboard_arrow_down
                    </span>
                </div>
            </div>
        </div>
        <div class="right-down subjectT-courseList" id="20201">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title">
                        Your Courses
                    </div>
                    <div class="right-subtitle">
                        2019 - 2020 First Semester
                    </div>
                </div>
                <div class="right-down-info-button">
                    <span class="material-icons right-down-info-button-img">
                        add
                    </span>
                    <div class="right-down-info-button-text stb">
                        ADD COURSE
                    </div>
                </div>
            </div>

            <div class="subjectT-right-down-main">
                <div class="subjectT-right-down-row">
                    <div class="right-box thinner-box" onclick="window.location='subjectTeacher-classList.php'">
                        <div class="right-box-title stb">
                            Chinese A1-001
                            <?php
                            print_r($_SESSION["subj_class_ids"]);
                            ?>
                        </div>
                        <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-down subjectT-courseList" id="20192">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title">
                        Your Courses
                    </div>
                    <div class="right-subtitle">
                        2018 - 2019 Second Semester
                    </div>
                </div>
                <div class="right-down-info-button">
                    <span class="material-icons right-down-info-button-img">
                        add
                    </span>
                    <div class="right-down-info-button-text stb">
                        ADD COURSE
                    </div>
                </div>

            </div>
            <div class="subjectT-right-down-main">
                <div class="subjectT-right-down-row">
                    <div class="right-box thinner-box">
                        <div class="right-box-subjectTeacher">
                            <div class="right-box-title stb">
                                Chinese A1-001
                            </div>
                            <span class="material-icons thinner-box-img">
                                chevron_right
                            </span>
                        </div>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-down subjectT-courseList" id="20191">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title">
                        Your Courses
                    </div>
                    <div class="right-subtitle">
                        2018 - 2019 First Semester
                    </div>
                </div>
                <div class="right-down-info-button">
                    <span class="material-icons right-down-info-button-img">
                        add
                    </span>
                    <div class="right-down-info-button-text stb">
                        ADD COURSE
                    </div>
                </div>

            </div>
            <div class="subjectT-right-down-main">
                <div class="subjectT-right-down-row">
                    <div class="right-box thinner-box">
                        <div class="right-box-subjectTeacher">
                            <div class="right-box-title stb">
                                Chinese A1-001
                            </div>
                            <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                        </div>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                    <div class="right-box thinner-box">
                        <div class="right-box-title stb">
                            Chinese A1-001
                        </div>
                        <span class="material-icons thinner-box-img">
                                chevron_right
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-down subjectT-studentList" id="student-list">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title">
                        All Students
                    </div>
                </div>
            </div>
            <div class="studentList-right-down-main">
                <div class="studentList-right-down-row">
                    <div class="right-box">
                        <div class="right-box-upper">
                            <div class="right-box-title stb">
                                Danny Xu
                            </div>
                            <i class="material-icons right-box-arrow">
                                chevron_right
                            </i>
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
                    <div class="right-box">
                        <div class="right-box-upper">
                            <div class="right-box-title stb">
                                Danny Xu
                            </div>
                            <i class="material-icons right-box-arrow">
                                chevron_right
                            </i>
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
                    <div class="right-box">
                        <div class="right-box-upper">
                            <div class="right-box-title stb">
                                Danny Xu
                            </div>
                            <i class="material-icons right-box-arrow">
                                chevron_right
                            </i>
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
                    <div class="right-box">
                        <div class="right-box-upper">
                            <div class="right-box-title stb">
                                Danny Xu
                            </div>
                            <i class="material-icons right-box-arrow">
                                chevron_right
                            </i>
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
                <div class="personal-panel-row-last str" onclick="window.location='../login/index.php'">
                    Sign Out
                </div>
            </div>
        </div>
        <div class="grey-bg">

        </div>
        <div class="result-box">
            <ul class="result-box-row">
                <li class="result-box-sort" value="class">
                    Student
                </li>
                <li class="result-box-name">
                    Danny Xu
                </li>
                <li class="result-box-year">
                    0108706
                </li>
            </ul>
            <div class="result-box-empty">
                No result found containing 'Spainish'
            </div>
        </div>

        <div class="share-box subjectT-addCourse-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Add New Course
                </div>
                <span class="material-icons edit-box-close">
                    close
                </span>
            </div>
            <form method="post">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Course Name
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="add-course-name"
                               placeholder="English A2 - 001">
                    </div>
                    <input class="edit-box-green stb" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>