<?php
session_start();
require_once "../Model/UserActions.php";
require_once "../Model/LoginCredentials.php";
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file) && basename($_FILES["avatar"]["name"]) != Null) {
    echo "Sorry, file already exists. But your change is recorded in our database";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["avatar"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && basename($_FILES["avatar"]["name"]) != Null) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
echo "<br>";
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename( $_FILES["avatar"]["name"])) . " has been uploaded.";
    } else if (basename($_FILES["avatar"]["name"]) != Null) {
        echo "Sorry, there was an error uploading your file.";
    }
}
$email = "";
$new_avatar_filename = htmlspecialchars(basename($_FILES["avatar"]["name"]));
if (isset($_POST["email"]) && $_POST["email"] != Null) {
    $email = get_post("email");
} else {
    $email = FetchStudInfoByStudId($_SESSION["id"]);
    if ($email[0]) {
        $email = $email[1][0][3];
    }
}

if (basename($_FILES["avatar"]["name"]) != Null) {
    $new_avatar_filename = htmlspecialchars(basename( $_FILES["avatar"]["name"]));
} else {
    $new_avatar_filename = FetchStudInfoByStudId($_SESSION["id"]);
    if ($new_avatar_filename[0]) {
        $new_avatar_filename = $new_avatar_filename[1][0][14];
    }
}
$res = UpdateEmailAndAvatar($_SESSION["id"], $email, $new_avatar_filename, $_SESSION["id"]);
echo "<br>";
if ($res[0]) {
    echo "Your avatar or email are updated! Please restart your browser and re-login to see the effect";
    ob_start();
    header('Location: '. "../../Webpage/html/student/student-setting.php");
    ob_end_flush();
    die();
} else {
    echo "Unexpected error happened, please contact administrator.";
}

