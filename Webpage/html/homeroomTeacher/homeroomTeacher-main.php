<!DOCTYPE html>
<?php
if (!session_id()) {
    session_start();
} ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/homeroomTeacher/homeroomTeacher-common.css">
    <link rel="stylesheet" type="text/css"
          href="../../CSS/panel/homeroomTeacher/homeroomTeacher-main/homeroomTeacher-main.css">

    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>

    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/homeroomTeacher/homeroomTeacher-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/homeroomTeacher/homeroomTeacher-main/homeroomTeacher-main.js">

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
        <div class="right-down homeroomT-homeroomList" id="20201">
            <div class="homeroomT-homeroomList-top">
                <div class="right-info">
                    <div class="right-info-left stb">
                        <div class="right-title">
                            Homerooms
                        </div>
                        <div class="right-subtitle">
                            2019 - 2020 First Semester
                        </div>
                    </div>
                </div>
                <div class="homeroomT-homeroomDown">
                    <div class="homeroomT-homeroomTitle stb">
                        Your Homeroom
                    </div>
                    <?php
                    require_once '../../../Controller_and_Model/Model/HomeRoomClassActions.php';
                    $tot_res = FetchHRClassByHRTeacherId($_SESSION['teacher_id']);
                    if ($tot_res[0]) {
                        $tot_res = $tot_res[1];
                    }
                    foreach ($tot_res as $hr_class_detail) {
                        $hr_class_id = $hr_class_detail[0];
                        $hr_class_grade = $hr_class_detail[1];
                        $hr_class_program = $hr_class_detail[2];
                        $hr_class_name = $hr_class_detail[3];
                        if ($hr_class_program == 0) {
                            $hr_class_program = "MYP";
                        }
                        $hr_class_combine = $hr_class_program . ' ' . $hr_class_grade . '-' . $hr_class_name;
                        echo <<<END
                    <div class="homeroomT-homeroomRow">
                        <div class="right-box thinner-box">
                            <div class="right-box-title stb">
                                $hr_class_combine
                            </div>
                            <span class="material-icons thinner-box-img">
                                chevron_right
                            </span>
                            <input type="hidden" class="homeroom-class-id" value="$hr_class_id">
                        </div>
                    </div>
END;
                    }

                    ?>
                </div>
                <div class="homeroomT-homeroomList-down">
                    <div class="homeroomT-homeroomTitle stb">
                        Your Courses
                    </div>
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
            </div>
            <div class="right-down homeroomT-homeroomList" id="20192">
                <div class="homeroomT-homeroomList-top">
                    <div class="right-info">
                        <div class="right-info-left stb">
                            <div class="right-title">
                                Homerooms
                            </div>
                            <div class="right-subtitle">
                                2018 - 2019 Second Semester
                            </div>
                        </div>
                    </div>
                    <div class="homeroomT-homeroomDown">
                        <div class="homeroomT-homeroomTitle stb">
                            Your Homeroom
                        </div>
                        <div class="homeroomT-homeroomRow">
                            <div class="right-box thinner-box" onclick="window.location=''">
                                <div class="right-box-title stb">
                                    MYP 9-2
                                </div>
                                <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeroomT-homeroomList-down">
                    <div class="homeroomT-homeroomTitle stb">
                        All Homeroom
                    </div>
                    <div class="homeroomT-homeroomRow">
                        <div class="right-box thinner-box" onclick="window.location=''">
                            <div class="right-box-title stb">
                                IELTS 9-1
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                        </div>
                        <div class="right-box thinner-box" onclick="window.location=''">
                            <div class="right-box-title stb">
                                IELTS 9-3
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                        </div>
                        <div class="right-box thinner-box" onclick="window.location=''">
                            <div class="right-box-title stb">
                                IELTS 10-1
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-down homeroomT-homeroomList" id="20191">
                <div class="homeroomT-homeroomList-top">
                    <div class="right-info">
                        <div class="right-info-left stb">
                            <div class="right-title">
                                Homerooms
                            </div>
                            <div class="right-subtitle">
                                2018 - 2019 First Semester
                            </div>
                        </div>
                    </div>
                    <div class="homeroomT-homeroomDown">
                        <div class="homeroomT-homeroomTitle stb">
                            Your Homeroom
                        </div>
                        <div class="homeroomT-homeroomRow">
                            <div class="right-box thinner-box" onclick="window.location=''">
                                <div class="right-box-title stb">
                                    MYP 9-2
                                </div>
                                <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeroomT-homeroomList-down">
                    <div class="homeroomT-homeroomTitle stb">
                        All Homeroom
                    </div>
                    <div class="homeroomT-homeroomRow">
                        <div class="right-box thinner-box" onclick="window.location=''">
                            <div class="right-box-title stb">
                                MYP 9-1
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                        </div>
                        <div class="right-box thinner-box" onclick="window.location=''">
                            <div class="right-box-title stb">
                                MYP 9-3
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                        </div>
                        <div class="right-box thinner-box" onclick="window.location=''">
                            <div class="right-box-title stb">
                                MYP 10-1
                            </div>
                            <span class="material-icons thinner-box-img">
                            chevron_right
                        </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="right-down homeroomT-studentList" id="student">
                <div class="right-info">
                    <div class="right-info-left stb">
                        <div class="right-title">
                            All Students
                        </div>
                    </div>
                </div>

                <div class="studentList-right-down-main">
                    <div class="studentList-right-down-row">
                        <?php
                        require_once "../../../Controller_and_Model/Model/UserActions.php";
                        $tot_res = FetchAllStudent();
                        foreach ($tot_res as $stud_info) {
                            $stud_chi = $stud_info[1];
                            $stud_eng = $stud_info[2];
                            $stud_email = $stud_info[3];
                            $stud_num = $stud_info[8];
                            $stud_name_row = $stud_chi . ' ' . $stud_eng;
                            echo <<< END
                <div class="right-box">
                        <div class="right-box-upper">
                            <div class="right-box-title stb">
                                $stud_name_row
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
                                    $stud_num;
                                </div>
                            </div>
                            <div class="right-box-detail">
                                <div class="right-box-detail-title str">
                                    Email
                                </div>
                                <div class="right-box-detail-name stm">
                                    $stud_email;
                                </div>
                            </div>
                        </div>
                    </div>
    
 END;
                        }
                        ?>
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

        </div>
    </div>
</body>
</html>