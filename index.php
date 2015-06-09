<!--<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
</head>-->
<?php include 'filter.php';?>

<?php

if (loggedIn()){
    //session_destroy(); //destroy the session
    //exit();
    header("location:home.php");
}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Log In</title>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />

<!-- Styles -->
<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>

<style>
    body {
        padding-top: 90px;
    }
    .panel-login {
        background:  none repeat scroll 0 0 rgba(255, 255, 255, 0.6);
        border: 3px solid rgba(255, 255, 255, 0.3);

        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        -ms-border-radius: 20px;
        -o-border-radius: 20px;
        border-radius: 10px;

        -webkit-box-shadow: 0 13px 48px rgba(0, 0, 0, 0.43);
        -moz-box-shadow: 0 13px 48px rgba(0, 0, 0, 0.43);
        -ms-box-shadow: 0 13px 48px rgba(0, 0, 0, 0.43);
        -o-box-shadow: 0 13px 48px rgba(0, 0, 0, 0.43);
        box-shadow: 0 13px 48px rgba(0, 0, 0, 0.43);


    }
    .panel-login>.panel-heading {
        color: #00415d;
        background-color: rgba(255,255,255,0);
        text-align:center;
    }
    .panel-login>.panel-heading a{
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-login>.panel-heading a.active{
        color: #029f5b;
        font-size: 18px;
    }
    .panel-login>.panel-heading hr{
        margin-top: 10px;
        margin-bottom: 0px;
        clear: both;
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    }
    .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
        height: 45px;
        border: 1px solid #ddd;
        font-size: 16px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-login input:hover,
    .panel-login input:focus {
        outline:none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-color: #ccc;
    }
    .btn-login {
        background-color: #59B2E0;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #59B2E6;
    }
    .btn-login:hover,
    .btn-login:focus {
        color: #fff;
        background-color: #53A3CD;
        border-color: #53A3CD;
    }
    .forgot-password {
        text-decoration: underline;
        color: #888;
    }
    .forgot-password:hover,
    .forgot-password:focus {
        text-decoration: underline;
        color: #666;
    }

    .btn-register {
        background-color: #1CB94E;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #1CB94A;
    }
    .btn-register:hover,
    .btn-register:focus {
        color: #fff;
        background-color: #1CA347;
        border-color: #1CA347;
    }


</style>

<script>
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });
</script>

</head>


<body style="background-image: url('images/resource/login-bg.png')">




<!---
<div class="login-sec">
<div class="login">
    <div class="login-form">
        <form action="dashboard.html" method="post">
            <fieldset><input type="text" placeholder="Username" /><i class="fa fa-user"></i></fieldset>
            <fieldset><input type="password" placeholder="Password" /><i class="fa fa-unlock-alt"></i></fieldset>
            <label><input type="checkbox" />Remember me</label><button type="submit" class="blue">LOG IN</button>
        </form>
        <a href="#" title="">Forgot Password?</a>






    </div>

</div> Log in Sec -->
<div class="container" style="">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login" style="margin-top:50px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="registeruser.php" method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="newusername" id="newusername" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="newpassword" id="newpassword" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label>Upload profile picture</label>
                                    <input type="file" name="profilepic" id="profilepic"/>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>



<!--<body>




<form action="login.php" method="post">

    <label>Username</label><input type="text" name="username"/>
    <label>Password</label><input type="password" name="password">

    <input type="submit" value="Login">

</form>

<br/>
<br/>


If you're a new user, click <u>here</u>.

<form action="registeruser.php" method="post" enctype="multipart/form-data">

<label>Username</label><input type="text" name="newusername"/>
    <label>Password</label><input type="password" name="newpassword">
    <br>

    <label>Upload profile picture</label>
    <input type="file" name="profilepic" id="profilepic"/>
    <br/>

    <input type="submit" value="Register">

</form>


</body>
</html>-->

