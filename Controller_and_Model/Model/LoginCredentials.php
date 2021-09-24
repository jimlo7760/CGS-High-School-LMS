<?php
$db_username = 'root';
$db_database = 'mypplatform';
$db_hostname = 'localhost:3306';
$db_password = 'root';
date_default_timezone_set("Asia/Shanghai");


function createconn() {
    global $db_database, $db_username, $db_hostname, $db_password;
    return new mysqli($db_hostname, $db_username, $db_password, $db_database);
}

function get_post($var) {
    $conn = createconn();
    $res = $conn->real_escape_string($_POST[$var]);
    $conn->close();
    return $res;
}

function get_get($var) {
    $conn = createconn();
    $res = $conn->real_escape_string($_GET[$var]);
    $conn->close();
    return $res;

}


