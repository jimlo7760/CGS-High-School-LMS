<!DOCTYPE html>
<?php
if (!session_id()) {
    session_start();
}
require_once "../../../Controller_and_Model/Model/SwapSubjAppActions.php";
$swap_app_ids = array();
$tot_res = FetchSwapSubjAppByStudId($_SESSION["id"]);
if ($tot_res[0]) {
    $tot_res = $tot_res[1];
}

foreach ($tot_res as $swap_app_info) {
    $swap_app_ids[] = $swap_app_info[0];
}

$_SESSION["swap_app_ids"] = $swap_app_ids;
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
    <title>Hi <?php
        echo $_SESSION['eng_name'];
        ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/student/student-setting/student-setting.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../js/session-plugin/session-plugin.js">

    </script>
    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/student/student-setting/student-setting.js">

    </script>
</head>
<body>
<div class="all">
    <?php //get the button clicked from student-main.php and student-setting.php
    $id = "";
    if (isset($_POST['target_operation'])) {
        $target_operation = $_POST['target_operation'];
        echo "<input hidden='true' id='target-operation' value='";
        echo $_POST['target_operation'];
        echo "'>";
    }
    ?>
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
                        <i class="material-icons left-content-navi-img initial_transform">
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
                            2019 - 2020
                        </div>
                        <div class="left-content-manu-current no-select">
                            CURRENT
                        </div>
                    </div>
                    <div class="left-content-manu-nevi" name="20191">
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
        <div class="right-down">
            <div class="right-info">
                <div class="right-info-left stb">
                    <div class="right-title setting-title">
                        Setting
                        <?php
                        echo $_SESSION['target_operation'];
                        ?>
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
                            <?php
                            $avatar_path = $_SESSION["avatar_path"];
                            echo "<img src=\"../../../Controller_and_Model/uploads/$avatar_path\" height=\"100\" width=\"100\" class=\"right-person-info-portrait\">";
                            ?>
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
                            <div class="right-person-edit right-person-add edit-info">
                                <span class="material-icons right-person-edit-img">
                                    create
                                </span>
                                <div class="right-person-edit-text stm">
                                    Edit Account
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-person-info-down">
                        <div class="right-person-info-row">
                            <div class="right-person-info-row-upper">
                                <div class="right-person-info-row-title stb">
                                    Personal Information
                                </div>
                                <div class="right-person-edit right-person-add edit-pi stm">
                                    <span class="material-icons right-person-edit-img">
                                        create
                                    </span>
                                    <div class="right-person-edit-text">
                                        Edit Personal Information
                                    </div>
                                </div>
                            </div>
                            <?php
                            require_once "../../../Controller_and_Model/Model/UserActions.php";
                            //                            Personal information in database:
                            //                                    0. Passport Name,
                            //                                    1. Chinese Name,
                            //                                    2. English Name,
                            //                                    3. Gender,
                            //                                    4. Student Number,
                            //                                    5. Nationality,
                            //                                    6. Date of Birth,
                            //                                    7. Phone Number,
                            //                                    8. Mother's Name,
                            //                                    9. Mother's Phone Number,
                            //                                    10. Mother's Job Category,
                            //                                    11. Mother's Job Title,
                            //                                    12. Father's Name,
                            //                                    13. Father's Phone Number,
                            //                                    14. Father's Job Category,
                            //                                    15. Father's Job Title
                            $tot_res = FetchStudInfoByStudId($_SESSION["id"]);
                            $raw_personal_info = $tot_res[1][0][15];
                            $personal_info = explode(",", $raw_personal_info);
                            echo <<< END
                                <div class="right-person-info-row-downer private-info-row">
                                    <div class="private-info-row-upper">
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Passport Name
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[0]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Chinese Name
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[1]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                English Name
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[2]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Gender
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[3]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Student Number
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[4]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Nationality
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[5]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Date of Birth
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[6]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Phone Number
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[7]
                                            </div>
                                        </div>
                                    </div>
                                    <div class="private-info-row-downer">
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Mother's Name
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[8]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Mother's Phone Number
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[9]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Mother's Job Category
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[10]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Mother's Job Title
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[11]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Father's Name
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[12]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Father's Phone Number
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[13]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Father's Job Category
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[14]
                                            </div>
                                        </div>
                                        <div class="private-info-row-box">
                                            <div class="right-person-info-row-box-subtitle str">
                                                Father's Job Title
                                            </div>
                                            <div class="right-person-info-row-box-des stm">
                                                $personal_info[15]
                                            </div>
                                        </div>
                                    </div>
                                </div>
