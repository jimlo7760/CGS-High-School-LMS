<?php
session_start();
require_once "../Model/StudViolationActions.php";
require_once "../Model/LoginCredentials.php";
if ($_POST["detention-comment"] == NULL) {
    echo "Please input comments";
} else {
    $removal_comments = get_post("detention-comment");
}
$vio_id = get_post("detention_id");
if ($_SESSION["user_role"] == 0) {
    $tot_res = UpdateDetentionRemoval($vio_id, $removal_comments, 0); // change from "initialized" to "pending"
    if ($tot_res[1] > 0) {
        echo "Ticket submitted.";
    }
} else if ($_SESSION["user_role"] == 1) {
    // Teachers should provide their reason to approve/disapprove the request, and change the status correspondingly.
    // use same function above.
}
