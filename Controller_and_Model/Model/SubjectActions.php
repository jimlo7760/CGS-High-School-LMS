<?php
require_once 'LoginCredentials.php';
function InsertNewSubject($sujbectName) {
    $conn = createconn();
    $stmt = $conn->prepare("insert into subject(subj_name, create_time) values (?, ?)");
    $stmt->bind_param("ss", $stmt_subj_name, $stmt_create_time);
    $stmt_subj_name = $sujbectName;
    $stmt_create_time = date("Y-m-d H:i:s");
    $stmt->execute();
    $res = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}

function UpdateSubject($sujbectName, $audit_res) {
    $conn = createconn();
    $stmt = $conn->prepare("update subject set status = ? where subj_name = ?");
    $stmt->bind_param("is", $stmt_subj_name, $stmt_status);
    $stmt_subj_name = $sujbectName;
    $stmt_status = $audit_res;
    $stmt->execute();
    $res = $stmt->affected_rows;
    $stmt->close();
    $conn->close();
    if (!$res) {
        return [false, $res];
    } else {
        return [true, $res];
    }
}
