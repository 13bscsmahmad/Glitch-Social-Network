<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php include 'filter.php';?>

<?php

if (loggedIn()){
    //session_destroy(); //destroy the session
    //exit();
    header("location:home.php");
}
?>


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
</html>