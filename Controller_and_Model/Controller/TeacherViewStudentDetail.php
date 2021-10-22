<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/SubjectClassActions.php";
require_once "../Model/SubjectActions.php";
require_once "../Model/ExamActions.php";
require_once "../Model/StudScoreActions.php";
session_start();
$conn = createconn();
$subj_class_ids = [];

$term = $_REQUEST["stud_id"];
$_SESSION["stud_id"] = $_REQUEST['stud_id'];
if (isset($_REQUEST['stud_id'])) {
    $all_subj_class = FetchAllStudIdAndSubjectClasses();
    if ($all_subj_class[0]) {
        $all_subj_class = $all_subj_class[1];
    }
    foreach ($all_subj_class as $subj_class) {
        $subj_class_id = $subj_class[0];
        $class_stud_ids = $subj_class[3];
        $class_stud_ids = explode(",", $class_stud_ids);
        foreach ($class_stud_ids as $stud_id) {
            if ($stud_id == $_REQUEST['stud_id']) {
                array_push($subj_class_ids, $subj_class_id);
                break;
            }
        }
    }
    $_SESSION['subj_class_ids'] = $subj_class_ids;
    $display = "";
    $count = 0;
    foreach($subj_class_ids as $subj_class_id){
        $tot_res = FetchSubjClassBySubjClassId($subj_class_id);
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
        $display .= '<div class="right-navi-item">' . $subj_class_combine . '</div>' . '<div class="right-navi-gap">&nbsp;</div>';
    }
    $display  .= $_REQUEST['stud_id'];
    foreach($subj_class_ids as $subj_class_id){
        $tot_res = FetchSubjClassBySubjClassId($subj_class_id);
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
        $display .= "<div class='subjectT-studentScore' id='" . $subj_class_combine . "' </div>";
        $display .= '<div class="subjectT-studentScore-add-outer">
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
                        <div class="right-table-content stb">';
        $tot_res = FetchExamByClassId($subj_class_id);
        if($tot_res[0]){
            $tot_res = $tot_res[1];
        }
        ini_set("display_errors", "On");//打开错误提示
        ini_set("error_reporting",E_ALL);//显示所有错误
        foreach($tot_res as $exam_detail){
            $display .= '<div class="right-table-content-row">';
            $test_id = $exam_detail[0];
            $test_name = $exam_detail[1];
            $test_type = $exam_detail[5];
            $test_max_score = $exam_detail[9];
            $test_description = $exam_detail[8];
            $test_comment = $exam_detail[10];

            $tot_score_res = FetchScoresByStudIdAndExamId($_REQUEST['stud_id'], $test_id);
            $test_score = $tot_score_res[1][0][3];
            $display .= '<div class="right-table-content-title">';
            $display .= $test_name;
            $display .= '</div>';
            $display .= '<div class="right-table-content-grade">';
            $display .= $test_score;
            $display .= ' / ';
            $display .= $test_max_score;
            $display .= '</div>';
            $display .= '<div class="right-table-content-type">';
            if($test_type == 0){
                $display .= "Monthly Examination";
            }else if($test_type == 1){
                $display .= "Mid-term Examination";
            }else if($test_type == 2){
                $display .= "Final Examination";
            }
            $display .= '</div>';
            $display .= '<div class="right-table-content-action">
                                    <span class="material-icons right-table-content-action-edit">
                                        edit
                                    </span>
                                    <span class="material-icons right-table-content-delete">
                                        delete_forever
                                    </span>
                                </div>';
            $display .= '<input type="hidden" class="test-box-des" value="';
            $display .= $test_description;
            $display .= '">';
            $display .= '<input type="hidden" class="test-box-comment" value="';
            $display .= $test_comment;
            $display .= '">';
            $display .= '<input type="hidden" class="current-test-id" value="';
            $display .= $test_id;
            $display .= '">';
            $display .= "</div>";
        }
        $display .= "</div>";
    }
    $display .= "</div>";
    echo $display;

}