<!DOCTYPE html>
<?php
if (!session_id()){
    session_start();
}
?>
<?php
$_SESSION["subj_orig_term_targets"] = array();
$_SESSION["subj_class_id_idxs"] = array();
$_SESSION["exam_id_1"] = 0;
$_SESSION["exam_id_2"] = 0;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hi Danny</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
<link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/student/student-setting/student-setting.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/student/student-setting/student-setting.js">

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
                        <i class="material-icons left-content-navi-img">
                            keyboard_arrow_up
                        </i>
                    </div>
                </div>
                <div class="left-content-manu stb">
                    <div class="left-content-manu-nevi" onclick="window.location='student-main.php'">
                        <div class="left-content-manu-year">
                            2019 - 2020
                        </div>
                        <div class="left-content-manu-current">
                            CURRENT
                        </div>
                    </div>
                    <div class="left-content-manu-nevi">
                        <div class="left-content-manu-year">
                            2019 - 2020
                        </div>
                        <div class="left-content-manu-current no-select">
                            CURRENT
                        </div>
                    </div>
                    <div class="left-content-manu-nevi">
                        <div class="left-content-manu-year">
                            2019 - 2020
                        </div>
                        <div class="left-content-manu-current no-select">
                            CURRENT
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-content" id="personal-profile">
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
                <div class="right-info-left stb">
                    <div class="right-title setting-title">
                        Setting
                    </div>
                </div>
            </div>
            <div class="right-detail">
                <div class="right-nevi str">
                    <div class="right-navi-item navi-profile">
                        Profile
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item navi-class">
                        Manage Classes
                    </div>
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
                    <div class="right-navi-item navi-score">
                        Manage Goal Score
                    </div>
                    <div class="right-navi-gap-last">
                        &nbsp;
                    </div>
                </div>
                <div class="right-profile-whole">
                    <div class="right-person-info">
                        <div class="right-person-info-left">
                            <img src="../../img/图像 12@2x.png" height="100" width="100"
                                 class="right-person-info-portrait"/>
                            <div class="right-person-info-user">
                                <div class="right-person-info-des">
                                    <div class="right-person-info-name stm">
                                        <?php
                                        echo $_SESSION["eng_name"] . " " . $_SESSION["chi_name"];
                                        ?>
                                    </div>
                                </div>
                                <div class="right-person-info-detail">
                                    <div class="right-person-info-box">
                                        <div class="right-person-info-box-title str">
                                            Department
                                        </div>
                                        <div class="right-person-info-box-text stm">
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
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-person-info-box">
                                        <div class="right-person-info-box-title str">
                                            Grade
                                        </div>
                                        <div class="right-person-info-box-text stm">
                                            <?php
                                                echo $_SESSION["grade"];
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-person-info-box">
                                        <div class="right-person-info-box-title str">
                                            Class
                                        </div>
                                        <div class="right-person-info-box-text stm">
                                            <?php
                                                echo $_SESSION["class_num"];
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-person-info-box">
                                        <div class="right-person-info-box-title str">
                                            Email
                                        </div>
                                        <div class="right-person-info-box-text stm">
                                            <?php
                                            echo $_SESSION["email_address"];
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-person-info-box">
                                        <div class="right-person-info-box-title str">
                                            Password
                                        </div>
                                        <input type="password" class="right-person-info-box-password stm"
                                               value="qwertyuiop"
                                               readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-person-info-right">
                            <div class="right-person-edit edit-info">
                                <span class="material-icons right-person-edit-img">
                                    create
                                </span>
                                <div class="right-person-edit-text stm">
                                    Edit Profile
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-person-info-down">
                        <div class="right-person-info-row">
                            <div class="right-person-info-row-upper">
                                <div class="right-person-info-row-title stb">
                                    Awards & Prizes
                                </div>
                                <div class="right-person-edit edit-award stm">
                                    <span class="material-icons right-person-edit-img">
                                        create
                                    </span>
                                    <div class="right-person-edit-text">
                                        Edit Awards & Prizes
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
                                    $award_name = $award_info[2] . ": " . $award_info[3];
                                    $award_time = $award_info[4];
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
                                </div>
