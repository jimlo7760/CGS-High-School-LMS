<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/coordinator/coordinator-manageStudent.css">

    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>

    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/coordinator/coordinator-manageStudent.js">

    </script>
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
                        MANAGE
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
                            All Students
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="student" id="teacher-nevi">
                        <div class="left-content-manu-year">
                            All Teachers
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="student" id="course-nevi">
                        <div class="left-content-manu-year">
                            All Courses
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
                    <span class="material-icons right-top-person-arrow initial_transform">
                        keyboard_arrow_down
                    </span>
                </div>
            </div>
        </div>
        <div class="right-down coordinator-student-operation" id="20201">
            <div class="coordinator-roomList-top">
                <div class="right-info student-info" >
                    <div class="right-return" onclick="window.location='coordinator-main.html'">
                        <span class="material-icons right-return-img">
                            chevron_left
                        </span>
                        <div class="right-return-text sts">
                            Home
                        </div>
                    </div>
                    <div class="right-info-left stb">
                        <div class="right-title">
                            MYP G1-1
                        </div>
                        <div class="right-subtitle">
                            Students
                        </div>
                    </div>
                    <div class="right-info-right">
                        <div class="right-down-info-button" style="background-color: #DD3444">
                            <span class="material-icons right-down-info-button-img">
                                delete_forever
                            </span>
                            <div class="right-down-info-button-text stb">
                                REMOVE STUDENT
                            </div>
                        </div>
                        <div class="right-down-info-button" style="margin-right: 30px;">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>
                            <div class="right-down-info-button-text stb">
                                ADD STUDENT
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-student-list">
                <div class="right-box enrolled-student" name="$_SESSION['course_id']"
                     style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <span class="material-icons right-box-arrow" style="color: rgb(27, 162, 185);">
                            chevron_right
                        </span>
                    </div>
                    <div class="right-box-downer">
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str" style="color: rgb(153, 156, 158);">
                                ID
                            </div>
                            <div class="right-box-detail-name stm" style="color: rgb(0, 0, 0);">
                                0108721
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str" style="color: rgb(153, 156, 158);">
                                Email
                            </div>
                            <div class="right-box-detail-name stm" style="color: rgb(0, 0, 0);">
                                dannyxu@163.com
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="enrolled-student-class" value="10">
                    <input type="hidden" class="enrolled-student-depart" value="IG">
                    <input type="hidden" class="enrolled-student-grade" value="11">
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
                <div class="right-box enrolled-student" name="$_SESSION['course_id']"
                     style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            Danny Xu
                        </div>
                        <span class="material-icons right-box-arrow" style="color: rgb(27, 162, 185);">
                            chevron_right
                        </span>
                    </div>
                    <div class="right-box-downer">
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str" style="color: rgb(153, 156, 158);">
                                ID
                            </div>
                            <div class="right-box-detail-name stm" style="color: rgb(0, 0, 0);">
                                0108724
                            </div>
                        </div>
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str" style="color: rgb(153, 156, 158);">
                                Email
                            </div>
                            <div class="right-box-detail-name stm" style="color: rgb(0, 0, 0);">
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

    <div class="share-box add-student-box">
        <div class="edit-box-top">
            <div class="edit-box-title stm">

            </div>
            <span class="material-icons edit-box-close">
                            close
            </span>
        </div>
        <div class="edit-box-upper">
            <div class="edit-box-row">
                <div class="edit-box-innerbox str">
                    <div class="edit-box-innerbox-title">
                        Search Students by name or ID
                    </div>
                    <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                           name="student_search"
                           placeholder="">
                </div>
            </div>
        </div>
        <form method="post">
            <div class="edit-box-downer">
                <div class="fully-select-subtitle str">
                    Select Student
                </div>
                <div class="student-adding-row share-box-fully-select">
                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="student-select"
                           value=$count style="">
                    <div class="class-adding-text str">
                        stud_1
                    </div>
                </div>
                <div class="student-adding-row share-box-fully-select">
                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="student-select"
                           value=$count style="">
                    <div class="class-adding-text str">
                        stud_2
                    </div>
                </div>
                <input class="edit-box-green stb" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="share-box delete-student-box">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Remove Student From MYP G1-1
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="../../../Controller_and_Model/Controller/DeleteAward.php">
            <div class="edit-box-downer">
                <div class="fully-select-subtitle str">
                    Select Student
                </div>
                <div class="student-deleting-row share-box-fully-select">
                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="delete_stud"
                           value=style="">
                    <div class="class-adding-text str">
                        $award[2]
                    </div>
                </div>
            </div>
            <input type="submit" value="Delete" class="edit-box-red stb">
        </form>
    </div>

</div>
</body>
</html>