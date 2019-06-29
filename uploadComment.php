<?php include 'filter.php'; ?>
<?php include 'functions.php'; ?>

<?php

if (loggedIn()){

    // receive comment

    $comment = $_REQUEST["comment"]; // store comment
    $comment = addslashes($comment); // add slashes

    $status_id = $_REQUEST["statusid"]; // get statusid

    $servername = "mydb";
    $username = "root";
    $password = "mysqlPwd75";
    $dbname = "project";
    // Create connection

    $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

    $sqlInsert = "Insert into comments (status_id, commented_user, comment) VALUES (\"" . $status_id . "\", \"" . $_SESSION["username"]. "\",\"" . $comment. "\");";

    if ($link->query($sqlInsert) === TRUE){


        echo "Your comment has been uploaded. Refreshing in a moment...";
        echo "<script>setTimeout(\"location.href = 'home.php';\",1500);</script>";

    } else {
        echo $link->error;
    }

    $link->close();
    return;



} else {
    header("location:index.php");
}

?>