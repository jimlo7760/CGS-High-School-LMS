<!DOCTYPE html>
<?php
if (!session_id()) {
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
    }
    echo "<input hidden='true' id='target-operation' value='";
    echo $_POST['target_operation'];
    echo "'>";
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