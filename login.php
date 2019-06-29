<!doctype html>
<html>

<body>

<?php include 'filter.php';?>

<?php

if (!loggedIn()){

$servername = "localhost";
$username = "root";
$password = "mysqlPwd75";
$dbname = "project";
// Create connection

$link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

if ($link != null){

}

$sql = "SELECT * FROM user where username = \"" . $_POST["username"]. "\" and password = \"" . $_POST["password"] . "\";";
$result = mysqli_query($link, $sql);

if (!$result) {
    die(mysqli_error($link));
}

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION["login"] = "1";
	$_SESSION["username"] = $_POST["username"];
	header("location:home.php");
	
	
	
} else {
	header("location:index.php"); //to redirect back to "index.php" after logging out
    echo "Incorrect username/password.";
}

$link->close();
} else {
	header("location:home.php"); //to redirect back to "index.php" after logging out
}
?>

<br/>
<br/>



</body>
</html>


