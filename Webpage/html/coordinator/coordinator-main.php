<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/coordinator/coordinator-main.css">

    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>

    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/coordinator/coordinator-main.js">

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
                    <div class="left-content-manu-nevi" name="teacher" id="teacher-nevi">
                        <div class="left-content-manu-year">
                            All Teachers
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="course" id="course-nevi">
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
        <div class="right-down coordinator-roomList" id="20201">
            <div class="coordinator-roomList-top">
                <div class="right-info">
                    <div class="right-info-left stb">
                        <div class="right-title">
                            Homerooms & Classes
                        </div>
                        <div class="right-subtitle">
                            2019 - 2020 First Semester
                        </div>
                    </div>
                </div>
                <div class="right-nevi str">
                    <div class="right-navi-item">
                        Your Classroom
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        Homeroom
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        Classroom
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-gap-last">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="coordinator-personal-classroom">
                <div class="homeroomT-homeroomRow">
                    <?php
                    require_once '../../../Controller_and_Model/Model/SubjectClassActions.php';
                    require_once '../../../Controller_and_Model/Model/SubjectActions.php';

                    $tot_res = FetchSubjClassBySubjTeacherId($_SESSION['teacher_id']);
                    if ($tot_res[0]) {
                        $tot_res = $tot_res[1];
                    }
                    foreach ($tot_res as $subj_class_detail) {
                        $subj_class_id = $subj_class_detail[0];
                        $subj_class_subj_id = $subj_class_detail[2];
                        $subj_class_grade = $subj_class_detail[5];
                        $subj_class_name = $subj_class_detail[7];
                        $tot_res_subj = FetchSubjById($subj_class_subj_id);
                        if ($tot_res_subj[0]) {
                            $tot_res_subj = $tot_res_subj[1][0];
                        }
                        $subj_class_subj = $tot_res_subj[1];
                        $subj_class_combine = 'G' . $subj_class_grade . ' ' . $subj_class_subj . '-' . $subj_class_name;
                        echo <<<END
                        <div class="right-box thinner-box">
                            <div class="right-box-title stb">
                                $subj_class_combine
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                            <input type="hidden" class="subject-class-id" value="$subj_class_id">
                        </div>
                    END;
                    }
                    ?>
                </div>
            </div>

            <div class="coordinator-homeroom">
                <div class="coordinator-homeroom-add-outer">
                    <div class="coordinator-studentScore-add coordinator-homeroom-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

                        <div class="right-down-info-button-text stb">
                            ADD HOMEROOM
                        </div>
                    </div>
                </div>
                <div class="coordinator-homeroomRow">
                    <div class="right-box thinner-box"
                         onclick="window.location='../homeroomTeacher/Teacher-homeroomList.html'">
                        <div class="right-box-title stb">
                            MYP 9-2
                        </div>
                        <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                    </div>
                    <div class="right-box thinner-box"
                         onclick="window.location='../homeroomTeacher/homeroomTeacher-homeroomList.html'">
                        <div class="right-box-title stb">
                            MYP 9-2
                        </div>
                        <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                    </div>
                </div>
            </div>
            <div class="coordinator-classroom">
                <div class="coordinator-classroom-add-outer">
                    <div class="coordinator-studentScore-add coordinator-classroom-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

                        <div class="right-down-info-button-text stb">
                            ADD CLASSROOM
                        </div>
                    </div>
                    <div class="coordinator-studentScore-add coordinator-course-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

                        <div class="right-down-info-button-text stb">
                            ADD COURSE
                        </div>
                    </div>
                </div>
                <?php
                require_once '../../../Controller_and_Model/Model/SubjectClassActions.php';
                require_once '../../../Controller_and_Model/Model/SubjectActions.php';

                $tot_res = FetchAllSubjClass();
                if ($tot_res[0]) {
                    $tot_res = $tot_res[1];
                }

                foreach ($tot_res as $subj_class_detail) {
                    $subj_class_id = $subj_class_detail[0];
                    $subj_class_subj_id = $subj_class_detail[2];
                    $subj_class_grade = $subj_class_detail[5];
                    $subj_class_name = $subj_class_detail[7];
                    $tot_res_subj = FetchSubjById($subj_class_subj_id);

                    if ($tot_res_subj[0]) {
                        $tot_res_subj = $tot_res_subj[1][0];
                    }
                    $subj_class_subj = $tot_res_subj[1];
                    $subj_class_combine = 'G' . $subj_class_grade . ' ' . $subj_class_subj . '-' . $subj_class_name;
                    echo <<<END
                        <div class="right-box thinner-box">
                            <div class="right-box-title stb">
                                $subj_class_combine
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                            <input type="hidden" class="subject-class-id" value="$subj_class_id">
                        </div>
                    END;
                }
                ?>

            </div>
        </div>
        <div class="right-down coordinator-roomList" id="20192">
            <div class="coordinator-roomList-top">
                <div class="right-info">
                    <div class="right-info-left stb">
                        <div class="right-title">
                            Homerooms & Classes
                        </div>
                        <div class="right-subtitle">
                            2018 - 2019 Second Semester
                        </div>
                    </div>
                </div>
                <div class="right-nevi str">
                    <div class="right-navi-item">
                        Your Classroom
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        Homeroom
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item">
                        Classroom
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-gap-last">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="coordinator-personal-classroom">
                <div class="coordinator-homeroomRow">
                    <div class="right-box thinner-box"
                         onclick="window.location='homeroomTeacher-homeroomList.html'">
                        <div class="right-box-title stb">
                            Chinese 1
                        </div>
                        <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                    </div>
                    <div class="right-box thinner-box"
                         onclick="window.location='homeroomTeacher-homeroomList.html'">
                        <div class="right-box-title stb">
                            English 1
                        </div>
                        <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                    </div>
                </div>
            </div>

            <div class="coordinator-homeroom">
                <div class="coordinator-studentScore-add-outer">
                    <div class="coordinator-studentScore-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

                        <div class="right-down-info-button-text stb">
                            ADD HOMEROOM
                        </div>
                    </div>
                </div>
                <div class="coordinator-homeroomRow">
                    <div class="right-box thinner-box"
                         onclick="window.location='homeroomTeacher-homeroomList.html'">
                        <div class="right-box-title stb">
                            MYP 9-2
                        </div>
                        <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                    </div>
                    <div class="right-box thinner-box"
                         onclick="window.location='homeroomTeacher-homeroomList.html'">
                        <div class="right-box-title stb">
                            MYP 9-2
                        </div>
                        <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                    </div>
                </div>
            </div>
            <div class="coordinator-classroom">
                <div class="coordinator-studentScore-add-outer">
                    <div class="coordinator-studentScore-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

                        <div class="right-down-info-button-text stb">
                            ADD CLASSROOM
                        </div>
                    </div>
                    <div class="coordinator-studentScore-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

                        <div class="right-down-info-button-text stb">
                            ADD COURSE
                        </div>
                    </div>
                </div>
                <?php
                require_once '../../../Controller_and_Model/Model/SubjectClassActions.php';

                $tot_res = FetchAllSubjClass();
                if ($tot_res[0]) {
                    $tot_res = $tot_res[1];
                }
                foreach ($tot_res as $subj_class_detail) {
                    $subj_class_id = $subj_class_detail[0];
                    $subj_class_subj_id = $subj_class_detail[2];
                    $subj_class_grade = $subj_class_detail[5];
                    $subj_class_name = $subj_class_detail[7];
                    $tot_res_subj = FetchSubjById($subj_class_subj_id);
                    if ($tot_res_subj[0]) {
                        $tot_res_subj = $tot_res_subj[1][0];
                    }
                    $subj_class_subj = $tot_res[1];
                    $subj_class_combine = 'G' . $subj_class_grade . ' ' . $subj_class_subj . '-' . $subj_class_name;
                    echo <<<END
                        <div class="right-box thinner-box">
                            <div class="right-box-title stb">
                                $subj_class_combine
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                            </span>
                            <input type="hidden" class="subject-class-id" value="$subj_class_id">
                        </div>
                    END;
                }
                ?>
            </div>
        </div>

        <div class="right-down coordinator-student-crew">
            <div class="coordinator-roomList-top">
                <div class="right-info student-info">
                    <div class="right-info-left stb">
                        <div class="right-title">
                            All Students
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-student-list">
                <!--                --><?php
                //                require_once '../../../Controller_and_Model/Model/UserActions.php';
                //
                //                $tot_res = FetchAllStudent();
                //                if($tot_res[0]){
                //                    $tot_res = $tot_res[1];
                //                }
                //                foreach($tot_res as $stud_info){
                //                    $stud_chi = $stud_info[1];
                //                    $stud_eng = $stud_info[2];
                //                    $stud_email = $stud_info[3];
                //                    $stud_num = $stud_info[8];
                //                    $stud_name_com = $stud_chi . ' ' . $stud_eng;
                //                    echo<<<END
                //                <div class="right-box enrolled-student" name=""
                //                     style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                //                    <div class="right-box-upper">
                //                        <div class="right-box-title stb">
                //                           $stud_name_com
                //                        </div>
                //                        <span class="material-icons right-box-arrow" style="color: rgb(27, 162, 185);">
                //                            chevron_right
                //                        </span>
                //                    </div>
                //                    <div class="right-box-downer">
                //                        <div class="right-box-detail">
                //                            <div class="right-box-detail-title str" style="color: rgb(153, 156, 158);">
                //                                ID
                //                            </div>
                //                            <div class="right-box-detail-name stm" style="color: rgb(0, 0, 0);">
                //                                $stud_num
                //
                //                            </div>
                //                        </div>
                //                        <div class="right-box-detail">
                //                            <div class="right-box-detail-title str" style="color: rgb(153, 156, 158);">
                //                                Email
                //                            </div>
                //                            <div class="right-box-detail-name stm" style="color: rgb(0, 0, 0);">
                //                                $stud_email
                //                            </div>
                //                        </div>
                //                    </div>
                //                </div>
                //
                //
                //END;
                //
                //                }
                //                ?>

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
        <div class="right-down coordinator-teacher-crew">
            <div class="coordinator-roomList-top">
                <div class="right-info student-info">
                    <div class="right-info-left stb">
                        <div class="right-title">
                            All Teachers
                        </div>
                    </div>
                    <div class="right-info-right">
                        <div class="right-down-info-button" style="background-color: #DD3444">
                            <span class="material-icons right-down-info-button-img">
                                delete_forever
                            </span>
                            <div class="right-down-info-button-text stb">
                                REMOVE TEACHER
                            </div>
                        </div>
                        <div class="right-down-info-button add-teacher-button" style="margin-right: 30px;">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>
                            <div class="right-down-info-button-text stb">
                                ADD TEACHER
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
        <div class="right-down coordinator-course-crew">
            <div class="coordinator-roomList-top">
                <div class="right-info student-info">
                    <div class="right-info-left stb">
                        <div class="right-title">
                            All Courses
                        </div>
                    </div>
                    <div class="right-info-right">
                        <div class="right-down-info-button" style="background-color: #DD3444">
                            <span class="material-icons right-down-info-button-img">
                                delete_forever
                            </span>
                            <div class="right-down-info-button-text stb">
                                REMOVE COURSE
                            </div>
                        </div>
                        <div class="right-down-info-button all-course-add" style="margin-right: 30px;">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>
                            <div class="right-down-info-button-text stb">
                                ADD COURSE
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-student-list">
                <?php
                require_once "../../../Controller_and_Model/Model/SubjectActions.php";

                $tot_res = FetchAllSubject();
                if ($tot_res[0]) {
                    $tot_res = $tot_res[1];
                }
                foreach ($tot_res as $subj_info) {
                    $subj_name = $subj_info[1];
                    echo <<<END
                <div class="right-box enrolled-student" name=""
                     style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            $subj_name
                        </div>
                        <span class="material-icons right-box-arrow" style="color: rgb(27, 162, 185);">
                            chevron_right
                        </span>
                    </div>
                    <input type="hidden" class="enrolled-student-class" value="10">
                    <input type="hidden" class="enrolled-student-depart" value="IG">
                    <input type="hidden" class="enrolled-student-grade" value="11">
                </div>

END;

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
            <div class="personal-panel-row-last str"
                 onclick="window.location='../../../Controller_and_Model/Controller/Logout.php'">
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
    <div class="share-box add-homeroom-box">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Homeroom
            </div>
            <span class="material-icons edit-box-close">
                            close
            </span>
        </div>
        <form method="post">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox edit-box-half str" style="margin-right: 20px;">
                        <div class="edit-box-innerbox-title">
                            Grade
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="homeroom_grade"
                               placeholder="">
                    </div>
                    <div class="edit-box-innerbox edit-box-half str">
                        <div class="edit-box-innerbox-title">
                            Class
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="homeroom_class"
                               placeholder="">
                    </div>
                </div>
                <div class="edit-box-row">
                    <div class="edit-box-innerbox str">
                        <div class="score-editing-innerbox">
                            <div class="edit-box-innerbox-title score-editing-innerbox-title">
                                Homeroom Number
                            </div>
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="homeroom_num"
                               placeholder="">
                    </div>
                </div>
                <input class="edit-box-green stb" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="share-box add-subject-box">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Subject
            </div>
            <span class="material-icons edit-box-close">
                            close
            </span>
        </div>
        <form method="post">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox str">
                        <div class="score-editing-innerbox">
                            <div class="edit-box-innerbox-title score-editing-innerbox-title">
                                Subject Name
                            </div>
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="subject_name"
                               placeholder="">
                    </div>
                </div>
                <input class="edit-box-green stb" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="share-box add-class-box">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Classroom
            </div>
            <span class="material-icons edit-box-close">
                            close
            </span>
        </div>
        <form method="post">
            <div class="edit-box-downer">
                <div class="edit-box-row">
                    <div class="edit-box-innerbox str">
                        <div class="score-editing-innerbox">
                            <div class="edit-box-innerbox-title score-editing-innerbox-title">
                                Select Subject
                            </div>
                        </div>
                        <select type="text" class="edit-box-innerbox-select score-editing-innerbox-input"
                                name="homeroom_subject"
                                placeholder="">
                            <option>Chinese</option>
                            <option>English</option>
                        </select>
                    </div>
                </div>
                <div class="edit-box-row">
                    <div class="edit-box-innerbox edit-box-half str" style="margin-right: 20px;">
                        <div class="edit-box-innerbox-title">
                            Grade
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="homeroom_grade"
                               placeholder="">
                    </div>
                    <div class="edit-box-innerbox edit-box-half str">
                        <div class="edit-box-innerbox-title">
                            Class
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="homeroom_class"
                               placeholder="">
                    </div>
                </div>
                <input class="edit-box-green stb" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="share-box add-teacher-box">
        <div class="edit-box-top">
            <div class="edit-box-title stm">
                Add Teacher
            </div>
            <span class="material-icons edit-box-close">
                            close
                </span>
        </div>
        <form method="post" action="">
            <div class="edit-box-downer">
                <div class="private-box-upper">
                    <div class="edit-box-row">
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Chinese Name
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                   name="chinese-name">
                        </div>
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                English Name
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                   name="english-name">
                        </div>
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Gender
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-select private-box-upper-input str"
                                    name="gender-name">
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="edit-box-row">
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Teacher ID
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                   name="teacher-id">
                        </div>
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Phone Number
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                   name="phone-num">
                        </div>
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Email
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                   name="teacher-email">
                        </div>
                    </div>
                </div>
                <div class="private-box-upper">
                    <div class="edit-box-row">
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Is Homeroom Teacher Name
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-select private-box-downer-input str"
                                    name="whether-teacher-homeroom">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                        </div>
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Select Homeroom
                                <span style="color: #DD3444">
                                    *
                                </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-select private-box-downer-input str"
                                    name="teacher-homeroom-id">
                                <option value="homeroom_id">MYP G1-1</option>
                                <option value="homeroom_id">MYP G1-2</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="private-box-downer">
                    <div class="edit-box-row">
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Is Course Teacher
                                <span style="color: #DD3444">
                                        *
                                    </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-input str" style="width: 625px"
                                    name="whether-teacher-subject">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="edit-box-row">
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Select Course
                                <span style="color: #DD3444">
                                        *
                                    </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                    name="teacher-course">
                                <option value="course_id">Chinese</option>
                                <option value="course_id">English</option>
                            </select>
                        </div>
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Number of Class Teaching
                                <span style="color: #DD3444">
                                        *
                                    </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                    name="teacher-class-num">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="edit-box-row">
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Select Class
                                <span style="color: #DD3444">
                                        *
                                    </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                    name="teacher-class_2">
                                <option value="class_id">G2 Chinese</option>
                                <option value="class_id">G1 Chinese</option>
                            </select>
                        </div>
                        <div class="edit-box-innerbox private-box-inner str">
                            <div class="edit-box-innerbox-title">
                                Select Class
                                <span style="color: #DD3444">
                                        *
                                    </span>
                            </div>
                            <select type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                    name="teacher-class_2">
                                <option value="class_id">G2 Chinese</option>
                                <option value="class_id">G1 Chinese</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <input class="edit-box-green private-box-submit stb" type="submit" value="Update Personal Information">
        </form>
    </div>

</div>
</body>
</html>