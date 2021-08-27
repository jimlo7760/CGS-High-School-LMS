<?php
session_start();
require_once "../Model/StudUnivActions.php";
require_once "../Model/LoginCredentials.php";
if ((isset($_POST["university-name"]) && $_POST["university-name"] != NULL) &&
    (isset($_POST["university-major"]) && $_POST["university-major"] != NULL)) {
    $univ_name = get_post("university-name");
    $univ_major = get_post("university-major");
}