END;

                                }
                                ?>
                            </div>
                        </div>
                        <div class="right-person-info-row">
                            <div class="right-person-info-row-upper">
                                <div class="right-person-info-row-title stb">
                                    Goal University
                                </div>
                                <div class="right-person-edit edit-university">
                                    <span class="material-icons right-person-edit-img">
                                    create
                                </span>
                                    <div class="right-person-edit-text stm">
                                        Edit Goal University
                                    </div>
                                </div>
                            </div>
                            <div class="right-person-info-row-downer">
                                <?php
                                require_once "../../../Controller_and_Model/Model/StudUnivActions.php";

                                $tot_res = FetchStudUniv($_SESSION["id"]);
                                foreach ($tot_res as $univ_info) {
                                    $univ_name = $univ_info[3];
                                    echo <<< END
                                <div class="right-person-info-row-box">
                                    <div class="right-person-info-row-box-title stm">
                                        $univ_name
                                    </div>
                                    <div class="right-person-info-row-box-right">
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
                        <div class="right-person-info-row">
                            <div class="right-person-info-row-upper">
                                <div class="right-person-info-row-title stb" style="color: #DD3444;!important;">
                                    Detentions
                                </div>
                            </div>
                            <div class="right-person-info-row-downer">
                                <?php
                                require_once "../../../Controller_and_Model/Model/StudViolationActions.php";

                                $tot_res = FetchStudViolations($_SESSION["id"]);
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
                <div class="right-class-whole">
                    <div class="right-class-upper">
                        <div class="right-class-top">
                            <div class="right-class-title stb">
                                Current Enrolled
                            </div>
                            <div class="right-class-control">
                                <div class="right-class-control-box class-adding-button" style="color: #1BA2B9">
                                    <i class="material-icons right-class-control-img">
                                        add_circle
                                    </i>
                                    <div class="right-class-control-text stm">
                                        Add
                                    </div>
                                </div>
                                <div class="right-class-control-box class-deleting-button" style="color: #DD3444">
                                    <i class="material-icons right-class-control-img">
                                        delete_forever
                                    </i>
                                    <div class="right-class-control-text stm">
                                        Drop
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-class-list">
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
                                echo <<< EOD
                            <div class="right-box">
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
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Classroom
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            ICT 110A
                                        </div>
                                    </div>
                                </div>
                            </div>
EOD;
                                $i ++;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="right-class-downer">
                        <div class="right-class-process-title stb">
                            Submitted Class Exchange Ticket
                        </div>
                        <div class="right-class-process-list">
                        <?php
                            require_once "../../../Controller_and_Model/Model/SwapSubjAppActions.php";
                            require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";

                            foreach ($_SESSION["swap_app_ids"] as $swap_app_id) {
                                $swap_app_info = FetchSwapSubjAppById($swap_app_id)[1][0];
                                $status = $swap_app_info[9];
                                $orig_subj_class_id = $swap_app_info[2];
                                $target_subj_class_id = $swap_app_info[3];
                                $action_required = $swap_app_info[5];
                                $_SESSION["action_required"] = $action_required;
                                $create_time = $swap_app_info[6];

                                $orig_class_info = FetchSubjClassBySubjClassId($orig_subj_class_id);
                                if ($orig_class_info[0]) {
                                    $orig_class_info = $orig_class_info[1][0];
                                }
                                $orig_subj_id = $orig_class_info[2];
                                $orig_class_name = FetchSubjById($orig_subj_id)[1][0][1];

                                $target_class_info = FetchSubjClassBySubjClassId($target_subj_class_id);
                                if ($target_class_info[0]) {
                                    $target_class_info = $target_class_info[1][0];
                                }
                                $target_subj_id = $target_class_info[2];
                                $target_class_name = FetchSubjById($target_subj_id)[1][0][1];

                                if ($status == "0") {
                                    echo <<< END
                            <div class="right-class-process-row pending-row">
                                <div class="right-class-process-left">
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str">
                                            Added Classes
                                        </div>
                                        <div class="right-class-process-box-content stm">
                                            $orig_class_name, $target_class_name
                                        </div>
                                    </div>
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str">
                                            Submit Date
                                        </div>
                                        <div class="right-class-process-box-content stm">
                                            $create_time
                                        </div>
                                    </div>
                                </div>
                                <div class="right-class-process-right">
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str" style="text-align:right">
                                            Status
                                        </div>
                                        <div class="right-class-process-box-content stm" style="color: #FFC103">
                                            Pending
                                        </div>
                                    </div>
                                    <i class="material-icons right-class-process-right-box-img" style="color: #343A3E;">
                                        chevron_right
                                    </i>
                                </div>
                            </div>
END;

                                } else if ($status == "1") {
                                    echo <<< END
                            <div class="right-class-process-row aprove-row">
                                <div class="right-class-process-left">
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str">
                                            Added Classes
                                        </div>
                                        <div class="right-class-process-box-content stm">
                                            $orig_class_name, $target_class_name
                                        </div>
                                    </div>
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str">
                                            Submit Date
                                        </div>
                                        <div class="right-class-process-box-content stm">
                                            $create_time
                                        </div>
                                    </div>
                                </div>
                                <div class="right-class-process-right">
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str" style="text-align:right">
                                            Status
                                        </div>
                                        <div class="right-class-process-box-content stm" style="color: #1BA2B9">
                                            Approved
                                        </div>
                                    </div>
                                    <i class="material-icons right-class-process-right-box-img" style="color: #343A3E;">
                                        chevron_right
                                    </i>
                                </div>
                            </div>
END;

                                } else if ($status == "2") {
                                    echo <<< END
                                    <div class="right-class-process-row unaprove-row">
                                <div class="right-class-process-left">
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str">
                                            Added Classes
                                        </div>
                                        <div class="right-class-process-box-content stm">
                                            $orig_class_name, $target_class_name
                                        </div>
                                    </div>
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str">
                                            Submit Date
                                        </div>
                                        <div class="right-class-process-box-content stm">
                                            $create_time
                                        </div>
                                    </div>
                                </div>
                                <div class="right-class-process-right">
                                    <div class="right-class-process-box">
                                        <div class="right-class-process-box-title str" style="text-align:right">
                                            Status
                                        </div>
                                        <div class="right-class-process-box-content stm" style="color: #DD3444">
                                            Not Approved
                                        </div>
                                    </div>
                                    <i class="material-icons right-class-process-right-box-img" style="color: #343A3E;">
                                        chevron_right
                                    </i>
                                </div>
                            </div>
END;

                                }
                            }
                            $_SESSION["swap_app_info"] = FetchSwapSubjAppByStudId($_SESSION["id"]);
                        ?>
                        </div>
                    </div>
                </div>
                <div class="right-score-whole">
                    <div class="right-score-upper">
                        <div class="right-class-top">
                            <div class="right-class-title stb">
                                Current Enrolled
                            </div>
                            <div class="right-class-control">
                                <div class="right-class-control-box class-deleting-button" style="color: #DD3444">
                                    <i class="material-icons right-class-control-img">
                                        delete_forever
                                    </i>
                                    <div class="right-class-control-text stm">
                                        Drop
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-class-list">
                            <div class="right-box score-editing-box">
                                <?php
                                echo "<input class=\"edit-class-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["subj_class_ids"][0] . "\">";
                                ?>
                                <div class="right-box-upper">
                                    <div class="right-box-title stb">
                                        <?php
                                        require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                                        $tot_res = FetchSubjById($_SESSION["subj_class_ids"][0]);
                                        if ($tot_res[0] == 1) {
                                            $subj_info = $tot_res[1][0];
                                            $subj_name = $subj_info[1];
                                            echo $subj_name;
                                        }
                                        ?>
                                    </div>
                                    <i class="material-icons right-box-arrow">
                                        chevron_right
                                    </i>
                                </div>
                                <div class="right-box-downer">
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Midterm Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            require_once "../../../Controller_and_Model/Model/ExamActions.php";
                                            require_once "../../../Controller_and_Model/Model/TermTargetActions.php";
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 0) {
                                                    $exam_id = $exam_info[0];
                                                    $_SESSION["exam_id_1"] = $exam_id;
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][0]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }
                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;
                                            
                                            $_SESSION["subj_class_id_idxs"][] = $subj_id_idx;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Final Exam Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 1) {
                                                    $exam_id = $exam_info[0];
                                                    $_SESSION["exam_id_2"] = $exam_id;
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][0]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["exam_id_1"] . "a" . $_SESSION["exam_id_2"] . "\">";
                                ?>
                            </div>
                            <div class="right-box score-editing-box">
                                <?php
                                echo "<input class=\"edit-class-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["subj_class_ids"][1] . "\">";
                                ?>
                                <div class="right-box-upper">
                                    <div class="right-box-title stb">
                                        <?php
                                        require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                                        $tot_res = FetchSubjById($_SESSION["subj_class_ids"][1]);
                                        if ($tot_res[0] == 1) {
                                            $subj_info = $tot_res[1][0];
                                            $subj_name = $subj_info[1];
                                            echo $subj_name;
                                        }
                                        ?>
                                    </div>
                                    <i class="material-icons right-box-arrow">
                                        chevron_right
                                    </i>
                                </div>
                                <div class="right-box-downer">
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Midterm Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 0) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][1]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_class_id_idxs"][] = $subj_id_idx;
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;

                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Final Exam Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 1) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][1]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;

                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["exam_id_1"] . "a" . $_SESSION["exam_id_2"] . "\">";
                                ?>
                            </div>
                            <div class="right-box score-editing-box">
                                <?php
                                echo "<input class=\"edit-class-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["subj_class_ids"][2] . "\">";
                                ?>
                                <div class="right-box-upper">
                                    <div class="right-box-title stb">
                                        <?php
                                        require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                                        $tot_res = FetchSubjById($_SESSION["subj_class_ids"][2]);
                                        if ($tot_res[0] == 1) {
                                            $subj_info = $tot_res[1][0];
                                            $subj_name = $subj_info[1];
                                            echo $subj_name;
                                        }
                                        ?>
                                    </div>
                                    <i class="material-icons right-box-arrow">
                                        chevron_right
                                    </i>
                                </div>
                                <div class="right-box-downer">
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Midterm Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 0) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][2]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_class_id_idxs"][] = $subj_id_idx;
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;

                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Final Exam Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 1) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][2]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;

                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["exam_id_1"] . "a" . $_SESSION["exam_id_2"] . "\">";
                                ?>
                            </div>
                            <div class="right-box score-editing-box">
                                <?php
                                echo "<input class=\"edit-class-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["subj_class_ids"][3] . "\">";
                                ?>
                                <div class="right-box-upper">
                                    <div class="right-box-title stb">
                                        <?php
                                        require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                                        $tot_res = FetchSubjById($_SESSION["subj_class_ids"][3]);
                                        if ($tot_res[0] == 1) {
                                            $subj_info = $tot_res[1][0];
                                            $subj_name = $subj_info[1];
                                            echo $subj_name;
                                        }
                                        ?>
                                    </div>
                                    <i class="material-icons right-box-arrow">
                                        chevron_right
                                    </i>
                                </div>
                                <div class="right-box-downer">
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Midterm Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 0) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][3]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;

                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;

                                            $_SESSION["subj_class_id_idxs"][] = $subj_id_idx;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Final Exam Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 1) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][3]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;

                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;

                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["exam_id_1"] . "a" . $_SESSION["exam_id_2"] . "\">";
                                ?>
                            </div>
                            <div class="right-box score-editing-box">
                                <?php
                                echo "<input class=\"edit-class-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["subj_class_ids"][4] . "\">";
                                ?>
                                <div class="right-box-upper">
                                    <div class="right-box-title stb">
                                        <?php
                                        require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                                        $tot_res = FetchSubjById($_SESSION["subj_class_ids"][4]);
                                        if ($tot_res[0] == 1) {
                                            $subj_info = $tot_res[1][0];
                                            $subj_name = $subj_info[1];
                                            echo $subj_name;
                                        }
                                        ?>
                                    </div>
                                    <i class="material-icons right-box-arrow">
                                        chevron_right
                                    </i>
                                </div>
                                <div class="right-box-downer">
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Midterm Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 0) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][4]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;
                                            
                                            $_SESSION["subj_class_id_idxs"][] = $subj_id_idx;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Final Exam Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 1) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][4]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["exam_id_1"] . "a" . $_SESSION["exam_id_2"] . "\">";
                                ?>
                            </div>
                            <div class="right-box score-editing-box">
                                <?php
                                echo "<input class=\"edit-class-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["subj_class_ids"][5] . "\">";
                                ?>
                                <div class="right-box-upper">
                                    <div class="right-box-title stb">
                                        <?php
                                        require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                                        $tot_res = FetchSubjById($_SESSION["subj_class_ids"][5]);
                                        if ($tot_res[0] == 1) {
                                            $subj_info = $tot_res[1][0];
                                            $subj_name = $subj_info[1];
                                            echo $subj_name;
                                        }
                                        ?>
                                    </div>
                                    <i class="material-icons right-box-arrow">
                                        chevron_right
                                    </i>
                                </div>
                                <div class="right-box-downer">
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Midterm Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 0) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][5]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;
                                            
                                            $_SESSION["subj_class_id_idxs"][] = $subj_id_idx;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="right-box-detail">
                                        <div class="right-box-detail-title str">
                                            Final Exam Goal
                                        </div>
                                        <div class="right-box-detail-name stm">
                                            <?php
                                            $all_exam = FetchActiveExams()[1];
                                            foreach ($all_exam as $exam_info) {
                                                if ($exam_info[6] == 1) {
                                                    $exam_id = $exam_info[0];
                                                    $raw_term_target = FetchTermTargetsByExamId($exam_id);
                                                    if ($raw_term_target[0] == 1) {
                                                        $term_target = $raw_term_target[1][0];
                                                        $subj_ids = explode(",", $term_target[3]);
                                                        $subj_id_idx = 0;
                                                        foreach ($subj_ids as $subj_id) {
                                                            if ($subj_id == $_SESSION["subj_class_ids"][5]) {
                                                                break;
                                                            }
                                                            $subj_id_idx ++;
                                                        }

                                                        $target_scores = explode(",", $term_target[4]);
                                                        $target_score = $target_scores[$subj_id_idx];
                                                        echo $target_score;
                                                    }
                                                }
                                            }
                                            $_SESSION["subj_orig_term_targets"][$subj_id_idx][] = $target_score;
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $_SESSION["exam_id_1"] . "a" . $_SESSION["exam_id_2"] . "\">";
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
        <div class="share-box profile-box">
            <div class="edit-box-upper">
                <form method="post">
                    <div class="edit-box-top">
                        <div class="edit-box-title stm">
                            Edit Profile
                        </div>
                        <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
                    </div>
                    <div class="edit-box-portrait">
                        <img src="../../img/图像 12@2x.png" height="78" width="78" class="edit-box-portrait-img"/>
                        <div class="edit-box-portrait-right">
                            <div class="edit-box-portrait-title str">
                                Profile Picture
                            </div>
                            <div class="edit-box-portrait-button stb">
                                Click to upload a new picture
                            </div>
                            <input type="file" style="display: none" class="uploadPortrait">
                        </div>
                    </div>
                    <div class="edit-box-innerbox">
                        <div class="edit-box-innerbox-title str">
                            Email
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="email">
                    </div>
                    <input class="edit-box-green stb" type="submit" value="Update Profile">
                </form>
            </div>
            <div class="edit-box-downer">
                <form method="post">

                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Your Current Password
                        </div>
                        <input type="password" class="edit-box-innerbox-input" name="current-password"
                               placeholder="Enter password here">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Your New Password
                        </div>
                        <input type="password" class="edit-box-innerbox-input" name="new-password"
                               placeholder="Enter password here">
                    </div>
                    <input class="edit-box-red stb" type="submit" value="Reset Password">
                </form>
            </div>
        </div>
        <div class="share-box award-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Edit Awards & Prizes
                </div>
                <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
            </div>
            <div class="award-box-row">
                <div class="edit-box-innerbox award-box-big str">
                    <div class="edit-box-innerbox-title">
                        Award or Prize Title
                    </div>
                    <input type="text" class="edit-box-innerbox-input" name="award-title"
                           placeholder="Add a new award or prize…">
                </div>
                <div class="edit-box-innerbox award-box-small str">
                    <div class="edit-box-innerbox-title">
                        Year Recieved
                    </div>
                    <input type="text" class="edit-box-innerbox-input" name="award-year">
                </div>
            </div>
            <form method="post">
                <div class="award-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            Award or Prize Title
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="award-title"
                               placeholder="Add a new award or prize…">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Year Recieved
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="award-year">

                    </div>
                </div>
                <div class="award-box-row">
                    <div class="edit-box-innerbox award-box-big str">
                        <div class="edit-box-innerbox-title">
                            Award or Prize Title
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="award-title"
                               placeholder="Add a new award or prize…">
                    </div>
                    <div class="edit-box-innerbox award-box-small str">
                        <div class="edit-box-innerbox-title">
                            Year Recieved
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="award-year">
                    </div>
                </div>
                <input type="submit" class="edit-box-green stb" value="Update Awards & Prizes">
            </form>
        </div>
        <div class="share-box university-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Edit Goal University
                </div>
                <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
            </div>
            <form method="post">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Your Current Password
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="university-one"
                               placeholder="Add a new university here…">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Your New Password
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="university-two"
                               placeholder="Add a new university here…">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Your New Password
                        </div>
                        <input type="text" class="edit-box-innerbox-input" name="university-three"
                               placeholder="Add a new university here…">
                    </div>
                    <input class="edit-box-green stb" type="submit" value="Update Goal University">
                </div>
            </form>
        </div>

        <div class="share-box class-adding-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Add Classes
                </div>
                <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
            </div>
            <form method="post">
                <div class="edit-box-downer">
                    <div class="class-adding-subtitle str">
                        Select Courses
                    </div>
                    <div class="class-adding-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-adding-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-adding-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-adding-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-adding-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-adding-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-adding-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <input type="submit" value="Submit" class="edit-box-green stb">
                </div>
            </form>
        </div>

        <div class="share-box class-deleting-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Delete Classes
                </div>
                <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
            </div>
            <form method="post">
                <div class="edit-box-downer">
                    <div class="class-adding-subtitle str">
                        Select Courses
                    </div>
                    <div class="class-deleting-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-deleting-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-deleting-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-deleting-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-deleting-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-deleting-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <div class="class-deleting-row">
                        <i class="material-icons class-adding-img">
                            check_box_outline_blank
                        </i>
                        <div class="class-adding-text str">
                            Chinese A1
                        </div>
                        <input type="checkbox" class="class-adding-checkbox" name="course-select"
                               style="display: none">
                    </div>
                    <input type="submit" value="Submit" class="edit-box-red stb">
                </div>
            </form>
        </div>

        <div class="share-box pending-box">
            <form method="post">
                <div class="edit-box-upper">
                    <div class="edit-box-top">
                        <div class="edit-box-title stm">
                            Ticket Details
                        </div>
                        <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
                    </div>
                    <div class="pending-box-list">
                        <div class="pending-box-title str">
                            Added Courses
                        </div>
                        <input type="text" class="pending-box-input stb" value="" disabled="disabled">
                        <input type="text" class="pending-box-input stb" value="" disabled="disabled">

                    </div>
                </div>
                <div class="edit-box-downer">
                    <div class="pending-box-innerbox">
                        <div class="pending-box-innerbox-title str">
                            Ticket Status
                        </div>
                        <div class="pending-box-innerbox-status stb" style="color: #FFC103;">
                            Pending
                        </div>
                    </div>
                    <div class="edit-box-grey stb">
                        Dismiss
                    </div>
                </div>
            </form>
        </div>

        <div class="share-box aprove-box">
            <form method="post">
                <div class="edit-box-upper">
                    <div class="edit-box-top">
                        <div class="edit-box-title stm">
                            Ticket Details
                        </div>
                        <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
                    </div>
                    <div class="pending-box-list">
                        <div class="pending-box-title str">
                            Added Courses
                        </div>
                        <input type="text" class="pending-box-input stb" disabled="disabled">
                        <input type="text" class="pending-box-input stb" disabled="disabled">
                        <input type="text" class="pending-box-input stb" disabled="disabled">

                    </div>
                </div>
                <div class="edit-box-downer">
                    <div class="pending-box-innerbox">
                        <div class="pending-box-innerbox-title str">
                            Ticket Status
                        </div>
                        <div class="pending-box-innerbox-status stb" style="color: #1BA2B9">
                            Proved
                        </div>
                    </div>
                    <div class="edit-box-grey stb">
                        Dismiss
                    </div>
                </div>
            </form>
        </div>

        <div class="share-box unaprove-box">
            <form method="post">
                <div class="edit-box-upper">
                    <div class="edit-box-top">
                        <div class="edit-box-title stm">
                            Ticket Details
                        </div>
                        <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
                    </div>
                    <div class="pending-box-list">
                        <div class="pending-box-title str">
                            Added Courses
                        </div>
                        <input type="text" class="pending-box-input stb" disabled="disabled">
                        <input type="text" class="pending-box-input stb" disabled="disabled">
                        <input type="text" class="pending-box-input stb" disabled="disabled">

                    </div>
                </div>
                <div class="edit-box-downer">
                    <div class="pending-box-innerbox">
                        <div class="pending-box-innerbox-title str">
                            Ticket Status
                        </div>
                        <div class="pending-box-innerbox-status stb" style="color: #DD3444">
                            Not Proved
                        </div>
                    </div>
                    <div class="unprove-box-des">
                        <div class="unprove-box-des-title">
                            Action Required
                        </div>
                        <div class="unprove-box-des-text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore
                        </div>
                    </div>
                    <div class="edit-box-grey stb">
                        Dismiss
                    </div>
                </div>
            </form>
        </div>

        <div class="share-box edit-score-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Edit
                    <p class="current-class-name">
                        Chinese A1
                    </p>
                    Goal Score
                </div>
                <img src="../../img/ic_close_18px@2x.png" height="12" width="12" class="edit-box-close"/>
            </div>
            <form method="post" action="../../../Controller_and_Model/Controller/ModifyTermTarget.php">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <div class="score-editing-innerbox">
                            <div class="edit-box-innerbox-title score-editing-innerbox-title">
                                Midterm Goal
                            </div>
                            <div class="score-editing-unvalid">
                                Score Invalid
                            </div>
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="mid-goal"
                               placeholder="">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title score-editing-innerbox-title">
                            Final Exam Goal
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input"
                               name="finao-goal"
                               placeholder="">
                    </div>
                    <input class="edit-test-id" type="text" name="test-id" value="" style="display:none">
                    <input class="edit-score-id" type="text" name="class-id" value="" style="display:none">
                    <input class="edit-box-green stb" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>