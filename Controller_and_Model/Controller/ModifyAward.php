<?php
session_start();
require_once "../Model/LoginCredentials.php";
require_once "../Model/StudAwardActions.php";
if ((isset($_POST["award-title"]) && $_POST["award-title"] != NULL) &&
    (isset($_POST["award-year"]) && $_POST["award-year"] != NULL)) {
    $title = get_post("award-title");
    $year = get_post("award-year");
    $tot_res = UpdateStudAwardByStudId()
}