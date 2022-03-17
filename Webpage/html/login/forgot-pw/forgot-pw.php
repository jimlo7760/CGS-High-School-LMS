<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget Password</title>
    <link rel="stylesheet" type="text/css" href="../../../CSS/whole-common.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/login/common.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/login/forgot-pw/forgot-pw.css">
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">


    </script>
    <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile">

    </script>
    <script type="text/javascript" src="../../../js/login/forgin-pw/forgot-pw.js">

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
                <div class="top-right-question str">
                    Don't have an account?
                </div>
            </div>
            <div class="top-right">
                <div class="top-right-button stm" onclick="window.location='../register/register.html'">
                    Sign up
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="box box-fadein">
            <div class="box-content1">
                <div class="box-title stm">
                    Forgot password
                </div>
                <div class="box-content">
                    <div class="box-row">
                        <div class="forgot-descrip str">
                            Enter the email address associated with your account and we will send you a link to
                            reset your password.
                        </div>
                    </div>
                    <div class="box-row">
                        <div class="box-input">
                            <div class="box-input-title stb">
                            <span>
                                    Email Address
                            </span>
                                <span style="color:#1BA2B9">
                                   *
                            </span>
                            </div>
                            <div class="box-input-box">
                                <input type="text" class="box-input-text str" name="email">
                            </div>
                        </div>
                    </div>
                    <input type="button" value="Request Password Reset" class="box-button request-button stb">
                    <input type="button" value='Cancel' class="forgot-cancel str" onclick="window.location='../index.html'">
                </div>
            </div>
        </div>

        <div class="box box-reset-success">
            <div class="box-title">
                Next Step
            </div>
            <div class="box-content">
                <div class="box-row">
                    <div class="forgot-descrip">
                        An email has been sent to your inbox, please follow the instructions on the email to reset
                        your password.
                    </div>
                </div>
                <input type="submit" value="Back to Log in" class="box-button" onclick="window.location='../index.php'">
            </div>
        </div>
    </div>
</div>
</body>
</html>