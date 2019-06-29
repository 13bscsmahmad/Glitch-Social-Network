<?php

if ($_POST["newusername"] == "" && $_POST["newpassword"]== ""){
	header("location:index.html");
}

$servername = "localhost";
$username = "root";
$password = "mysqlPwd75";
$dbname = "project";

$link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

$sql = "SELECT * FROM user where username = \"" . $_POST["newusername"]. "\";" ;
$result = mysqli_query($link, $sql);

if (!$result) {
    die(mysqli_error($link));
}

if (mysqli_num_rows($result) > 0) {

    // if username already chosen, try a new one
    echo "Username already chosen. Try another username.";

} else {

    if(isset($_FILES['profilepic']) && !empty($_FILES["profilepic"]) && ($_FILES["profilepic"]["size"] > 0) ) {

        $target_dir = "ProfilePics/";
        $target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // check if file already exists
        if (file_exists($target_file)) {
            $date = new DateTime();
            $target_file = $target_file . $date->getTimestamp();
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            return;
        } else {

            if(move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)){

                // if all criteria met and file uploaded to server

                $sqlInsert = "Insert into user (Username, Password, profile_pic, Email) VALUES (\"" . $_POST["newusername"] . "\",\"" . $_POST["newpassword"] . "\",\"" . $_FILES["profilepic"]["name"] . "\",\"". $_POST["email"] ."\");";
                //mysqli_query($link, $sqlInsert);

                if ($link->query($sqlInsert) === TRUE){
                    // new row added

                    //header("location:index.html");
                    //echo "Enter your newly created username and password on the next page.";
                    //header( "refresh:5; url=Location: index.html" );

                    echo "New user created successfully. Redirecting in a moment...";
                    //echo $_FILES["profilepic"]["name"] . "uploaded as well.";
                    echo "<script>setTimeout(\"location.href = 'index.php';\",3000);</script>";

                } else {
                    echo $link->error;
                }

                $link->close();
                return;





            } else {
                // handle for case if some unknown error while uploading picture
                echo "Error uploading profile picture to server. Please re-register. Redirecting...";
                echo "<script>setTimeout(\"location.href = 'index.php';\",3000);</script>";

            }


        }



    } else {

        //handle for case if no file uploaded;

        $sqlInsert = "Insert into user (Username, Password, Email) VALUES (\"" . $_POST["newusername"] . "\",\"" . $_POST["newpassword"] . "\",\"". $_POST["email"] . "\");";
        //mysqli_query($link, $sqlInsert);

        if ($link->query($sqlInsert) === TRUE){
            // new row added

            //header("location:index.html");
            //echo "Enter your newly created username and password on the next page.";
            //header( "refresh:5; url=Location: index.html" );

            echo "New user created. Redirecting in a moment...";
            echo "<script>setTimeout(\"location.href = 'index.php';\",3000);</script>";

        } else {
            echo $link->error;
        }

        $link->close();
        return;

    }







}

?>