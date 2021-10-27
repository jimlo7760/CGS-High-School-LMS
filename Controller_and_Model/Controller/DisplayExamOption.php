<?php
require_once '../Model/ExamActions.php';

$subj_class_id = $_REQUEST['classId'];
$tot_res = FetchExamByClassId($subj_class_id);
if($tot_res[0]){
    $tot_res = $tot_res[1];
}
foreach ($tot_res as $exam){
    $combineDisplay = 'G' . $exam[2] . ' ' . $exam[1];
    echo<<<END
<option value="$exam[0]">
    $combineDisplay
</option>
END;
}