<!DOCTYPE html>
<?php
if (!session_id()) {
    session_start();
}
require_once '../../../Controller_and_Model/Model/UserActions.php';
if($_POST['current_stud_id']){
    $stud_id = $_POST['current_stud_id'];
    $_SESSION['current_stud_id'] = $stud_id;
}else{
    $stud_id = $_SESSION['current_stud_id'];
}
$tot_res = FetchStudInfoByStudId($stud_id);
if($tot_res[0]){
    $tot_res = $tot_res[1][0];
}
$stud_id = $tot_res[0];
$stud_eng_name = $tot_res[2];
$stud_chi_name = $tot_res[1];
$stud_num = $tot_res[8];
$stud_email = $tot_res[3];
$stud_avatar = $tot_res[14];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
            echo $stud_eng_name . "'s Info";
        ?>
    </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/panel-common.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/panel/subjectTeacher/subjectTeacher-common.css">
    <link rel="stylesheet" type="text/css"
          href="../../CSS/panel/subjectTeacher/subjectTeacher-student/subjectTeacher-student.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../js/panel/panel-common.js">

    </script>
    <script type="text/javascript" src="../../js/panel/subjectTeacher/subjectTeacher-common.js">

    </script>
    <script type="text/javascript"
            src="../../js/panel/subjectTeacher/subjectTeacher-student/subjectTeacher-student.js">

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
                        <?php
                        echo $_SESSION['eng_name'];
                        ?>
                    </div>
                    <img src="../../img/图像 1@2x.png" height="45" width="45" class="right-top-person-portrait"/>
                    <i class="material-icons right-top-person-arrow initial_transform">
                        keyboard_arrow_down
                    </i>
                </div>
            </div>
        </div>

        <div class="subjectT-student-class">
            <div class="right-down">
                <div class="right-info test-info">
                    <div class="right-return return-from-student">
                    <span class="material-icons right-return-img">
                        chevron_left
                    </span>
                        <div class="right-return-text sts" onclick="window.location='subjectTeacher-classList.php'">
                            Students
                        </div>
                    </div>
                    <div class="right-info-row">
                        <img src="../../img/图像%201@2x.png" height="70" width="70" class="right-info-portrait">
                        <div class="right-info-left stb">
                            <div class="right-title">
                                <?php
                                echo $stud_eng_name;
                                ?>
                            </div>
                            <div class="right-subtitle">
                                <?php
                                echo $stud_chi_name;
                                ?>
                            </div>
                        </div>
                        <div class="right-info-right">
                            <input type="hidden" class="current_stud_id" value="<?php echo $stud_id;?>">
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    ID
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    <?php
                                    echo $stud_num;
                                    ?>
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
                                    <?php
                                    echo $_SESSION['subj_class_grade']
                                    ?>
                                </div>
                            </div>
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    Class
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    <?php
                                    echo $_SESSION['subj_class_name'];
                                    ?>
                                </div>
                            </div>
                            <div class="right-info-dataBox">
                                <div class="right-info-dataBox-title str">
                                    Email
                                </div>
                                <div class="right-info-dataBox-content stm">
                                    <?php
                                    echo $stud_email;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-nevi str">
                    <?php
                    require_once '../../../Controller_and_Model/Model/SubjectClassActions.php';
                    require_once '../../../Controller_and_Model/Model/SubjectActions.php';
                    require_once '../../../Controller_and_Model/Model/ExamActions.php';
                    require_once '../../../Controller_and_Model/Model/StudScoreActions.php';

                    $displayArray = [];
                    $tot_res = FetchAllSubjClass();
                    if($tot_res){
                        $tot_res = $tot_res[1];
                    }
                    foreach($tot_res as $subj_class_detail){
                        $subj_class_id = $subj_class_detail[0];
                        $raw_stud = $subj_class_detail[3];
                        $raw_stud = explode(',', $raw_stud);
                        foreach($raw_stud as $stud_ID){
                            if($stud_ID == $stud_id){
                                array_push($displayArray, $subj_class_id);
                            }
                        }
                    }

                    $count = 0;
                    foreach($displayArray as $class_to_search){
                        $count += 1;
                        $tot_res = FetchSubjClassBySubjClassId($class_to_search);
                        if($tot_res[0]){
                            $tot_res = $tot_res[1][0];
                        }
                        $subj_class_id = $tot_res[0];
                        $subj_class_subj_id = $tot_res[2];
                        $subj_class_grade = $tot_res[5];
                        $subj_class_name = $tot_res[7];
                        $tot_res = FetchSubjById($subj_class_subj_id);
                        if($tot_res[0]){
                            $tot_res = $tot_res[1][0];
                        }
                        $subj_class_subj = $tot_res[1];
                        $subj_class_combine = 'G' . $subj_class_grade . ' ' . $subj_class_subj . ' ' . $subj_class_name;
                        if($count == 1){
                            echo<<<END
                    <div class="right-navi-item navi-current">
                        $subj_class_combine
                    </div>
END;
                        }else{
                            echo<<<END
<div class="right-navi-item">
                        $subj_class_combine
                    </div>
END;

                        }
                        echo<<<END
                    <div class="right-navi-gap">
                        &nbsp;
                    </div>
END;
                    }
                    ?>
                    <div class="right-navi-gap-large">
                        &nbsp;
                    </div>

                </div>
                <?php
                $count = 0;
                foreach($displayArray as $class_to_display){
                    $count += 1;
                    if($class_to_display == $_SESSION['subj_class_id']){
                        echo '<div class="subjectT-studentScore permit-modification" ';
                    }else{
                        echo ' <div class="subjectT-studentScore noPermit-modification" ';
                    }
                    if($count != 1){
                        echo "style = 'display: none' ";
                    }
                    $tot_res = FetchSubjClassBySubjClassId($class_to_display);
                    if($tot_res[0]){
                        $tot_res = $tot_res[1][0];
                    }
                    $subj_class_id = $tot_res[0];
                    $subj_class_subj_id = $tot_res[2];
                    $subj_class_grade = $tot_res[5];
                    $subj_class_name = $tot_res[7];
                    $tot_res = FetchSubjById($subj_class_subj_id);
                    if($tot_res[0]){
                        $tot_res = $tot_res[1][0];
                    }
                    $subj_class_subj = $tot_res[1];
                    $subj_class_combine = 'G' . $subj_class_grade . ' ' . $subj_class_subj . ' ' . $subj_class_name;
                    $subj_class_replaced = str_replace(" ", "_", $subj_class_combine);
                    echo 'id="' . $subj_class_replaced . '">';
                    echo<<<END
                    <input type="hidden" class="current-display-class" value="$subj_class_id">
                    <div class="subjectT-studentScore-add-outer">
                        <div class="subjectT-studentScore-add">
                            <span class="material-icons right-down-info-button-img">
                                add
                            </span>

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
END;
                    $tot_exam = FetchExamByClassId($class_to_display);
                    if($tot_exam[0]){
                        $tot_exam = $tot_exam[1];
                    }
                    foreach($tot_exam as $stud_exam){
                        $exam_id = $stud_exam[0];
                        $exam_title = $stud_exam[1];
                        $exam_type = $stud_exam[5];
                        if($exam_type == 0){
                            $exam_type = 'Monthly Examination';
                        }else if($exam_type == 1){
                            $exam_type = "Mid-term Examination";
                        }else if($exam_type == 2){
                            $exam_type = "Final Examination";
                        }
                        $exam_max = $stud_exam[9];
                        $exam_des = $stud_exam[8];
                        $exam_comment = $stud_exam[10];
                        $exam_time = $stud_exam[6];
                        $tot_score = FetchScoresByStudIdAndExamId($stud_id, $exam_id);

                        if($tot_score[0]) {
                            $tot_score = $tot_score[1][0];
                            $exam_score = $tot_score[3];
                            $score_comment = $tot_score[8];
                            echo <<<END
                            <div class="right-table-content-row">
                                <div class="right-table-content-title">
                                    $exam_title
                                </div>
                                <div class="right-table-content-grade">
                                    $exam_score / $exam_max
                                </div>
                                <div class="right-table-content-type">
                                    $exam_type
                                </div>
                                <div class="right-table-content-date">
                                    $exam_time
                                </div>
                                <div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>
                                <!--                                <input type="hidden" class="current-test-student" value="1-Danny-6 2-Ken-7">-->
                                <input type="hidden" class="current-test-des" value="$exam_des">
                                <input type="hidden" class="current-test-comment" value="$exam_comment">
                                <input type="hidden" class="current-test-id" value="$exam_id">
                                <input type="hidden" class="current-test-max-score" value="$exam_max">
                                <input type="hidden" class="current-score-comment" value="$score_comment">
                            </div>
END;
                        }
                    }
                    echo "</div></div></div>";
                }
                ?>
            </div>
        </div>
        <div class="grey-bg">

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
                <div class="personal-panel-row-last str" onclick="window.location='../../../Controller_and_Model/Controller/Logout.php'">
                    Sign Out
                </div>
            </div>
        </div>

        <div class="share-box edit-student-score">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Edit Student's Score
                </div>
                <span class="material-icons edit-box-close">
                    close
                </span>
            </div>
            <form method="post" action="../../../Controller_and_Model/Controller/UpdateStudSubjScore.php">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Test Title
                        </div>
                        <input class="edit-box-innerbox-input stb" name="edit-test-title" contenteditable="false" disabled="disabled" >
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Student Name
                        </div>
                        <input class="edit-box-innerbox-input stb" name="edit-test-title" contenteditable="false" disabled="disabled" >
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Score
                        </div>
                        <input class="edit-box-innerbox-input stb" name="edit-test-score">
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Comment
                        </div>
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box str" name="edit-score-comment" placeholder="Write your comment here..." spellcheck="false"></textarea>
                    </div>
                    <input type="hidden" class="test-id" name="edit-exam-id" value="">
                    <input type="hidden" class="student-id" name="edit-score-stud" value="<?php echo $stud_id;?>">
                    <input class="edit-box-green stb" type="submit" value="Save">
                </div>
            </form>
        </div>
        <div class="share-box subjectT-addScore-box" value="">
            <div class="edit-box-top">
                <div class="edit-box-title stm">
                    Add New Exam / Test
                </div>
                <span class="material-icons edit-box-close">
                    close
                </span>
            </div>
            <form method="post" action="../../../Controller_and_Model/Controller/AddStudSubjScore.php">
                <input type="hidden" class="add-score-class" name="add-score-class" value="">
                <input type="hidden" class="add-score-stud" name="add-score-stud" value="<?php echo $stud_id; ?>">
                <div class="edit-box-downer">
                    <div class="edit-box-innerbox str">
                        <input id="test-stud-id" hidden="true" value="">
                        <div class="edit-box-innerbox-title">
                            Choose an Exam / Test
                        </div>
                        <select name="add-exam-id" class="edit-box-innerbox-select subjectT-addCourse-box-select">

                        </select>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Comment
                        </div>
                        <textarea type="text" class="edit-box-innerbox-input edit-comment-box str" name="add-score-comment"
                                  placeholder="Write your comment here..."></textarea>
                    </div>
                    <div class="edit-box-innerbox str">
                        <div class="edit-box-innerbox-title">
                            Score
                        </div>
                        <input type="text" class="edit-box-innerbox-input str" name="add-score-val"
                               placeholder="">
                    </div>
<!--                    <div class="edit-box-innerbox str">-->
<!--                        <div class="edit-box-innerbox-title">-->
<!--                            Attachment-->
<!--                        </div>-->
<!--                        <div class="edit-box-click-row">-->
<!--                            <button class="edit-box-innerbox-input click-button str" type="file">-->
<!--                                Click here to upload an attachment-->
<!--                            </button>-->
<!--                            <span class="material-icons click-icon">-->
<!--                                add-->
<!--                            </span>-->
<!--                            <input type="file" name="add-score-attachment" capture="camera" class="click-hidden-input str"-->
<!--                                   placeholder="Click to upload an attachment">-->
<!--                             input标签调用调用上传方法                      -->
<!--                        </div>-->
<!--                    </div>-->

                    <input class="edit-box-green stb" type="submit" value="Save">
                </div>
            </form>
        </div>


        <div class="result-box">

        </div>
    </div>
</div>