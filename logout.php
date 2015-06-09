<?php include 'filter.php';?>

<?php

if (loggedIn()){
    session_start(); //to ensure you are using same session
    session_destroy(); //destroy the session
    header("location:index.php"); //to redirect back to "index.php" after logging out
    exit();
} else {
    header("location:index.php");
}
?>