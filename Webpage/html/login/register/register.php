<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/login/common.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/login/register/register-common.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/login/register/register.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">

    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../../js/login/register/register.js">

    </script>
</head>
<body>
<img src="../../../img/lawn_forest_mountains_144578_1920x1080.jpg" width=100% class="background">
<div class="all">
    <div class="top-all">
        <div class="top-left">
            <div class="top-left-text stm">
                MYP Student Management System
            </div>
        </div>
        <div class="top-right">
            <div class="top-right-text">
                <div class="top-right-question str" onclick="window.location='../index.php'">
                    Already have an account?
                </div>
            </div>
            <div class="top-right">
                <div class="top-right-button stm">
                    Sign in
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <form action="" method="post">
            <div class="register-box box-fadein">
                <div class="box-title stm">
                    Sign Up
                </div>
                <div class="box-content">
                    <div class="box-row">
                        <div class="box-input">
                            <div class="box-input-title stb">
                            <span>
                                <strong>
                                    Full Name
                                </strong>
                            </span>
                                <span style="color:#1BA2B9">
                                <strong>
                                   *
                                </strong>
                            </span>
                            </div>
                            <div class="box-input-box">
                                <input type="text" class="register-box-input-text str" name="full-name">
                            </div>
                        </div>
                    </div>
                    <div class="box-row">
                        <div class="box-input">
                            <div class="box-input-title stb">
                            <span>
                                <strong>
                                    Email Address
                                </strong>
                            </span>
                                <span style="color:#1BA2B9">
                                <strong>
                                   *
                                </strong>
                            </span>
                            </div>
                            <div class="box-input-box">
                                <input type="text" class="register-box-input-text str" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="box-row">
                        <div class="box-input">
                            <div class="box-input-title stb">
                            <span>
                                <strong>
                                    Password
                                </strong>
                            </span>
                                <span style="color:#1BA2B9">
                                <strong>
                                   *
                                </strong>
                            </span>
                            </div>
                            <div class="box-input-box">
                                <input type="password" class="register-box-input-text str" name="password">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Sign Up" class="box-button stb">
                </div>
                <div class="register-bottom">
                    <div class="register-bottom-text str">
                        By signing up you agree to the
                        <span style="color:#1BA2B9; cursor: pointer">
                            Terms of Service
                        </span>
                        and
                        <span style="color:#1BA2B9; cursor: pointer">
                            Privacy Policy
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>