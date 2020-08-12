<?php
require_once '../Model/UserActions.php';
require_once '../Model/LoginCredentials.php';
if(isset($_POST['full-name']) && isset($_POST['email']) && isset($_POST['password'])){
    $Result = UserFullNameCheck($_POST['full-name']);
    $TeacherResult = User_Role_Select($_POST['chi-name']);
    $rows = $TeacherResult->fetch_array();
    $teacherUserRole = $rows['user_role'];
    $RegisterResult = PasswordAndEmailUpdate($_POST['full-name'], $_POST['email'], $_POST['password'], $teacherUserRole);
}else{
    header('http://localhost:63342/School-Platform/Webpage/html/login/register/register-unccess.html?_ijt=5haq89oom3587o1vg45sh23ftj');
}
