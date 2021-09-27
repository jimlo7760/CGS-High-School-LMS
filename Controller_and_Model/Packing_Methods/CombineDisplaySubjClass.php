<?php
require_once "../Model/SubjectClassActions.php";
require_once "../Model/SubjectActions.php";

/**
 * @param $subj_class_id int(11) Subject class ID.
 * @return string combined Grade + Subject + Class.
 */
function CombineDisplaySubjClass($subj_class_id): string
{
    $tot_res = FetchSubjClassBySubjClassId($subj_class_id);
    $subj_class_subj_id = $tot_res[1][0][2];
    $subj_class_grade = $tot_res[1][0][5];
    $subj_class_name = $tot_res[1][0][7];

    $tot_res = FetchSubjById($subj_class_subj_id);
    $subj_class_subj = $tot_res[1][0][1];

    return 'G' . $subj_class_grade . ' ' .$subj_class_subj . ' ' . $subj_class_name;
}