END;
                            ?>
                        </div>

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
                <div class="right-class-whole">
                    <div class="right-class-upper">
                        <div class="right-class-top">
                            <div class="right-class-title stb">
                                Current Enrolled
                            </div>
                            <div class="right-class-control">
                                <div class="right-class-control-box class-swapping-button" style="color: #0A7AFA">
                                    <span class="material-icons right-class-control-img">
                                        swap_horiz
                                    </span>
                                    <div class="right-class-control-text stm">
                                        Swap
                                    </div>
                                </div>
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
                                $i++;
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

                            //                          Fetch swap_subj_application;
                            require_once "../../../Controller_and_Model/Model/SwapSubjAppActions.php";
                            require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
                            require_once "../../../Controller_and_Model/Model/AddDropSubjApplicationActions.php";
                            $i = 0;
                            foreach ($_SESSION["swap_app_ids"] as $swap_app_id) {
                                $swap_app_info = FetchSwapSubjAppById($swap_app_id)[1][0];
                                $status = $swap_app_info[8];
                                $orig_subj_class_id = $swap_app_info[2];
                                $target_subj_class_id = $swap_app_info[3];
                                $action_required = $swap_app_info[5];
                                $_SESSION["action_required"] = $action_required;
                                $create_time = $swap_app_info[5];

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

                                //      Explanation for variable "status":
                                //      0：正在等待学科老师同意；
                                //      1：学科老师1同意，正在等待学科老师2同意；
                                //	    2：学科老师1不同意
                                //	    3：学科老师2同意，正在等待班主任同意
                                //	    4：学科老师2不同意
                                //      5：学科老师+班主任同意，正在等待项目处同意；
                                //      6：学科老师同意，班主任不同意；
                                //      7: 学科老师+班主任+项目处同意；
                                //      8：学科老师+班主任同意，项目处不同意；
                                echo <<< END
                                        <div class="right-class-process-row pending-row">
                                            <div class="right-class-process-left">
                                                <div class="right-class-process-box">
                                                    <div class="right-class-process-box-title str">
                                                        Swapped Classes
                                                    </div>
                                                    <div class="right-class-process-box-content stm">
                                                        From: $orig_class_name, To: $target_class_name
                                                    </div>
                                                    <div style="display: none">
                                                            From: $orig_class_name
                                                    </div>
                                                    <div style="display: none">
                                                            To: $target_class_name
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
                                    END;
                                if ($status == 0 || $status == 1 || $status == 3 || $status == 5) {
                                    echo <<< END
                                            <div class="right-class-process-box-content stm" style="color: #FFC103">
                                                        Pending
                                                    </div>
                                        END;
                                } else if ($status == 7) {
                                    echo <<< END
                                            <div class="right-class-process-box-content stm" style="color: #1BA2B9">
                                            Approved
                                            </div>
                                        END;
                                } else if ($status == 2 || $status == 4 || $status == 6 || $status == 8) {
                                    echo <<< END
                                            <div class="right-class-process-box-content stm" style="color: #DD3444">
                                            Not Approved
                                            </div>
                                                <div style="display: none" id="unapproved_$i">
                                                    $action_required
                                                </div>
                                            END;
                                }
                                echo <<< END
                                        
                                        </div >
                                                <i class="material-icons right-class-process-right-box-img" style = "color: #343A3E;" >
                                                    chevron_right
                                                </i >
                                        </div >
                                            <input type = "hidden" class="pending-row-status" value = "$status" >
                                            <input type="hidden" class="pending-box-type" value="0">
                                        </div >
                                        END;
                                $i++;
                            }
                            $_SESSION["add_drop_app_info"] = FetchStudAddDropAppByStudId($_SESSION["id"]);
                            $add_drop_app_info = FetchStudAddDropAppByStudId($_SESSION["id"]);
                            if ($add_drop_app_info[0] == 1) {
                                $add_drop_app_info = $add_drop_app_info[1];
                            }
                            foreach ($add_drop_app_info as $info) {
                                $app_id = $info[0];
                                $stud_id = $info[1];
                                $target_subj_class_id = $info[2];
                                $action = $info[4];
                                $admin_comment = $info[5];
                                $create_time = $info[6];
                                $status = $info[8];
                                $target_class_info = FetchSubjClassBySubjClassId($target_subj_class_id)[1][0];
                                $target_subj_id = $target_class_info[2];
                                $target_class_name = FetchSubjById($target_subj_id)[1][0][1];

                                //                  Explanation for variable "status":
                                //                  0：正在等待学科老师同意；
                                //                  1：学科老师同意，正在等待班主任同意；
                                //                  2:学科老师不同意；
                                //                  3：学科老师+班主任同意，正在等待项目处同意；
                                //                  4：学科老师同意，班主任不同意；
                                //                  5:学科老师+班主任+项目处同意；
                                //                  6：学科老师+班主任同意，项目处不同意；

                                echo <<< END
                                            <div class="right-class-process-row pending-row">
                                                <div class="right-class-process-left">
                                                    <div class="right-class-process-box">
                                    END;
                                if ($action == 1) {
                                    echo <<< END
                                            <div class="right-class-process-box-title str">
                                                Added Classes
                                            </div>
                                            <div class="right-class-process-box-content stm">
                                                Add: $target_class_name
                                            </div>
                                        END;
                                } else if ($action == 0) {
                                    echo <<< END
                                            <div class="right-class-process-box-title str">
                                                Dropped Classes
                                            </div>
                                            <div class="right-class-process-box-content stm">
                                                Drop: $target_class_name
                                            </div>
                                        END;
                                }
                                if ($action == 1) {
                                    echo <<< END
                                            <div style="display: none">
                                                    Add
                                            </div>
                                            <div style="display: none">
                                                    $target_class_name
                                            </div>
                                        END;
                                } else if ($action == 0) {
                                    echo <<< END
                                            <div style="display: none">
                                                    $target_class_name
                                            </div>
                                            <div style="display: none">
                                                    Drop
                                            </div>
                                        END;
                                }
                                echo <<< END
</div>
END;
                                echo <<< END
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
                                                    END;
                                if ($status == 0 || $status == 1 || $status == 3) {
                                    echo <<< END
                                                        <div class="right-class-process-box-content stm" style="color: #FFC103">
                                                                    Pending
                                                                </div>
                                                    END;
                                } else if ($status == 5) {
                                    echo <<< END
                                                        <div class="right-class-process-box-content stm" style="color: #1BA2B9">
                                                        Approved
                                                        </div>
                                                    END;
                                } else if ($status == 2 || $status == 4 || $status == 6) {
                                    echo <<< END
                                                        <div class="right-class-process-box-content stm" style="color: #DD3444">
                                                        Not Approved
                                                        </div>
                                                            <div style="display: none" id="unapproved_$i">
                                                                $action_required
                                                            </div>
                                                        END;
                                }
                                echo <<< END
                                                    
                                                    </div >
                                                            <i class="material-icons right-class-process-right-box-img" style = "color: #343A3E;" >
                                                                chevron_right
                                                            </i >
                                                    </div >
                                                        <input type = "hidden" class="pending-row-status" value = "$status" >
                                                        <input type="hidden" class="pending-box-type" value="1">

                                                    </div >
                                                    END;
                                $i++;
                            }
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
                        </div>
                        <div class="right-class-list">
                            <?php
                            require_once "../../../Controller_and_Model/Model/SubjectActions.php";
                            require_once "../../../Controller_and_Model/Model/ExamActions.php";
                            require_once "../../../Controller_and_Model/Model/TermTargetActions.php";
                            foreach ($_SESSION["subj_class_ids"] as $subj_class_id) {
                                $midterm_target = 0;
                                $final_target = 0;
                                $tot_res = FetchSubjClassBySubjClassId($subj_class_id);
                                $subj_class_subj_id = $tot_res[1][0][2];
                                $subj_class_grade = $tot_res[1][0][5];
                                $subj_class_name = $tot_res[1][0][7];

                                $tot_res = FetchSubjById($subj_class_subj_id);
                                $subj_class_subj = $tot_res[1][0][1];
                                $subj_class_combine = 'G' . $subj_class_grade . ' ' . $subj_class_subj . ' ' . $subj_class_name;


                                $recent_exams_raw = FetchExamByClassId($subj_class_id);
                                $check_exam = false;
                                $check_second = false;
                                if ($recent_exams_raw[0]) {
                                    $check_exam = true;
                                    $check_score_first = false;
                                    $check_score_second = false;
                                    $exam_id_first = $recent_exams_raw[1][0][0];
                                    $exam_title_first = $recent_exams_raw[1][0][1];
                                    $tot_res = FetchTermTargetsByExamId($exam_id_first);
                                    if ($tot_res[0]) {
                                        $exam_target_first = $tot_res[1][0][3];
                                        $target_first_id = $tot_res[1][0][0];
                                        $check_score_first = true;
                                        if (count($recent_exams_raw[1]) > 1) {
                                            $check_second = true;
                                            $exam_id_second = $recent_exams_raw[1][1][0];
                                            $exam_title_second = $recent_exams_raw[1][1][1];
                                            $tot_res = FetchTermTargetsByExamId($exam_id_second);
                                            if ($tot_res[0]) {
                                                $exam_target_second = $tot_res[1][0][3];
                                                $target_second_id = $tot_res[1][0][0];
                                                $check_score_second = true;
                                            }
                                        }
                                    }

                                }

                                $input1 = "<input class=\"edit-class-id\" type=\"text\" style=\"display: none\" value=\"" . $subj_class_id . "\">";
                                if ($check_second) {
                                    $input2 = "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $exam_id_first . "&" . $exam_id_second . "\">";
                                } else {
                                    $input2 = "<input class=\"current-test-id\" type=\"text\" style=\"display: none\" value=\"" . $exam_id_first . "\">";
                                }
                                echo <<< END
                                    <div class="right-box score-editing-box">
                                        $input1
                                        $input2   
                                        <div class="right-box-upper">
                                            <div class="right-box-title stb">
                                                $subj_class_combine
                                            </div>
                                            <i class="material-icons right-box-arrow">
                                                chevron_right
                                            </i>
                                        </div>
                                        <div class="right-box-downer">
                                            <div class="right-box-detail">
                                                <div class="right-box-detail-title str">
END;
                                if (!$check_exam) {
                                    echo "No Exam Created";
                                    echo "</div></div></div></div>";
                                } else {
                                    echo $exam_title_first;
                                    echo <<< END
                                                </div>
                                                <div class="right-box-detail-name stm ">
END;
                                    if (!$check_score_first) {
                                        echo 0;
                                        echo "</div>";
                                    } else {
                                        echo $exam_target_first;
                                    }
                                    echo <<< END
                                                <input type="hidden" class="target-first-id" name="target_first_id" value="$target_first_id">
                                                </div>
                                            </div>
                                            <div class="right-box-detail">
                                                <div class="right-box-detail-title str">
END;
                                    if (!$check_second) {
                                        echo "No Exam Created";
                                        echo "</div></div></div></div>";
                                    } else {
                                        echo $exam_title_second;
                                        echo <<< END
                                                </div>
                                                <div class="right-box-detail-name stm">
END;
                                        if (!$check_score_second) {
                                            echo 0;
                                            echo "</div>";
                                        } else {
                                            echo $exam_target_second;
                                        }
                                        echo <<< END
                                                <input type="hidden" class="target-second-id" name="target_second_id" value="$target_second_id">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
END;
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
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
                <div class="personal-panel-row-last str"
                     onclick="window.location='../../../Controller_and_Model/Controller/Logout.php'">
                    Sign Out
                </div>
            </div>
        </div>


        <div class="grey-bg">

        </div>
        <div class="result-box">
        </div>
        <div class="share-box profile-box">
            <div class="edit-box-upper">
                <form method="post" action="../../../Controller_and_Model/Controller/ModifyEmailAndAvatar.php"
                      enctype="multipart/form-data">
                    <div class="edit-box-top">
                        <div class="edit-box-title stm">
                            Edit Account
                        </div>
                        <span class="material-icons edit-box-close">
                            close
                        </span>
                    </div>
                    <div class="edit-box-portrait">
                        <?php
                        $avatar_path = $_SESSION["avatar_path"];
                        echo "<img src=\"../../../Controller_and_Model/uploads/$avatar_path\" height=\"78\" width=\"78\" class=\"edit-box-portrait-img\">";
                        ?>
                        <div class="edit-box-portrait-right">
                            <div class="edit-box-portrait-title str">
                                Profile Picture
                            </div>
                            <div class="edit-box-portrait-button stb">
                                Click to upload a new picture
                            </div>
                            <input type="file" style="display: none" name="avatar" class="uploadPortrait">
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
                <form method="post" action="../../../Controller_and_Model/Controller/ModifyPassword.php"
                      onsubmit="return updatePasswordCheck();">
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
                        <input type="password" class="edit-box-innerbox-input password-input-first" name="new-password1"
                               placeholder="Enter password here">
                    </div>
                    <div class="edit-box-innerbox confirm-box str">
                        <div class="edit-box-innerbox-title confirm-box-title">
                            Re-enter Password
                        </div>
                        <div class="confirm-box-unmatched">
                            Password is unmatched
                        </div>
                        <input type="password" class="edit-box-innerbox-input confirm-box-input"
                               name="new-password2" placeholder="Re-enter password here">
                    </div>
                    <input class="edit-box-red stb" type="submit" value="Reset Password">
                </form>
            </div>
        </div>

        <div class="share-box edit-private-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Edit Personal Information
                </div>
                <span class="material-icons edit-box-close">
                            close
                </span>
            </div>
            <form method="post" action="../../../Controller_and_Model/Controller/UpdatePersonalInfo.php">
                <div class="edit-box-downer">
                    <div class="private-box-upper">
                        <div class="edit-box-row">
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Passport Name
                                    <span style="color: #DD3444">
                                    *
                                </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                       name="passport-name">
                            </div>
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
                                    Passport Name
                                    <span style="color: #DD3444">
                                    *
                                </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                       name="english-name">
                            </div>
                        </div>
                        <div class="edit-box-row">
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Gender
                                    <span style="color: #DD3444">
                                    *
                                </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                       name="gender">
                            </div>
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Student Number
                                    <span style="color: #DD3444">
                                    *
                                </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                       name="student-number">
                            </div>
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Nationality
                                    <span style="color: #DD3444">
                                    *
                                </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                       name="nationality">
                            </div>
                        </div>
                        <div class="edit-box-row">
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Date of Birth
                                    <span style="color: #DD3444">
                                    *
                                </span>
                                </div>
                                <input type="date" class="edit-box-innerbox-input private-box-upper-input str"
                                       name="birth">
                            </div>
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Phone Number
                                    <span style="color: #DD3444">
                                    *
                                </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-upper-input str"
                                       name="phone-number">
                            </div>
                        </div>
                    </div>
                    <div class="private-box-downer">
                        <div class="edit-box-row">
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Mother's Name
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="mother-name">
                            </div>
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Mother's Phone Number
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="mother-phone">
                            </div>
                        </div>
                        <div class="edit-box-row">
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Mother's Job Category
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="mother-job-cat">
                            </div>
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Mother's Job Title
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="mother-job-tit">
                            </div>
                        </div>
                        <div class="edit-box-row">
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Father's Name
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="father-name">
                            </div>
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Father's Phone Number
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="father-phone">
                            </div>
                        </div>
                        <div class="edit-box-row">
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Father's Job Category
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="father-job-cat">
                            </div>
                            <div class="edit-box-innerbox private-box-inner str">
                                <div class="edit-box-innerbox-title">
                                    Father's Job Title
                                    <span style="color: #DD3444">
                                        *
                                    </span>
                                </div>
                                <input type="text" class="edit-box-innerbox-input private-box-downer-input str"
                                       name="father-job-tit">
                            </div>
                        </div>
                    </div>
                </div>
                <input class="edit-box-green private-box-submit stb" type="submit" value="Update Personal Information">
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

        <div class="share-box detention-apply-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Apply Remove Detention
                </div>
                <span class="material-icons edit-box-close">
                            close
                </span>
            </div>
            <div class="detention-box-first">
                <div class="edit-box-upper">
                    <div class="class-adding-subtitle str">
                        Select Detention
                    </div>
                    <?php
                    $tot_res = FetchStudViolationsByStudId($_SESSION["id"]);
                    foreach ($tot_res as $vio_info) {
                        if ($vio_info[9] == 3) {
                            $vio_id = $vio_info[0];
                            $title_of_violation = $vio_info[3];

                            echo <<< END
                            <div class="detention-apply-row share-box-fully-select">
                                 <input type="checkbox" class="class-adding-checkbox class-adding-img" name="detention-id"
                                  value=$vio_id style="">
                                      <div class="class-adding-text str">
                                           $title_of_violation
                                      </div>
                            </div>
END;
                        }
                    }
                    ?>
                </div>
                <div class="edit-box-downer">
                    <div class="class-adding-subtitle str">
                        Submitted Remove Tickets
                    </div>
                    <?php
                    $tot_res = FetchStudViolationsByStudId($_SESSION["id"]);
                    foreach ($tot_res as $vio_info) {
                        if ($vio_info[9] != 3) {
                            $title_of_violation = $vio_info[3];
                            $status = $vio_info[9];
                            echo <<< END
                            <div class="class-deleting-row share-box-fully-select">
                                <input type="hidden" class="detention-status" value="$status">
                                <!--
                                echo detention status above
                                0: pending, 1: approved, 2: not-approved, 3: initialized.
                                -->
                                <div class="detention-ticket-innerbox">
                                    <div class="detention-ticket-innerbox-left">
                                        <div class="right-person-info-row-box-subtitle str">
                                            Detention Title
                                        </div>
                                        <div class="right-person-info-row-box-des stm">
                                            $title_of_violation
                                        </div>
                                    </div>
                                    <div class="detention-ticket-innerbox-right">
                                        <div class="right-person-info-row-box-subtitle str">
                                            Status
                                        </div>
                                        <div class="right-person-info-row-box-des stb">
        
                                        </div>
                                    </div>
                                </div>
                            </div>
END;
                        }
                    }
                    ?>

                    <input type="button" value="Next" name="detentionApplyFst"
                           class="edit-box-red detention-box-next stb">
                </div>
            </div>
            <form action="../../../Controller_and_Model/Controller/SubmitDetentionRemovalApplication.php" method="post">
                <div class="detention-box-sec">
                    <div class="edit-box-upper">
                        <div class="class-adding-subtitle str">
                            Selected Detention
                        </div>
                        <div class="share-box-fully-select apply-target-display stb">

                        </div>
                    </div>
                    <div class="edit-box-downer">
                        <div class="class-adding-subtitle str">
                            Please Provide Comments
                        </div>
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box str"
                                  name="detention-comment"
                                  placeholder="Write your description here..."></textarea>
                        <input type="submit" value="Next" name="detentionApplyFst"
                               class="edit-box-red detention-box-next stb">
                    </div>
                    <input type="hidden" class="detention-id" name="detention_id">
                </div>
            </form>
        </div>


        <div class="share-box class-swapping-box">
            <form action="../../../Controller_and_Model/Controller/SubmitClassExchangeApplication.php" method="post">
                <div class="edit-box-top">
                    <div class="edit-box-title stm">
                        Swap Classes
                    </div>
                    <span class="material-icons edit-box-close">
                            close
                        </span>
                </div>
                <div class="edit-box-downer swap-class-origin">
                    <div class="class-adding-subtitle str">
                        Swap this class
                    </div>
                    <?php
                    require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
                    require_once "../../../Controller_and_Model/Model/SubjectActions.php";

                    $tot_res = FetchAllStudIdAndSubjectClasses();
                    if ($tot_res[0]) {
                        $tot_res = $tot_res[1];
                    }
                    foreach ($tot_res as $subj_class_info) {
                        $subj_class_id = $subj_class_info[0];
                        $subj_id = $subj_class_info[2];
                        $subj_info = FetchSubjById($subj_id);
                        if ($subj_info[0]) {
                            $subj_info = $subj_info[1][0];
                            $subj_id = $subj_info[0];
                            $subj_name = $subj_info[1];
                            echo <<< END
                                <div class="class-swapping-row share-box-fully-select">
                                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="swap-origin" value=$subj_class_id style="">
                                    <div class="class-adding-text str">
                                        $subj_name
                                    </div>
                                </div>
                            END;
                        }
                    }
                    ?>
                    <div class="share-box-button-row">
                        <input type="button" value="Next" name="fstSwpNxt"
                               class="edit-box-blue share-box-double-button stb">
                        <input type="button" value="Back"
                               class="edit-box-white share-box-double-button edit-box-close stb">
                    </div>
                </div>
                <div class="edit-box-downer swap-class-target">
                    <div class="class-adding-subtitle str">
                        With this class
                    </div>
                    <?php
                    require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
                    require_once "../../../Controller_and_Model/Model/SubjectActions.php";

                    $tot_res = FetchAllStudIdAndSubjectClasses();
                    if ($tot_res[0]) {
                        $tot_res = $tot_res[1];
                    }
                    foreach ($tot_res as $subj_class_info) {
                        $subj_class_id = $subj_class_info[0];
                        $subj_id = $subj_class_info[2];
                        $subj_info = FetchSubjById($subj_id);
                        if ($subj_info[0]) {
                            $subj_info = $subj_info[1][0];
                            $subj_id = $subj_info[0];
                            $subj_name = $subj_info[1];
                            echo <<< END
                                <div class="class-swapping-row share-box-fully-select">
                                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="swap-target"
                                           value=$subj_class_id style="">
                                    <div class="class-adding-text str">
                                        $subj_name
                                    </div>
                                </div>
                            END;
                        }
                    }
                    ?>
                    <div class="share-box-button-row">
                        <input type="button" value="Next" name="secSwpNxt"
                               class="edit-box-blue share-box-double-button stb">
                        <input type="button" value="Back" name="secSwpBck"
                               class="edit-box-white share-box-double-button edit-box-close stb">
                    </div>
                </div>
                <div class="edit-box-downer swap-class-confirm">
                    <div class="class-adding-subtitle str">
                        Swap this class
                    </div>
                    <div class="class-swapping-row share-box-fully-select swap-origin-display stb">
                        AAA
                    </div>
                    <div class="class-adding-subtitle str">
                        With this class
                    </div>
                    <div class="class-swapping-row share-box-fully-select swap-target-display stb">
                        BBB
                    </div>
                    <input class="student-id" hidden="true" value="<?php
                    echo $_SESSION['id'];
                    ?>">
                    <div class="share-box-button-row">
                        <input type="hidden" value="<?php
                        echo $_SESSION['class_id'];
                        ?>" name="hr_class_id">
                        <input type="submit" value="Submit" class="edit-box-blue share-box-double-button stb">
                        <input type="button" value="Back" name="tirSwpBck"
                               class="edit-box-white share-box-double-button stb">
                    </div>
                </div>
            </form>
        </div>
        <div class="share-box class-adding-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Add Classes
                </div>
                <span class="material-icons edit-box-close">
                            close
                </span>
            </div>
            <form method="post" action="../../../Controller_and_Model/Controller/SubmitNewAddDropRequest.php">
                <div class="edit-box-downer">
                    <div class="class-adding-subtitle str">
                        Select Courses
                    </div>
                    <?php
                    require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
                    require_once "../../../Controller_and_Model/Model/SubjectActions.php";

                    $tot_res = FetchAllStudIdAndSubjectClasses();
                    if ($tot_res[0]) {
                        $tot_res = $tot_res[1];
                    }
                    foreach ($tot_res as $subj_class_info) {
                        $subj_class_id = $subj_class_info[0];
                        $subj_id = $subj_class_info[2];
                        $subj_info = FetchSubjById($subj_id);
                        if ($subj_info[0]) {
                            $subj_info = $subj_info[1][0];
                            $subj_id = $subj_info[0];
                            $subj_name = $subj_info[1];
                            echo <<< END
                                <div class="class-adding-row share-box-fully-select">
                                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="course-select" value=$subj_class_id style="">
                                    <div class="class-adding-text str">
                                        $subj_name
                                    </div>
                                </div>
                            END;
                        }
                    }
                    ?>
                    <input type="submit" value="Submit" class="edit-box-green stb">
                </div>
            </form>
        </div>
        <div class="share-box class-deleting-box">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Delete Classes
                </div>
                <span class="material-icons edit-box-close">
                            close
                </span>
            </div>
            <form method="post" action="../../../Controller_and_Model/Controller/SubmitNewAddDropRequest.php">
                <div class="edit-box-downer">
                    <div class="class-adding-subtitle str">
                        Select Courses
                    </div>
                    <?php
                    require_once "../../../Controller_and_Model/Model/SubjectClassActions.php";
                    require_once "../../../Controller_and_Model/Model/SubjectActions.php";

                    $tot_res = FetchAllStudIdAndSubjectClasses();
                    if ($tot_res[0]) {
                        $tot_res = $tot_res[1];
                    }
                    foreach ($tot_res as $subj_class_info) {
                        $subj_class_id = $subj_class_info[0];
                        $subj_id = $subj_class_info[2];
                        $subj_info = FetchSubjById($subj_id);
                        if ($subj_info[0]) {
                            $subj_info = $subj_info[1][0];
                            $subj_id = $subj_info[0];
                            $subj_name = $subj_info[1];
                            echo <<< END
                                <div class="class-deleting-row share-box-fully-select">
                                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="course-delete"
                                           value=$subj_class_id style="">
                                    <div class="class-adding-text str">
                                        $subj_name
                                    </div>
                                </div>
                            END;
                        }
                    }
                    ?>
                    <input type="submit" value="Submit" class="edit-box-red stb">
                </div>
            </form>
        </div>

        <div class="share-box pending-box">
            <input type="hidden" class="pending-box-status" name="pending_box_status">
            <!--
                    0：正在等待学科老师同意；
                    1：学科老师同意，正在等待班主任同意；
                    2:学科老师不同意；
                    3：学科老师+班主任同意，正在等待项目处同意；
                    4：学科老师同意，班主任不同意；
                    5:学科老师+班主任+项目处同意；
                    6：学科老师+班主任同意，项目处不同意；
            -->
            <input type="hidden" class="pending-box-id" name="subject_application_id">
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
                        <div class="ticket-box-row">
                            <span class="material-icons ticket-box-row-img">
                                check_circle
                            </span>
                            <div class="ticket-box-row-text">
                                Subject Teacher Approved
                            </div>
                        </div>
                        <div class="ticket-box-row">
                            <span class="material-icons ticket-box-row-img">
                                check_circle
                            </span>
                            <div class="ticket-box-row-text">
                                Homeroom Approved
                            </div>
                        </div>
                        <div class="ticket-box-row">
                            <span class="material-icons ticket-box-row-img">
                                check_circle
                            </span>
                            <div class="ticket-box-row-text">
                                Administrator Approved
                            </div>
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
                        <input type="text" class="pending-box-input stb" value="" disabled="disabled">
                        <input type="text" class="pending-box-input stb" value="" disabled="disabled">
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
                        <input type="text" value="" class="pending-box-input stb" disabled="disabled">
                        <input type="text" value="" class="pending-box-input stb" disabled="disabled">

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
                    <span class="current-class-name">
                        Chinese A1
                    </span>
                    Goal Score
                </div>
                <span class="material-icons edit-box-close">
                            close
                </span>
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
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input str"
                               name="mid-goal"
                               placeholder="">
                        <input type="hidden" class="first-target-id" name="first_target_id" value="">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title score-editing-innerbox-title">
                            Final Exam Goal
                        </div>
                        <input type="text" class="edit-box-innerbox-input score-editing-innerbox-input str"
                               name="final-goal"
                               placeholder="">
                        <input type="hidden" class="second-target-id" name="second_target_id" value="">
                    </div>
                    <input class="edit-test-id" type="hidden" name="test-id" value="">
                    <input class="edit-score-id" type="hidden" name="class-id" value="">
                    <input class="edit-box-green stb" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>