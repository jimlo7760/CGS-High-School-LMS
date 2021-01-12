<?php
require_once "../Model/UserActions.php";
require_once "../Model/LoginCredentials.php";
session_start();
if ((isset($_POST["current-password"]) && $_POST["current-password"] != NULL) &&
    (isset($_POST["new-password1"]) && $_POST["new-password1"] != NULL) &&
    (isset($_POST["new-password2"]) && $_POST["new-password2"] != NULL)) {
    $current_pw = get_post("current-password");
    $new_pw_1 = get_post("new-password1");
    $new_pw_2 = get_post("new-password2");

    if (UserAuth($_SESSION["school_num"], $current_pw)[0]) {
        if ($new_pw_1 === $new_pw_2) {
            $res = UpdateStudPasswordByStudId($_SESSION["id"], $new_pw_1, $_SESSION["id"]);
            if ($res[0]) {
                echo "Your password is updated! Please restart your browser and re-login to see the effect";
            } else {
                echo "Unexpected error happened, please contact administrator.";
            }
        } else {
            echo "Two new passwords inputted are not consistent.";
        }
    } else {
        echo "Current password is incorrect";
    }
}



