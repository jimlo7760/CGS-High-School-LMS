<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hi <?php
        echo $_SESSION['eng_name'];
        ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/student/student-main/student-main.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../js/session-plugin/session-plugin.js">

    </script>
    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/student/student-main/student-main.js">

    </script>

</head>
<body>
<div class="all">
    <?php //get the button clicked from subjectTeacher-classList.php
    $id = "";
    if (isset($_POST['navi_id'])) {
        $id = $_POST['navi_id'];
    }
    echo "<input type='hidden' id='navi-id' value='";
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
                        <i class="material-icons md-18 left-content-navi-img initial_transform">
                            keyboard_arrow_up
                        </i>
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
                <div class="right-top-person">
                    <div class="right-top-person-name stm">
                        <?php
                        echo $_SESSION["eng_name"];
                        ?>
                    </div>
                    <?php
                    $avatar_path = $_SESSION["avatar_path"];
                    echo "<img src=\"../../../Controller_and_Model/uploads/$avatar_path\" height=\"45\" width=\"45\" class=\"right-top-person-portrait\">";
                    ?>
                    <i class="material-icons right-top-person-arrow initial_transform">
                        keyboard_arrow_down
                    </i>
                </div>
            </div>
        </div>
        <div class="right-down" id="20201">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title">
                        Your Courses
                    </div>
                    <div class="right-subtitle">
                        2019 - 2020 First Semester
                    </div>
                </div>
                <div class="right-info-right">
                    <div class="right-info-box">
                        <div class="right-info-box-title str">
                            Homeroom
                        </div>
                        <div class="right-info-box-content stb">
                            <?php
                            switch ($_SESSION["program"]) {
                                case 0:
                                    echo "MYP";
                                    break;
                                case 1:
                                    echo "IG";
                                    break;
                                case 2:
                                    echo "AP";
                                    break;
                            }
                            echo " " . $_SESSION["grade"] . "-" . $_SESSION["class_num"];;

                            ?>
                        </div>
                    </div>
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
                </div>
            </div>
            <?php
            require_once "../../../Controller_and_Model/Model/SubjectActions.php";
            require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
            require_once "../../../Controller_and_Model/Model/TeacherInfoActions.php";
            $i = 0;

            while ($i < count($_SESSION["subj_class_ids"])) {
                $tot_res = FetchSubjById($_SESSION["subj_class_ids"][$i]);
                if ($tot_res[0] == 1) {
                    $subj_info = $tot_res[1][0];
                    $subj_name = $subj_info[1];
                    $subj_teacher_id = FetchSubjTeacherIDBySubjId($_SESSION["subj_class_ids"][$i]);
                    $subj_teacher_name = FetchTeacherInfoById($subj_teacher_id)[1][0][2];
                }
                echo <<< END
            <div class="right-box">
                <form action="student-class.php" method="get" class="box-class-id">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            $subj_name
                        </div>
                        <i class="material-icons right-box-arrow">
                            chevron_right
                        </i>
                    </div>
                    <div class="right-box-downer">
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Instructor
                            </div>
                            <div class="right-box-detail-name stm">
                                $subj_teacher_name
                            </div>
                        </div>
                    </div>
                    <input type="text" name="subj_id" value="$subj_info[0]" style="display:none">
                    
                </form>
            </div>
END;
                $i++;
            }
            ?>
        </div>
        <div class="right-down" id="20192">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title">
                        Your Courses
                    </div>
                    <div class="right-subtitle">
                        2018 - 2019 Second Semester
                    </div>
                </div>
                <div class="right-info-right">
                    <div class="right-info-box">
                        <div class="right-info-box-title str">
                            Homeroom
                        </div>
                        <div class="right-info-box-content stb">
                            <?php
                            switch ($_SESSION["program"]) {
                                case 0:
                                    echo "MYP";
                                    break;
                                case 1:
                                    echo "IG";
                                    break;
                                case 2:
                                    echo "AP";
                                    break;
                            }
                            echo " " . $_SESSION["grade"] . "-" . $_SESSION["class_num"];;

                            ?>
                        </div>
                    </div>
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
                </div>
            </div>
            <?php
            require_once "../../../Controller_and_Model/Model/SubjectActions.php";
            require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
            require_once "../../../Controller_and_Model/Model/TeacherInfoActions.php";
            $i = 0;

            while ($i < count($_SESSION["subj_class_ids"])) {
                $tot_res = FetchSubjById($_SESSION["subj_class_ids"][$i]);
                if ($tot_res[0] == 1) {
                    $subj_info = $tot_res[1][0];
                    $subj_name = $subj_info[1];
                    $subj_teacher_id = FetchSubjTeacherIDBySubjId($_SESSION["subj_class_ids"][$i]);
                    $subj_teacher_name = FetchTeacherInfoById($subj_teacher_id)[1][0][2];
                }
                echo <<< END
            <div class="right-box">
                <form action="student-class.php" method="get" class="box-class-id">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            $subj_name
                        </div>
                        <i class="material-icons right-box-arrow">
                            chevron_right
                        </i>
                    </div>
                    <div class="right-box-downer">
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Instructor
                            </div>
                            <div class="right-box-detail-name stm">
                                $subj_teacher_name
                            </div>
                        </div>
                    </div>
                    <input type="text" name="subj_id" value="$subj_info[0]" style="display:none">
                    
                </form>
            </div>
END;
                $i++;
            }
            ?>
        </div>
        <div class="right-down" id="20191">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title">
                        Your Courses
                    </div>
                    <div class="right-subtitle">
                        2018 - 2019 First Semester
                    </div>
                </div>
                <div class="right-info-right">
                    <div class="right-info-box">
                        <div class="right-info-box-title str">
                            Homeroom
                        </div>
                        <div class="right-info-box-content stb">
                            <?php
                            switch ($_SESSION["program"]) {
                                case 0:
                                    echo "MYP";
                                    break;
                                case 1:
                                    echo "IG";
                                    break;
                                case 2:
                                    echo "AP";
                                    break;
                            }
                            echo " " . $_SESSION["grade"] . "-" . $_SESSION["class_num"];;

                            ?>
                        </div>
                    </div>
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
                </div>
            </div>
            <?php
            require_once "../../../Controller_and_Model/Model/SubjectActions.php";
            require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
            require_once "../../../Controller_and_Model/Model/TeacherInfoActions.php";
            $i = 0;

            while ($i < count($_SESSION["subj_class_ids"])) {
                $tot_res = FetchSubjById($_SESSION["subj_class_ids"][$i]);
                if ($tot_res[0] == 1) {
                    $subj_info = $tot_res[1][0];
                    $subj_name = $subj_info[1];
                    $subj_teacher_id = FetchSubjTeacherIDBySubjId($_SESSION["subj_class_ids"][$i]);
                    $subj_teacher_name = FetchTeacherInfoById($subj_teacher_id)[1][0][2];
                }
                echo <<< END
            <div class="right-box">
                <form action="student-class.php" method="get" class="box-class-id">
                    <div class="right-box-upper">
                        <div class="right-box-title stb">
                            $subj_name
                        </div>
                        <i class="material-icons right-box-arrow">
                            chevron_right
                        </i>
                    </div>
                    <div class="right-box-downer">
                        <div class="right-box-detail">
                            <div class="right-box-detail-title str">
                                Instructor
                            </div>
                            <div class="right-box-detail-name stm">
                                $subj_teacher_name
                            </div>
                        </div>
                    </div>
                    <input type="text" name="subj_id" value="$subj_info[0]" style="display:none">
                    
                </form>
            </div>
END;
                $i++;
            }
            ?>
        </div>

    </div>
    <div class="personal-panel">
        <div class="personal-panel-top">
            <?php
            $avatar_path = $_SESSION["avatar_path"];
            echo "<img src=\"../../../Controller_and_Model/uploads/$avatar_path\" height=\"30\" width=\"30\" class=\"personal-panel-portrait\">";
            ?>
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
            <div class="personal-panel-row str" name="profile">
                My Profile
            </div>
            <div class="personal-panel-row str" name="manage_class">
                Add / Drop Class
            </div>
            <div class="personal-panel-row str" name="manage_score">
                Goal Score
            </div>
            <div class="personal-panel-row-last str" onclick="window.location='../../../Controller_and_Model/Controller/Logout.php'">
                Sign Out
            </div>
        </div>
    </div>
    <div class="grey-bg grey-bg-main">

    </div>
    <div class="result-box">

    </div>
</div>
</body>