<?php

if ($_POST["newusername"] == "" && $_POST["newpassword"]== ""){
	header("location:index.html");
}

$servername = "localhost";
$username = "root";
$password = "moaaz@dell";
$dbname = "project";

$link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

$sql = "SELECT * FROM user where username = \"" . $_POST["newusername"]. "\";" ;
$result = mysqli_query($link, $sql);

if (!$result) {
    die(mysqli_error($link));
}

if (mysqli_num_rows($result) > 0) {

    // if username already chosen, try a new one
    echo "Try another username.";

} else {

    $sqlInsert = "Insert into user (Username, Password) VALUES (\"" . $_POST["newusername"] . "\",\"" . $_POST["newpassword"] . "\");";
    //mysqli_query($link, $sqlInsert);

    if ($link->query($sqlInsert) === TRUE){
        // new row added
       
        //header("location:index.html");
		//echo "Enter your newly created username and password on the next page.";
		//header( "refresh:5; url=Location: index.html" );
		
		echo "New user created. Refreshing in a moment...";
		echo "<script>setTimeout(\"location.href = 'index.php';\",3000);</script>";
		
    } else {
        echo $link->error;
    }

    $link->close();


}

?>